document.addEventListener('DOMContentLoaded', () => {
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
    const dropdownItems = document.querySelectorAll('.navbar-item-drop');

    if (hamburgerIcon && mobileMenu) {
        hamburgerIcon.addEventListener('click', (event) => {
            event.stopPropagation();
            mobileMenu.classList.toggle('active');
        });

        window.addEventListener('click', (event) => {
            if (mobileMenu.classList.contains('active') && event.target !== hamburgerIcon) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.stopPropagation();
                item.classList.toggle('active');
                const dropdownContent = item.nextElementSibling;
                dropdownContent.classList.toggle('active');

                const mobileDropdownContent = item.querySelector('.dropdown-content');
                if (mobileDropdownContent) {
                    mobileDropdownContent.classList.toggle('active');
                }
            });
        });

        // モバイルメニュー以外をクリックしたときに閉じる
        window.addEventListener('click', (event) => {
            if (mobileMenu.classList.contains('active') && event.target !== hamburgerIcon) {
                mobileMenu.classList.remove('active');
            }
        });
    }
});
