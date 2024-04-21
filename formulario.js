const phoneInput = document.getElementById('phone');

phoneInput.addEventListener('input', function(event) {
    // Reemplaza todos los caracteres no numéricos
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
});
