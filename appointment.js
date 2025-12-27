const form = document.getElementById('appointmentForm');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    // simple validation
    const required = ['fullname', 'phone', 'date', 'time', 'service'];
    for (const id of required) { const el = document.getElementById(id); if (!el.value) { el.focus(); alert('Please fill: ' + id); return } }
    // Normally here you'd send to your server. For demo, show message and reset.
    document.getElementById('formMessage').style.display = 'block';
    form.reset();
});
