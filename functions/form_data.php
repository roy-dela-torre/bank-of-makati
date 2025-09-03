<?php
function custom_bmi_branch_form($tag)
{
    // Check if the field name is 'bmi_area'
    if ($tag['name'] != 'bmi_area') {
        return $tag;
    }

    // Load JSON data
    $json_file = get_stylesheet_directory() . '/JSON Data/branch.json';
    $json_data = file_get_contents($json_file);
    $data = json_decode($json_data, true);

    // If no data found, return the original tag
    if (!$data || !isset($data['bmi_branch']['branches'])) {
        return $tag;
    }

    // Initialize the options with a placeholder
    $tag['raw_values'][] = '';
    $tag['labels'][] = 'Area (Required)';

    // Loop through the JSON data and add options
    foreach ($data['bmi_branch']['branches'] as $area => $branches) {
        $tag['raw_values'][] = $area;
        $tag['labels'][] = $area;
    }

    // Create pipes for the dynamic options
    $pipes = new WPCF7_Pipes($tag['raw_values']);
    $tag['values'] = $pipes->collect_befores();
    $tag['pipes'] = $pipes;

    return $tag;
}
add_filter('wpcf7_form_tag', 'custom_bmi_branch_form', 10, 2);

function custom_bmi_branch_group_form($tag)
{
    // Define the groups and their corresponding JSON keys
    $groups = [
        'bmi_branches_ncr_metro_manila' => 'NCR/METRO MANILA',
        'bmi_branches_luzon' => 'LUZON',
        'bmi_branches_visayas' => 'VISAYAS',
        'bmi_branches_mindanao' => 'MINDANAO',
    ];

    // Check if the field name matches any group
    if (!array_key_exists($tag['name'], $groups)) {
        return $tag;
    }

    // Load JSON data
    $json_file = get_stylesheet_directory() . '/JSON Data/branch.json';
    $json_data = file_get_contents($json_file);
    $data = json_decode($json_data, true);

    // If no data found, return the original tag
    if (!$data || !isset($data['bmi_branch']['branches'])) {
        return $tag;
    }

    // Get the group key from the field name
    $group_key = $groups[$tag['name']];

    // If the group key exists in the JSON data, populate the options
    if (isset($data['bmi_branch']['branches'][$group_key])) {
        $tag['raw_values'][] = '';
        $tag['labels'][] = 'Select Branch';

        foreach ($data['bmi_branch']['branches'][$group_key] as $branch) {
            $tag['raw_values'][] = $branch['branch']; // Assuming 'branch' is the key for branch name
            $tag['labels'][] = $branch['branch'];
        }

        // Create pipes for the dynamic options
        $pipes = new WPCF7_Pipes($tag['raw_values']);
        $tag['values'] = $pipes->collect_befores();
        $tag['pipes'] = $pipes;
    }

    return $tag;
}
add_filter('wpcf7_form_tag', 'custom_bmi_branch_group_form', 10, 2);



