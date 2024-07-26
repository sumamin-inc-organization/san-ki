$(document).ready(function() {
    //topに戻るボタン
    var pagetop = $('.pagetop');
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 });
            return false;
    });
    
    $(function(){
        $('a[href^="#"]').click(function(){
            var adjust = 0;
            var speed = 400;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top + adjust;
            $('html, body').animate({
                scrollTop:position
            }, {
                duration: 0, // スクロールの時間をミリ秒で指定
                easing: 'linear' // 一定速度でスクロールするために'linear'を使用
            });
            return false;
        });
    });

    //hamburger開閉
    $('#hamburgerBtn').on('click',function() {
        $('.header__nav').toggleClass('active');
        $(this).toggleClass('active');
        $('.gray_mask').toggleClass('active');
    });
    $('.header_nav_list a').on('click', function() {
        $('.header__nav').removeClass('active');
        $('#hamburgerBtn').removeClass('active');
        $('.gray_mask').removeClass('active');
    });
    $('.gray_mask').on('click',function() {
        $('.header__nav').removeClass('active');
        $('#hamburgerBtn').removeClass('active');
        $(this).removeClass('active');
    });

    //固定header表示非表示
    var $header = $('.header_fixed');
    var $visual = $('#top');
    var visualHeight = $visual.outerHeight();

    $(window).on('scroll', function() {
        if ($(window).width() >= 768) {
            if ($(window).scrollTop() >= visualHeight) {
                $header.fadeIn(400);
            } else {
                $header.fadeOut(400);
            }
        }
    });

});