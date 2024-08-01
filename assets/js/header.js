$(document).ready(function() {
    $(window).on('scroll', function () {
        if (window.matchMedia('(min-width:768px)').matches) {
            if ($('#top').height() < $(this).scrollTop()) {
                $('.header').addClass('fixType');
                $('.logo_img02').fadeIn(200);
                $('.logo_img01').fadeOut(200);
            } else {
                $('.header').removeClass('fixType');
                $('.logo_img01').fadeIn(200);
                $('.logo_img02').fadeOut(200);
            }
        }
        if (window.matchMedia('(max-width:767px)').matches) {
            if ($('#top').height() < $(this).scrollTop()) {
                $('.logo_img03').fadeIn(200);
                $('.logo_img01').fadeOut(200);
            } else {
                $('.logo_img01').fadeIn(200);
                $('.logo_img03').fadeOut(200);
            }
        }
    });
});