$(document).ready(function () {
    var currentSlide = 0;
    var totalSlides = $("#companySlider").children().length;

    $("#leftArrow").click(function () {
        if (currentSlide > 0) {
            currentSlide--;
            $("#companySlider").animate(
                {
                    marginLeft: -(
                        $(".col-md-3").outerWidth(true) * currentSlide
                    ),
                },
                300
            );
        }
    });

    $("#rightArrow").click(function () {
        if (currentSlide < totalSlides - 4) {
            currentSlide++;
            $("#companySlider").animate(
                {
                    marginLeft: -(
                        $(".col-md-3").outerWidth(true) * currentSlide
                    ),
                },
                300
            );
        }
    });
});
