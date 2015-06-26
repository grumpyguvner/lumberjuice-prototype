$('header .navbar-default').affix({
	offset: {
		top: $('.navbar-inverse').height()
	}
});

$(document).ready(function () {
    var menu = $('.navbar-rollover')
    var timeout = 0;
    var hovering = false;
    menu.hide();

    $('.rollover-toggle')
        .on("mouseenter", function () {
        hovering = true;
        // get rollover content
        var url = "/pages/content/rollover-menus/" + $(this).attr("data-rollover-url") + ".html";
        $.get(url, function(data, status){
            $('.rollover-content').html(data);
        });
        // Position the menu (because the navbar moves!)
        repositionMenu();
        // Open the menu
        $('.navbar-rollover')
            .stop(true, true)
            .slideDown(400);

        if (timeout > 0) {
            clearTimeout(timeout);
        }
    })
        .on("mouseleave", function () {
        resetHover();
    });

    $(".navbar-rollover")
        .on("mouseenter", function () {
        // reset flag
        hovering = true;
        // reset timeout
        startTimeout();
    })
        .on("mouseleave", function () {
        // The timeout is needed incase you go back to the main menu
        resetHover();
    });
    
    $(document).scroll(function(){
        // Only move if hovering
        if (hovering || timeout > 0) {
            repositionMenu();
        }
    });

    function startTimeout() {
        // This method gives you 1 second to get your mouse to the sub-menu
        timeout = setTimeout(function () {
            closeMenu();
        }, 1000);
    };

    function repositionMenu() {
        // Position the menu (because the navbar moves!)
        var pos = $('.navbar-rollover').prev().offset();
        var height = $('.navbar-rollover').prev().outerHeight();
        $('.navbar-rollover').css({
            position: "absolute",
            top: (pos.top + height - 1) + "px",
            left: "0px",
            width: "100%"
        });
    };

    function closeMenu() {
        // Only close if not hovering
        if (!hovering) {
            $('.navbar-rollover').stop(true, true).slideUp(800);
        }
    };

    function resetHover() {
        // Allow the menu to close if the flag isn't set by another event
        hovering = false;
        // Set the timeout
        startTimeout();
    };
});
