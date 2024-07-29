$(document).ready(function() {
    //アニメーション設定データ
    const animeData = [
        {animeType: "fadeIn-up", initialCss: "opacity", initialValue: "0"},
        // {animeType: "initial-popup", initialCss: "opacity", initialValue: "0"},
        // {animeType: "initial-slideVisible", initialCss: "overflow", initialValue: "hidden"},
    ]

    //初期アニメーション
    const initialData = [
        {animeType: "initial-fadeIn", initialCss: "opacity", initialValue: "0"},
        {animeType: "initial-fadeIn-up", initialCss: "opacity", initialValue: "0"},
    ]

    initialAnime(initialData);

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
            var animeType = value.animeType;
            $('[data-anime="'+ animeType + '"]').each(function() {
                if (isInViewport(this)) {
                    $(this).addClass(animeType);
                    // $(this).removeAttr('style');
                    // $(this).removeClass('initial-anime');
                }
            });
        });
    }

    //ページに最初に来たときに発火させるアニメーション
    function initialAnime(data) {
        $.each(data, function(index, value) {
            var animeType = value.animeType;
            $('[data-anime="'+ animeType + '"]').each(function() {
                $(this).addClass(animeType);
            });
        });
    }

    $.each(animeData, function(index, value) {
        var animeType = value.animeType;
        var initialCss = value.initialCss;
        var initialValue = value.initialValue;
        $('[data-anime="'+ animeType + '"]').each(function() {
            if(initialCss !== undefined) {
                $(this).css(initialCss, initialValue);
            }
        });
    });
});