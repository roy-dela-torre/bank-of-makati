document.addEventListener('wpcf7mailsent', function (event) {
    console.log("📨 Form submitted!");

    // Your allowlist of numeric CF7 IDs
    const allowed_form_ids = [1201, 1188, 1255, 1180, 885, 867, 828];

    // Get the form element that triggered the event
    const form = event.target;

    // --- Option A: Parse the action attribute (e.g., "/#wpcf7-f263-o2")
    let formId = null;
    const actionAttr = form.getAttribute('action');
    if (actionAttr) {
        const match = actionAttr.match(/wpcf7-f(\d+)-o\d+/);
        if (match) {
            formId = parseInt(match[1], 10); // e.g., 263
        }
    }

    // --- Option B: fallback to the hidden _wpcf7 input
    if (!formId) {
        const hidden = form.querySelector('input[name="_wpcf7"]');
        if (hidden) formId = parseInt(hidden.value, 10);
    }

    // Bail if the form is not in the allowlist
    if (!formId || !allowed_form_ids.includes(formId)) {
        console.log("⛔ Form ID not in allowlist:", formId);
        return;
    }

    // Otherwise proceed with download
    fetch('/wp-json/bmi/v1/tracking-info')
        .then(res => res.json())
        .then(data => {
            if (!data.reference_number) {
                console.warn("⚠️ No reference number found.");
                return;
            }

            const ref = data.reference_number;
            const acct = data.account_number || 'N/A';

            const content =
                `Reference Number: ${ref}\n` +
                `Account Number: ${acct}\n\n` +
                `Please save this for your records.`;

            const blob = new Blob([content], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = ref + '.txt'; // nicer filename
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            URL.revokeObjectURL(url);
            console.log("📥 Downloaded reference number:", ref);
        })
        .catch(err => {
            console.error("❌ Error fetching tracking info:", err);
        });
});
