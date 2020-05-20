$(document).ready(function() {

    let allStars = $(".star-rating").find(".star-active").toArray();
    let starCaption = $(".star-rating").find(".star-caption");
    let inputValue = $(".star-rating").find("input");
    let captionDefault = $(".star-rating").find(".star-caption").text();
    let captionDefaultClass = "caption-";

    $(document).ajaxComplete(() => {
        allStars = $(".star-rating").find(".star-active");
        starCaption = $(".star-rating").find(".star-caption");
        inputValue = $(".star-rating").find("input");
        captionDefault = $(".star-rating").find(".star-caption").text();
        captionDefaultClass = "caption-";
    });

    $(document).on("mouseover", ".star-active", function(e) {
        const index = $(this).data("index");

        starCaption.removeClass("caption- caption-1 caption-2 caption-3 caption-4 caption-5");
        starCaption.addClass("caption-" + index);

        allStars.forEach((star) => {
            const starElement = $(star);

            if(starElement.data('index') <= index) {
                starElement.addClass("hover");
                starCaption.text(starElement.data("caption"));
            }
        });
    }).on("mouseout", ".star-active", function(e) {
        const index = $(this).data("index");

        allStars.forEach(star => {
            const starElement = $(star);
            starElement.removeClass("hover");
        });

        starCaption.removeClass("caption- caption-1 caption-2 caption-3 caption-4 caption-5");
        starCaption.text(captionDefault);
        starCaption.addClass(captionDefaultClass);
    }).on("click", ".star-active", function(e) {
        e.preventDefault();

        const index = $(this).data("index");

        allStars.forEach(star => {
            const starElement = $(star);
            if(starElement.data("index") <= index) {
                starElement.addClass("active");
                starCaption.text(starElement.data("caption"));
                starCaption.addClass("caption-" + index);

                captionDefault = starElement.data("caption");
                captionDefaultClass = "caption-" + index;
                inputValue.val(index);
            } else
                starElement.removeClass("active");
        });
    });

});