function custom_motortrade_dealers_form($tag)
{
    // Define the mapping of select names to their corresponding JSON keys
    $groups = [
        'dealers_abra' => 'Abra',
        'dealers_agusan_del_norte' => 'Agusan Del Norte',
        'dealers_agusan_del_sur' => 'Agusan Del Sur',
        'dealers_aklan' => 'Aklan',
        'dealers_albay' => 'Albay',
        'dealers_antique' => 'Antique',
        'dealers_aurora' => 'Aurora',
        'dealers_bataan' => 'Bataan',
        'dealers_batangas' => 'Batangas',
        'dealers_benguet' => 'Benguet',
        'dealers_biliran' => 'Biliran',
        'dealers_bohol' => 'Bohol',
        'dealers_bukidnon' => 'Bukidnon',
        'dealers_bulacan' => 'Bulacan',
        'dealers_cagayan' => 'Cagayan',
        'dealers_camarines_norte' => 'Camarines Norte',
        'dealers_camarines_sur' => 'Camarines Sur',
        'dealers_camiguin' => 'Camiguin',
        'dealers_capiz' => 'Capiz',
        'dealers_catanduanes' => 'Catanduanes',
        'dealers_cavite' => 'Cavite',
        'dealers_cebu' => 'Cebu',
        'dealers_compostela_valley' => 'Compostela Valley',
        'dealers_davao_de_oro' => 'Davao De Oro',
        'dealers_davao_del_norte' => 'Davao Del Norte',
        'dealers_davao_del_sur' => 'Davao Del Sur',
        'dealers_davao_oriental' => 'Davao Oriental',
        'dealers_dinagat_island' => 'Dinagat Island',
        'dealers_eastern_samar' => 'Eastern Samar',
        'dealers_ilocos_norte' => 'Ilocos Norte',
        'dealers_ilocos_sur' => 'Ilocos Sur',
        'dealers_iloilo' => 'Iloilo',
        'dealers_isabela' => 'Isabela',
        'dealers_la_union' => 'La Union',
        'dealers_laguna' => 'Laguna',
        'dealers_lanao_del_norte' => 'Lanao Del Norte',
        'dealers_leyte' => 'Leyte',
        'dealers_marinduque' => 'Marinduque',
        'dealers_masbate' => 'Masbate',
        'dealers_metro_manila' => 'Metro Manila',
        'dealers_misamis_occidental' => 'Misamis Occidental',
        'dealers_misamis_oriental' => 'Misamis Oriental',
        'dealers_negros_occidental' => 'Negros Occidental',
        'dealers_negros_oriental' => 'Negros Oriental',
        'dealers_north_cotabato' => 'North Cotabato',
        'dealers_northern_samar' => 'Northern Samar',
        'dealers_nueva_ecija' => 'Nueva Ecija',
        'dealers_nueva_vizcaya' => 'Nueva Vizcaya',
        'dealers_occidental_mindoro' => 'Occidental Mindoro',
        'dealers_oriental_mindoro' => 'Oriental Mindoro',
        'dealers_palawan' => 'Palawan',
        'dealers_pampanga' => 'Pampanga',
        'dealers_pangasinan' => 'Pangasinan',
        'dealers_quezon' => 'Quezon',
        'dealers_quirino' => 'Quirino',
        'dealers_rizal' => 'Rizal',
        'dealers_romblon' => 'Romblon',
        'dealers_samar' => 'Samar',
        'dealers_sarangani_province' => 'Sarangani Province',
        'dealers_sorsogon' => 'Sorsogon',
        'dealers_south_cotabato' => 'South Cotabato',
        'dealers_southern_leyte' => 'Southern Leyte',
        'dealers_sultan_kudarat' => 'Sultan Kudarat',
        'dealers_surigao_del_norte' => 'Surigao Del Norte',
        'dealers_surigao_del_sur' => 'Surigao Del Sur',
        'dealers_tarlac' => 'Tarlac',
        'dealers_western_samar' => 'Western Samar',
        'dealers_zambales' => 'Zambales',
        'dealers_zamboanga_del_norte' => 'Zamboanga Del Norte',
        'dealers_zamboanga_del_sur' => 'Zamboanga Del Sur',
        'dealers_zamboanga_sibugay' => 'Zamboanga Sibugay',
    ];

    // Check if the field name matches any group
    if (!array_key_exists($tag['name'], $groups)) {
        return $tag;
    }

    // Load JSON data
    $json_file = get_stylesheet_directory() . '/JSON Data/dealears.json';
    $json_data = file_get_contents($json_file);
    $data = json_decode($json_data, true);

    // If no data found, return the original tag
    if (!$data || !isset($data['provinces'])) {
        return $tag;
    }

    // Get the group key from the field name
    $group_key = $groups[$tag['name']];

    // Populate the options dynamically
    $tag['raw_values'][] = '';
    $tag['labels'][] = 'Motortrade Dealers(Required)';

    foreach ($data['provinces'] as $province) {
        if ($province['name'] === $group_key) {
            foreach ($province['motortrade_dealers'] as $dealer) {
                $tag['raw_values'][] = $dealer['id'] . ' - ' . $dealer['address'];
                $tag['labels'][] = $dealer['id'] . ' - ' . $dealer['address'];
            }
        }
    }

    // Create pipes for the dynamic options
    $pipes = new WPCF7_Pipes($tag['raw_values']);
    $tag['values'] = $pipes->collect_befores();
    $tag['pipes'] = $pipes;

    return $tag;
}
add_filter('wpcf7_form_tag', 'custom_motortrade_dealers_form', 10, 2);
