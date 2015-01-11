function projectInterface() {
    // declare a public run function with all private stuff initialized inside of it
    this.run = run;
    function run() {
        disableHoverWhenScrolling();
        initMobileMenu();
    }

    function initMobileMenu() {
        // declarations
        $body = $('body');
        $window = $(window);
        $menu = $('#appMenu');
        $menuOpener = $('#appMenuOpener');
        $menuCloser = $('#appMenuCloser');
        activeClass = 'opened';
        bodyActiveClass = 'scroll-disabled';

        // toggling menu
        $menuOpener.bind('click', function () {
            $menu.addClass(activeClass);
            $body.addClass(bodyActiveClass);
        });
        $menuCloser.bind('click', function () {
            $menu.removeClass(activeClass);
            $body.removeClass(bodyActiveClass);
        });

        // reset menu
        $window.bind('resize', function () {
            $menu.removeClass(activeClass);
            $body.removeClass(bodyActiveClass);
        });
    }

    function disableHoverWhenScrolling() {
        $(window).on('scrollstart', function () {
            $('#app').css('pointer-events', 'none');
        }).on('scrollstop', function () {
            $('#app').prop('style').removeProperty('pointer-events');
        });
    }
}

// create a public object and start its run function
var knowYourDinosaurs = new projectInterface();
// run functions
knowYourDinosaurs.run();
