function projectInterface() {
    // declare a public run function with all private stuff initialized inside of it
    this.run = run;
    function run() {
        disableHoverWhenScrolling();
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
