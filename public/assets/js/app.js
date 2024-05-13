

(function () {

    'use strict';

    // MetisMenu js
    function initMetisMenu() {
        // MetisMenu js
        document.addEventListener("DOMContentLoaded", function (event) {
            if (document.getElementById("side-menu"))
                new MetisMenu('#side-menu');
        });
    }

    // initLeftMenuCollapse
    function initLeftMenuCollapse() {
        var currentSIdebarSize = document.body.getAttribute('data-sidebar-size');
        window.onload = function () {
            if (window.innerWidth >= 1024 && window.innerWidth <= 1366) {
                document.body.setAttribute('data-sidebar-size', 'sm');
                updateRadio('sidebar-size-small')
            }
        }
        var verticalButton = document.getElementsByClassName("vertical-menu-btn");
        for (var i = 0; i < verticalButton.length; i++) {
            (function (index) {
                verticalButton[index] && verticalButton[index].addEventListener('click', function (event) {
                    event.preventDefault();
                    document.body.classList.toggle('sidebar-enable');
                    if (window.innerWidth >= 992) {
                        if (currentSIdebarSize == null) {
                            (document.body.getAttribute('data-sidebar-size') == null || document.body.getAttribute('data-sidebar-size') == "lg") ? document.body.setAttribute('data-sidebar-size', 'sm') : document.body.setAttribute('data-sidebar-size', 'lg')
                        } else if (currentSIdebarSize == "md") {
                            (document.body.getAttribute('data-sidebar-size') == "md") ? document.body.setAttribute('data-sidebar-size', 'sm') : document.body.setAttribute('data-sidebar-size', 'md')
                        } else {
                            (document.body.getAttribute('data-sidebar-size') == "sm") ? document.body.setAttribute('data-sidebar-size', 'lg') : document.body.setAttribute('data-sidebar-size', 'sm')
                        }
                    } else {
                        initMenuItemScroll();
                    }
                });
            })(i);
        }
    }

    // menu active
    function initActiveMenu() {
        var menuItems = document.querySelectorAll("#sidebar-menu a");
        menuItems && menuItems.forEach(function (item) {
            var pageUrl = window.location.href.split(/[?#]/)[0];

            if (item.href == pageUrl) {
                item.classList.add("active");
                var parent = item.parentElement;
                if (parent && parent.id !== "side-menu") {
                    parent.classList.add("mm-active");
                    var parent2 = parent.parentElement; // ul .
                    if (parent2 && parent2.id !== "side-menu") {
                        parent2.classList.add("mm-show"); // ul tag
                        var parent3 = parent2.parentElement; // li tag
                        if (parent3 && parent3.id !== "side-menu") {
                            parent3.classList.add("mm-active"); // li
                            var parent4 = parent3.parentElement; // ul
                            if (parent4 && parent4.id !== "side-menu") {
                                parent4.classList.add("mm-show"); // ul
                                var parent5 = parent4.parentElement;
                                if (parent5 && parent5.id !== "side-menu") {
                                    parent5.classList.add("mm-active"); // li
                                }
                            }
                        }
                    }
                }
            }
        });
    }


    // sidebarMenu

    function initMenuItemScroll() {
        setTimeout(function () {
            var sidebarMenu = document.getElementById("side-menu");
            if (sidebarMenu) {
                var activeMenu = sidebarMenu.querySelector(".mm-active .active");
                var offset = activeMenu ? activeMenu.offsetTop : 0;
                if (offset > 300) {
                    var verticalMenu = document.getElementsByClassName("vertical-menu") ? document.getElementsByClassName("vertical-menu")[0] : "";
                    if (verticalMenu && verticalMenu.querySelector(".simplebar-content-wrapper")) {
                        setTimeout(function () {
                            offset == 330 ?
                                (verticalMenu.querySelector(".simplebar-content-wrapper").scrollTop = offset + 85) :
                                (verticalMenu.querySelector(".simplebar-content-wrapper").scrollTop = offset);
                        }, 0);
                    }
                }
            }
        }, 250);
    }

    function initModeSetting() {
        var body = document.body;
        var lightDarkBtn = document.querySelectorAll('.light-dark-mode');
        if (lightDarkBtn) {
            lightDarkBtn.forEach(function (item) {
                item.addEventListener('click', function (event) {
                    if (body.hasAttribute("data-mode") && body.getAttribute("data-mode") == "dark") {
                        body.setAttribute('data-mode', 'light');
                        sessionStorage.setItem("data-layout-mode", "light");
                    } else {
                        body.setAttribute('data-mode', 'dark');
                        sessionStorage.setItem("data-layout-mode", "dark");
                    }
                });
            });
        }

        if (sessionStorage.getItem("data-layout-mode") && sessionStorage.getItem("data-layout-mode") == "light") {
            body.setAttribute('data-mode', 'light');
        } else if (sessionStorage.getItem("data-layout-mode") == "dark") {
            body.setAttribute('data-mode', 'dark');
        }
    }

    function init() {
        initMetisMenu();
        initLeftMenuCollapse();
        initActiveMenu();
        initMenuItemScroll();
        initModeSetting();
    }

    init();

})();


/********* Alert common js *********/

// alert dismissible
if (document.querySelectorAll('.alert-dismissible')) {
    var alertDismiss = document.querySelectorAll('.alert-dismissible');

    Array.from(alertDismiss).forEach(function (item) {
        item.querySelector(".alert-close").addEventListener('click', function () {
            item.classList.add('hidden');
        });
    });
}



/********* dropdown common js *********/
var dropdownElem = document.querySelectorAll('.dropdown');
var dropupElem = document.querySelectorAll('.dropup');
var dropStartElem = document.querySelectorAll('.dropstart');
var dropendElem = document.querySelectorAll('.dropend');
var isShowDropMenu = false;
var isMenuInside = false;
// dropdown event
dropdownEvent(dropdownElem, 'bottom-start');
// dropup event
dropdownEvent(dropupElem, 'top-start');
// dropstart event
dropdownEvent(dropStartElem, 'left-start');
// dropend event
dropdownEvent(dropendElem, 'right-start');

function dropdownEvent(elem, place) {
    Array.from(elem).forEach(function (item) {
        item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
            subitem.addEventListener("click", function (event) {
                subitem.classList.toggle("show");
                var popper = Popper.createPopper(subitem, item.querySelector(".dropdown-menu"), {
                    placement: place
                });

                if (subitem.classList.contains("show") != true) {
                    item.querySelector(".dropdown-menu").classList.remove("block")
                    item.querySelector(".dropdown-menu").classList.add("hidden")
                } else {
                    dismissDropdownMenu()
                    item.querySelector(".dropdown-menu").classList.add("block")
                    item.querySelector(".dropdown-menu").classList.remove("hidden")
                    if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                        subitem.classList.add("show")
                    } else {
                        subitem.classList.remove("show")
                    }
                    event.stopPropagation();
                }

                isMenuInside = false;
            });
        });
    });
}

