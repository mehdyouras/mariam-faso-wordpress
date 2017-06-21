const openNav = function(oEvent) {
    oEvent.preventDefault();
    let $nav = document.querySelector(".site-nav");
    $nav.style.transform = "translatex(0)";
    document.addEventListener("click", function(oEvent) {
        if(oEvent.pageX > 250) {
            closeNav(oEvent);
        }
    });
    document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            closeNav(evt);
        }
    };
}
const closeNav = function(oEvent) {
    oEvent.preventDefault();
    document.querySelector(".site-nav").style.transform = "translatex(-250px)";
}

const keepFocusDropdownMenu = function(oEvent) {
        oEvent.currentTarget.parentNode.parentNode.parentNode.classList.add("accessible-access");
}
const removeFocusDropdownMenu = function(oEvent) {
        oEvent.currentTarget.parentNode.parentNode.parentNode.classList.remove("accessible-access");
}

const navbarScroll = function() {
    let $html = document.querySelector('html'),
        $body = document.body,
        $navbar = document.querySelector(".site-header");
    if(window.pageYOffset >= 28 ) {
        $navbar.classList.add("site-header_fixed");
    }
    if(window.pageYOffset < 28) {
        $navbar.classList.remove("site-header_fixed");
    }
}

const fPageIsLoaded = function() {
    document.querySelector(".hamburger-menu").addEventListener("click", openNav);
    document.querySelector(".site-nav__close-btn").addEventListener("click", closeNav);
    Array.from(document.querySelectorAll(".site-nav__dropdown-link")).forEach(function($link) {
        $link.addEventListener("focus", keepFocusDropdownMenu);
        $link.addEventListener("blur", removeFocusDropdownMenu);
    });
    window.addEventListener("scroll", navbarScroll);
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'disableScrolling' : true,
        'showImageNumberLabel': true,
        'albumLabel': 'Image %1 sur %2',
    })
}

window.addEventListener("load", fPageIsLoaded);