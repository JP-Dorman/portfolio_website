$(document).ready(function () {

    /******************************************** Mobile Menu *********************************************************/
    /*** Open Menu ***/
    $("#menu-button").click(function () {
        $("#nav-container").css({display: "flex"});
        $("nav").animate({left: 0}, 200);
        $("#nav-shade").animate({opacity: 1}, 200);
    });


    /*** Close Menu ***/
    $("#nav-shade").click(function () {
        $("nav").animate({left: "-90%"}, 200);
        $("#nav-shade").animate({opacity: 0}, 200, function () {
            $("#nav-container").css({display: "none"});
        });
    });


    /****************************************** Menu Scrolltop ********************************************************/
    $(".nav-item").click(function () {
        var menuId = $(this).attr("id");
        var headerHeight = $("header").outerHeight();
        var section = $("#" + menuId + "-section");
        var offset = (section.position().top) - ($("main").position().top);


        $('#page-container').animate({
            scrollTop: offset
        }, 1000);

        if ($(document).outerWidth() < 1000) {
            $("nav").animate({left: "-90%"}, 200);
            $("#nav-shade").animate({opacity: 0}, 200, function () {
                $("#nav-container").css({display: "none"});
            });
        }
    });

    $("#logo img").click(function () {

        $('#page-container').animate({
            scrollTop: 0
        }, 1000);
    });
});

