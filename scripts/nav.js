/**
 * Mobile menu for the revamped header (header-bcb.php).
 * Below 900px the links collapse behind a menu button. Without JS the links simply stay visible.
 * Closes on Escape (focus returns to the button), on a click or focus outside the nav,
 * after picking a link, and when the viewport grows back to desktop width.
 */
(function () {
    var nav = document.getElementById('bcb-nav');
    if (!nav) { return; }

    var toggle = nav.querySelector('.bcb-nav__toggle');
    var menu = document.getElementById('bcb-nav-menu');
    if (!toggle || !menu) { return; }

    var desktop = window.matchMedia('(min-width: 901px)');

    function setOpen(open) {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }

    function isOpen() {
        return nav.classList.contains('is-open');
    }

    nav.classList.add('bcb-nav--js');
    setOpen(false);

    toggle.addEventListener('click', function () {
        setOpen(!isOpen());
    });

    nav.addEventListener('keydown', function (e) {
        if ((e.key === 'Escape' || e.key === 'Esc') && isOpen()) {
            setOpen(false);
            toggle.focus();
        }
    });

    menu.addEventListener('click', function (e) {
        if (e.target.closest && e.target.closest('a')) { setOpen(false); }
    });

    document.addEventListener('click', function (e) {
        if (isOpen() && !nav.contains(e.target)) { setOpen(false); }
    });

    nav.addEventListener('focusout', function (e) {
        if (isOpen() && e.relatedTarget && !nav.contains(e.relatedTarget)) { setOpen(false); }
    });

    function onViewportChange() {
        if (desktop.matches) { setOpen(false); }
    }
    if (desktop.addEventListener) {
        desktop.addEventListener('change', onViewportChange);
    } else {
        desktop.addListener(onViewportChange); // older Safari
    }
})();
