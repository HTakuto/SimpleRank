document.addEventListener('DOMContentLoaded', () => {
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
    const dropdownItems = document.querySelectorAll('.navbar-item-drop');

    if (hamburgerIcon && mobileMenu) {
        // ハンバーガーアイコンクリック時のイベントハンドラ
        hamburgerIcon.addEventListener('click', (event) => {
            event.stopPropagation();
            toggleMobileMenu();
        });

        // ドキュメント全体のクリック時のイベントハンドラ
        window.addEventListener('click', (event) => {
            if (mobileMenu.classList.contains('active') && event.target !== hamburgerIcon) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
            closeDropdownItems(event.target);
        });

        // ドロップダウン項目のクリック時のイベントハンドラ
        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.stopPropagation();
                toggleDropdownItem(item);
            });
        });
    }

    // ドロップダウンメニュー以外をクリックしたときに閉じる
    function closeDropdownItems(target) {
        dropdownItems.forEach(item => {
            const dropdownContent = item.nextElementSibling;
            if (item.classList.contains('active') && target !== item && target !== dropdownContent) {
                toggleDropdownItem(item);
            }
        });
    }

    // モバイルメニューの表示/非表示を切り替える
    function toggleMobileMenu() {
        mobileMenu.classList.toggle('active');
    }

    // ドロップダウン項目の表示/非表示を切り替える
    function toggleDropdownItem(item) {
        const dropdownContent = item.nextElementSibling;
        item.classList.toggle('active');
        dropdownContent.classList.toggle('active');
    }
});
