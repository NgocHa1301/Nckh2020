var slideTime = 900;

var floatAtBottom = false;

function floating_init() {

    xMoveTo('floating_banner_right', 887 - (1024 - screen.width), 0);

    winOnResize(); // set initial position

    xAddEventListener(window, 'resize', winOnResize, false);

    xAddEventListener(window, 'scroll', winOnScroll, false);

}

function winOnResize() {

    checkScreenWidth();

    winOnScroll(); // initial slide

}

function winOnScroll() {

    var y = xScrollTop()+11;

    if (floatAtBottom) {

        y += xClientHeight() - xHeight('floating_banner_left');

    }

    xSlideTo('floating_banner_left', (screen.width - (800 - 778) - 840) / 2 - 220, y + 10, slideTime);//(screen.width - (800 - 778) - 820) / 2 - 220
    xSlideTo('floating_banner_right', (screen.width - (800 - 778) + 1042) / 2, y + 10, slideTime);// (screen.width - (800 - 778) + 1022) / 2

}

function checkScreenWidth() {

    if (screen.width <= 1024) {

        document.getElementById('floating_banner_left').style.display = 'none';

        document.getElementById('floating_banner_right').style.display = 'none';

    }

}