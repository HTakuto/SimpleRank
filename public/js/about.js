document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.content-toggle');

    function toggleContent(event) {
        const toggle = event.currentTarget;
        const hiddenContent = toggle.querySelector('.hidden-content');
        toggle.classList.toggle('active');
    }

    toggles.forEach(function (toggle) {
        toggle.addEventListener('click', toggleContent);
    });
});