function dismissDropdownMenu() {
    Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (item) {
        item.classList.remove("block")
        item.classList.add("hidden")
    });
    Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (item) {
        item.classList.remove("show")
    });
    isShowDropMenu = false;
}

// dropdown form
Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (item) {
    if (item.querySelectorAll("form")) {
        Array.from(item.querySelectorAll("form")).forEach(function (subitem) {
            subitem.addEventListener("click", function (event) {
                if (!isShowDropMenu) {
                    isShowDropMenu = true;
                }
            })
        });
    }
});

// data-tw-auto-close
Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (item) {
    var elem = item.parentElement
    if (item.getAttribute('data-tw-auto-close') == 'outside') {
        elem.querySelector(".dropdown-menu").addEventListener("click", function () {
            if (!isShowDropMenu) {
                isShowDropMenu = true;
            }
        });
    } else if (item.getAttribute('data-tw-auto-close') == 'inside') {
        item.addEventListener("click", function () {
            isShowDropMenu = true;
            isMenuInside = true;
        });
        elem.querySelector(".dropdown-menu").addEventListener("click", function () {
            isShowDropMenu = false;
            isMenuInside = false;
        });
    }
});

window.addEventListener('click', function (e) {
    if (!isShowDropMenu && !isMenuInside) {
        dismissDropdownMenu();
    }
    isShowDropMenu = false;
});



// Handler that uses various data-* attributes to trigger
// specific actions, mimicing bootstraps attributes
const triggers = Array.from(document.querySelectorAll('[data-toggle="collapse"]'));

window.addEventListener('click', (ev) => {
    const elm = ev.target;
    if (triggers.includes(elm)) {
        const selector = elm.getAttribute('data-target');
        collapse(selector, 'toggle');
    }
}, false);


const fnmap = {
    'toggle': 'toggle',
    'show': 'add',
    'hide': 'remove'
};
const collapse = (selector, cmd) => {
    const targets = Array.from(document.querySelectorAll(selector));
    targets.forEach(target => {
        target.classList[fnmap[cmd]]('show');
    });
}


/********* modal common js *********/
// openModal
var modalTrigger = document.querySelectorAll('[data-tw-toggle="modal"]');
var isModalShow = false;
Array.from(modalTrigger).forEach(function (item) {
    item.addEventListener("click", function () {
        var target = this.getAttribute('data-tw-target').substr(1);
        var modalWindow = document.getElementById(target);

        if (modalWindow.classList.contains("hidden")) {
            modalWindow.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        } else {
            modalWindow.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
        isModalShow = false;

        if (item.getAttribute('data-tw-backdrop') == 'static') {
            isModalShow = true;
        }
    });
});

// closeButton
var closeButton = document.querySelectorAll('[data-tw-dismiss="modal"]');
Array.from(closeButton).forEach(function (subElem) {
    subElem.addEventListener("click", function () {

        var modalWindow = subElem.closest(".modal");
        if (modalWindow.classList.contains("hidden")) {
            modalWindow.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        } else {
            modalWindow.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    });
});

// closeModal
var modalElem = document.querySelectorAll('.modal');
Array.from(modalElem).forEach(function (elem) {

    // modalOverlay
    var modalOverlay = elem.querySelectorAll('.modal-overlay');
    Array.from(modalOverlay).forEach(function (subItem) {
        subItem.addEventListener("click", function () {
            if (!isModalShow) {
                if (elem.classList.contains("hidden")) {
                    elem.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                } else {
                    elem.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            }
        });
    });

    // Escape
    document.addEventListener("keydown", function (event) {
        var key = event.key;
        if (!isModalShow) {
            if (key == "Escape") {
                elem.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    });
});

feather.replace()




// ltr-rtl
var isChangeMode = document.getElementById("ltr-rtl");
if (isChangeMode) {
    isChangeMode.addEventListener("click", function (e) {
        var themeMode = document.documentElement.getAttribute("dir");
        if (themeMode == "ltr") {
            document.documentElement.setAttribute("dir", "rtl");
        } else {
            document.documentElement.setAttribute("dir", "ltr");
        }

        swiperDir();
    });
}
