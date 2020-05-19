$(document).ready(function () {

    var allStars = $(".star-rating").find(".star-one-click");
    var starCaption = $(".star-rating").find(".star-caption");
    var inputValue = $(".star-rating").find("input");
    var captionDefault = $(".star-rating").find(".star-caption").text();
    var captionDefaultClass = "caption-";

    $(document).ajaxComplete(function(){
        allStars = $(".star-rating").find(".star-one-click");
        starCaption = $(".star-rating").find(".star-caption");
        inputValue = $(".star-rating").find("input");
        captionDefault = $(".star-rating").find(".star-caption").text();
        captionDefaultClass = "caption-";
    });

    $(document).on("mouseover", ".star-one-click", function(e) {
        var index = $(this).data("index");

        for(var i = 0; i < allStars.length; i++) {
            var star = $(allStars[i]);
            if(star.data("index") <= index) {
                star.addClass("hover");
                starCaption.text(star.data("caption"));
                starCaption.addClass("caption-" + index);
            }
        }
    }).on("mouseout", ".star-one-click", function(e) {
        var index = $(this).data("index");

        for(var i = 0; i < allStars.length; i++) {
            var star = $(allStars[i]);
            star.removeClass("hover");
        }

        starCaption.removeClass("caption- caption-1 caption-2 caption-3 caption-4 caption-5");
        starCaption.text(captionDefault);
        starCaption.addClass(captionDefaultClass);
    }).on("click", ".star-one-click", function(e) {
        e.preventDefault();

        var index = $(this).data("index");
        for(var i = 0; i < allStars.length; i++) {
            var star = $(allStars[i]);
            if(star.data("index") <= index) {
                star.addClass("active");
                starCaption.text(star.data("caption"));
                starCaption.addClass("caption-" + index);
                captionDefault = star.data("caption");
                captionDefaultClass = "caption-" + index;
                inputValue.val(index);
            } else
                star.removeClass("active");
        }
    });

});
