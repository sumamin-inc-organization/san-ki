$(document).ready(function() {
    $(window).on('scroll', function () {
        if ($('#top').height() < $(this).scrollTop()) {
            $('.header').addClass('fixType');
            $('.logo_img02').fadeIn(200);
            $('.logo_img01').fadeOut(200);
        } else {
            $('.header').removeClass('fixType');
            $('.logo_img01').fadeIn(200);
            $('.logo_img02').fadeOut(200);
        }
    });

    $(window).on('load resize', function () {
        if (window.matchMedia('(min-width:768px)').matches) {
            $('.logo_img02').attr("src", "assets/images/fixed_logo.svg");
        } else {
            $('.logo_img02').attr("src", "assets/images/menu_logo.svg");
        }
    });
});