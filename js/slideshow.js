$(document).ready(function () {

    /***************************************** Adjust Video Size ******************************************************/
    var video = $(".slide video");

    video.each(function () {
        var container = $(this).closest("#slideshow-container");
        var maxHeight = container.attr("data-max-height");


            $(this).css({width: "auto", height: "100%"});
            container.css('max-height', maxHeight +'px');

    });

    /******************************************* Change Slides ********************************************************/
    $(".arrow-container").click(function () {
        var currentSlideNumber = $("#slideshow-container").attr("data-slide-number");
        var maxSlides = $(".slide").length;
        var currentSlide = $("#slide-" + currentSlideNumber);


        /********************* Decide Direction **********************/
        /*** Left ***/
        if ($(this).is("#arrow-container-left") && currentSlideNumber > 1) {
            var nextSlideNumber = ((currentSlideNumber * 1) - 1);
            var nextSlide = $("#slide-" + nextSlideNumber);
            var currentLeft = "100%";
            var newLeft = "0%";

            changeSlide(currentSlide, nextSlide, currentLeft, newLeft);
            $("#slideshow-container").attr("data-slide-number", currentSlideNumber - 1);


            // Show / hide if at last / first slide
            $("#arrow-container-right").css({display: "flex"});
            if (nextSlideNumber === 1) {
                $("#arrow-container-left").css({display: "none"});
            }
        }

        /*** Right ***/
        else if ($(this).is("#arrow-container-right") && currentSlideNumber < maxSlides) {
            var nextSlide = $("#slide-" + ((currentSlideNumber * 1) + 1));
            var currentLeft = "-100%";
            var newLeft = "0%";

            changeSlide(currentSlide, nextSlide, currentLeft, newLeft);
            $("#slideshow-container").attr("data-slide-number", (currentSlideNumber * 1) + 1);


            // Show / hide if at last / first slide
            $("#arrow-container-left").css({display: "flex"});
            if ((currentSlideNumber * 1) === (maxSlides - 1)) {
                $("#arrow-container-right").css({display: "none"});
            }
        }


        /********************* Animate to next Slide  **********************/
        function changeSlide(currentSlide, nextSlide, currentLeft, newLeft) {
            currentSlide.animate({left: currentLeft}, 500);
            nextSlide.animate({left: newLeft}, 500);

            // Hide pause button
            $("#hero-pause").animate({opacity: 0}, 200, function() {
                $("#hero-pause").css({display: "none"});
            });

            // When slide is finished pause old video and play new video
            setTimeout(function () {
                var currentVideo = currentSlide.find("video");
                var nextVideo = nextSlide.find("video");

                currentVideo.get(0).pause();
                nextVideo.get(0).play();
                currentVideo.data("pause", "false");
                nextVideo.data("pause", "false");
            }, 500);
        }
    });

    $(".slide video").click(function() {

        if ($(this).data("pause") === "false") {
            $(this)[0].pause();
            $(this).data("pause", "true");
            $("#hero-pause").css({display: "flex", opacity: 0});
            $("#hero-pause").animate({opacity: 1}, 200);
        } else {
            $(this)[0].play();
            $(this).data("pause", "false");
            $("#hero-pause").animate({opacity: 0}, 200, function() {
                $("#hero-pause").css({display: "none"});
            });
        }
    });
});