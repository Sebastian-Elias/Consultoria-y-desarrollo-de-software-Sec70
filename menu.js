document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.nav-link');
    var currentUrl = window.location.href;

    links.forEach(function(link) {
        if (currentUrl.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
