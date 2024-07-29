$(document).ready(function() {
    //アニメーション設定データ
    const animeData = [
        {animeType: "fadeIn-up", initialCss: "opacity", initialValue: "0"},
        // {animeType: "initial-popup", initialCss: "opacity", initialValue: "0"},
        // {animeType: "initial-slideVisible", initialCss: "overflow", initialValue: "hidden"},
    ]

    // Check elements on page load
    $(window).on('load scroll', function() {
        triggerAnime(animeData);
    });

    //スクロール表示タイミング
    function isInViewport(element) {
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();


        var windowSize = $(window).width();
        if (windowSize < 768) {
            elementTop += 100;
            viewportTop += 100;
        } else {
            elementTop += 300;
            viewportTop += 300;
        }
        return elementBottom > viewportTop && elementTop < viewportBottom;
    }
    //スクロールアニメーションのトリガー設定
    function triggerAnime(data) {
        // 作成した連想配列をループで回す
        $.each(data, function(index, value) {
            console.log('not');
            var animeType = value.animeType;
            console.log(animeType);
            $('[data-anime="'+ animeType + '"]').each(function() {
                console.log('not');
                if (isInViewport(this)) {
                    $(this).addClass(animeType);
                    // $(this).removeAttr('style');
                    // $(this).removeClass('initial-anime');
                } else {
                    console.log('not');
                }
            });
        });
    }
});