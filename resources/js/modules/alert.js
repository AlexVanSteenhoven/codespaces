const alerts = document.querySelectorAll('[data-component="alert"]');

alerts.forEach((alert) => {
    setTimeout(() => {
        alert.remove();
    }, 5000);
});
