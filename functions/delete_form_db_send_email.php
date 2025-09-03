<?php
add_filter('wpcf7_form_elements', function ($content) {
    return do_shortcode($content);
});




add_action('init', function () {
    if (!wp_next_scheduled('cf7_auto_cleanup_event')) {
        wp_schedule_event(time(), 'daily', 'cf7_auto_cleanup_event');
    }
});


add_action('admin_post_run_cf7_cleanup_now', 'cf7_actual_table_cleanup');

function cf7_actual_table_cleanup()
{
    if (!current_user_can('manage_options')) {
        wp_die('Unauthorized');
    }

    global $wpdb;
    $entry_table = $wpdb->prefix . 'cf7_vdata_entry';
    $data_table  = $wpdb->prefix . 'cf7_vdata';

    $today = new DateTime('now', wp_timezone());
    $cutoff = $today->format('Y-m-d H:i:s');


    // Step 1: Get old data_id + cf7_id for entries with submit_time < today
    $old_ids = $wpdb->get_results(
        $wpdb->prepare("
            SELECT data_id, cf7_id 
            FROM $entry_table 
            WHERE name = 'submit_time' 
            AND CAST(value AS DATETIME) <= %s
        ", $cutoff),
        ARRAY_A
    );

    if (empty($old_ids)) {
        echo "✅ No old entries found before $cutoff.";
        exit;
    }

    echo "🔍 Found " . count($old_ids) . " old submissions.<br>";

    // Group data_ids by cf7_id
    $form_data_ids = [];
    foreach ($old_ids as $item) {
        $form_data_ids[$item['cf7_id']][] = $item['data_id'];
    }

    $csv_paths = [];

    foreach ($form_data_ids as $cf7_id => $data_ids) {
        $placeholders = implode(',', array_fill(0, count($data_ids), '%d'));

        // Get all fields for this form's old submissions
        $fields = $wpdb->get_results(
            $wpdb->prepare("
                SELECT data_id, name, value 
                FROM $entry_table 
                WHERE data_id IN ($placeholders)
            ", ...$data_ids),
            ARRAY_A
        );

        // Group data per submission
        $grouped = [];
        foreach ($fields as $field) {
            $grouped[$field['data_id']][$field['name']] = $field['value'];
        }

        if (empty($grouped)) continue;

        // Export CSV for this form
        $filename = "cf7_form_{$cf7_id}_" . date('Ymd_His') . ".csv";
        $filepath = WP_CONTENT_DIR . '/uploads/' . $filename;
        $fp = fopen($filepath, 'w');

        // Headers
        $headers_written = false;
        foreach ($grouped as $row) {
            if (!$headers_written) {
                fputcsv($fp, array_keys($row));
                $headers_written = true;
            }
            fputcsv($fp, array_values($row));
        }

        fclose($fp);
        $csv_paths[] = $filepath;
        echo "✅ Exported form ID $cf7_id to $filepath<br>";

        // Delete data entries
        $wpdb->query(
            $wpdb->prepare("DELETE FROM $entry_table WHERE data_id IN ($placeholders)", ...$data_ids)
        );
        $wpdb->query(
            $wpdb->prepare("DELETE FROM $data_table WHERE id IN ($placeholders)", ...$data_ids)
        );
    }

    // Send email with all CSVs attached
    if (!empty($csv_paths)) {
        $admin_email = get_option('admin_email');
        $email_sent = wp_mail(
            $admin_email,
            'CF7 Form Backups - ' . date('Y-m-d'),
            'Attached are the CSV backups per form for all submissions older than today.',
            [],
            $csv_paths
        );

        if ($email_sent) {
            echo "📧 Email sent to $admin_email<br>";
        } else {
            echo "❌ Failed to send email. Check your SMTP settings.<br>";
        }
    } else {
        echo "❌ No CSVs generated.<br>";
    }

    echo "✅ Cleanup finished.";
    exit;
}
