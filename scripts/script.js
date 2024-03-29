

jQuery(document).ready(function( $ ) {


    // Namaskara text
    $("#page_home_namaskara").fitText(0.9);
    $("#event_data").fitText(2);

    $(".fitted-title").fitText(1.2, {maxFontSize: '60px'});




    // Sidebar menu in mobile mode


    var sidebarHidden = true;

    $("#header_small #menu_button_container").click(function() {

        if (sidebarHidden) {
            $("#sidebar").animate({
                left: '-0px'
            }, 400);
            sidebarHidden = false;
        } else {
            $("#sidebar").animate({
                left: '-235px'
            }, 400);
            sidebarHidden = true;
        }

    });



    var searchSliderHidden = true;
    $("#search_button_small").click(function() {
        if (searchSliderHidden) {
            $("#search_slider_mobile").removeClass("d-none");
            $("#search_slider_mobile").animate({
                right: '0px'
            }, 400);
            searchSliderHidden = false;
        }
    });


    $("#search_slider_mobile #close_button").click(function() {
        $("#search_slider_mobile").animate({
            right: '-90%'
        }, 400, function() {
            $("#search_slider_mobile").addClass("d-none");
        });
        searchSliderHidden = true;
    });



    // Venue container large

    $("#venue_container").css('right', -($("#page_master_container").width() + 250));

    $("#venue_container #close_button").click(function() {
        $("#venue_container").animate({
            right: -($("#page_master_container").width() + 250)
        }, 500, function() {
            $("#venue_container").removeClass("d-md-flex");
        });
    });


    $("#when_where_container").click(function() {
        $("#venue_container").addClass("d-md-flex");
        $("#venue_container").animate({
            right: '0px'
        }, 500);
    });



    // Venue container small
    $("#venue_container_small").css('bottom', '-80%');

    $("#venue_container_small #close_button").click(function() {
        $("#venue_container_small").animate({
            bottom: '-80%'
        }, 500, function() {
            $("#venue_container_small").removeClass("d-flex");
            $("#venue_container_small").addClass("d-none");
        });
    });


    $("#when_where_container_small").click(function() {
        $("#venue_container_small").removeClass("d-none");
        $("#venue_container_small").addClass("d-flex");

        $("#venue_container_small").animate({
            bottom: '0px'
        }, 500);
    });







    // background gradients




    function getGradientForPage() {

        switch (bcb_page_name) {
            case 'home':
            case 'when-where':
                return 'linear-gradient(to right, #F2994A, #F2C94C)';

            case 'about':
            case 'faq':
                return 'linear-gradient(to right, #56ab2f, #a8e063)';

            case 'techlash':
                return 'linear-gradient(to right, #B79891, #94716B)';

            case 'search':
                return 'linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b)'

            default :
                return 'linear-gradient(to right, #36D1DC, #5B86E5)';
        }

    }

    $("#footer_container").css('background', getGradientForPage());

});
