document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.content-toggle');

    toggles.forEach(function (toggle) {
        const toggleButton = toggle.querySelector('.content-toggle::after');
        const hiddenContent = toggle.querySelector('.hidden-content');

        toggle.addEventListener('click', function () {
            toggle.classList.toggle('active');
        });
    });
});
