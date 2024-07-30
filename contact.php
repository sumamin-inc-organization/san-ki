<?php
if($_POST) {
    echo $_POST['name'] . '<br>';
    echo $_POST['tel'] . '<br>';
    echo $_POST['email'] . '<br>';
    echo $_POST['message'];
} else {
    echo "HTMLからのPOST送信受信に失敗しました";
}
?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title></title>
    <meta name="description" content="私たちの会社は、お客様、パートナー企業、そして社会全体に対して、常に最良の価値とサービスを提供することを使命としています。お客様の満足を最優先に考え、常にお客様の期待を超えるサービスを提供することを心掛けています。お客様の声に耳を傾け、柔軟かつ迅速に対応することで、信頼と満足を築いていきます。" />

    <meta property="og:locale" content="ja_JP" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="assets/images/ogp.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="株式会社三喜" />
    <meta property="og:description" content="私たちの会社は、お客様、パートナー企業、そして社会全体に対して、常に最良の価値とサービスを提供することを使命としています。お客様の満足を最優先に考え、常にお客様の期待を超えるサービスを提供することを心掛けています。お客様の声に耳を傾け、柔軟かつ迅速に対応することで、信頼と満足を築いていきます。" />
    <meta property="fb:app_id" content="" />
    <!--favicon start -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon//site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- <link rel="stylesheet" href="https://use.typekit.net/lvk8vax.css"> -->
    <!-- google fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&family=Shippori+Mincho+B1&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- google fonts end -->
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/anime.css" />
</head>
<body>
    <header>
        <div class="header">
            <div class="header_inner" data-anime="initial-fadeIn">
                <a href="#top" class="header_logo">
                    <img class="logo_img01" src="assets/images/logo.svg" alt="株式会社三喜ロゴ">
                    <img  class="logo_img02" src="assets/images/fixed_logo.svg" alt="株式会社三喜ロゴ">
                    <img  class="logo_img03" src="assets/images/menu_logo.svg" alt="株式会社三喜ロゴ">
                </a>
                <div class="header_menu_wrap">
                    <ul class="header_menu">
                        <li class="header_list">
                            <a href="#top">TOP</a>
                        </li>
                        <li class="header_list">
                            <a href="#about">私たちについて</a>
                        </li>
                        <li class="header_list">
                            <a href="#service">事業内容</a>
                        </li>
                        <li class="header_list">
                            <a href="#company">会社概要</a>
                        </li>
                        <li class="header_list header_contact">
                            <a href="#contact">
                                <span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <button id="hamburgerBtn" class="header_hamburger" data-anime="initial-fadeIn">
        <span></span><span></span><span></span>
    </button>
    <nav class="header__nav">
        <a href="#top" class="header_nav_logo">
            <img src="assets/images/menu_logo.svg" alt="株式会社三喜ロゴ">
        </a>
        <div class="header_nav_inner">
            <ul class="header_nav_menu">
                <li class="header_nav_list hover_opacity">
                    <a href="#top">TOP</a>
                </li>
                <li class="header_nav_list hover_opacity">
                    <a href="#about">私たちについて</a>
                </li>
                <li class="header_nav_list hover_opacity">
                    <a href="#service">事業案内</a>
                </li>
                <li class="header_nav_list hover_opacity">
                    <a href="#company">会社概要</a>
                </li>
            </ul>
            <a href="https://www.instagram.com/kabushikisunki/" class="header_memu_icon hover_opacity" target="_blank">
                <img src="assets/images/sns_icon.svg" alt="インスタグラム">
            </a>
            <div class="header_nav_contact_wrap">
                <a href="#contact" class="header_nav_contact">
                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5064 0H1.49365C1.29188 0 1.10733 0.0874827 0.98046 0.218889C0.853585 0.347268 0.772774 0.531098 0.772774 0.732476V13.2675C0.769962 13.4661 0.853585 13.6527 0.983271 13.7841C1.11015 13.9154 1.29473 14 1.49365 14H18.5064C18.7025 14 18.8871 13.9154 19.0168 13.7841C19.1466 13.6527 19.2272 13.4661 19.2272 13.2675V0.732476C19.2272 0.531098 19.1466 0.347268 19.0168 0.218889C18.8899 0.0874827 18.7053 0 18.5064 0ZM18.1402 1.96344V12.8997H1.85705V1.95829L9.07444 8.46656H9.07739C9.33687 8.70011 9.66844 8.82269 9.99724 8.82269C10.1125 8.82269 10.225 8.80219 10.3374 8.77308H10.3721L10.4586 8.7409C10.6258 8.6826 10.7815 8.58914 10.9199 8.46659C12.144 7.36401 15.0989 4.69988 17.0862 2.90845L18.1402 1.96344ZM17.4549 1.10459C15.6821 2.70306 11.677 6.31386 10.199 7.64642C10.1673 7.67276 10.1327 7.69319 10.0982 7.70486C10.0663 7.71653 10.0318 7.72241 9.9972 7.72241C9.92511 7.72241 9.85584 7.69902 9.79528 7.64357L2.53753 1.10028H11.0901L17.4549 1.10459Z" fill="white"/>
                    </svg>
                    <span>お問い合わせフォーム</span>
                </a>
            </div>
        </div> 
    </nav>
    <div class="gray_mask"></div>
    <div id="luxy">
        <main class="main">
            <section id="thanks">
                <h1>お問い合わせありがとうございます</h1>
                <p>お問い合わせいただき、誠にありがとうございます。担当者より折り返しご連絡させていただきますので、今しばらくお待ちください。</p>
                <p>ご不明な点がございましたら、<a href="mailto:support@example.com">support@example.com</a>までお問い合わせください。</p>
                <a href="index.html" class="button">ホームページに戻る</a>
            </section>
        </main>
        <footer class="footer">
            <div class="footer_upper">
                <div class="footer_info_wrap">
                    <a href="#top" class="footer_logo">
                        <img src="assets/images/logo_white.svg" alt="株式会社三喜">
                    </a>
                    <div class="footer_info">
                        <p class="company_name">株式会社三喜</p>
                        <p class="company_adress">〒160-0023<br>東京都新宿区西新宿7-15-1 アパライトビル102</p>
                        <p class="company_tel hover_opacity">TEL. <a href="tel:050-3091-0990">050-3091-0990</a></p>
                    </div>
                </div>
                <div class="footer_menu_wrap">
                    <ul class="footer_menu">
                        <!-- <li class="footer_list">
                            <a href="#top" class="hover_opacity">TOP</a>
                        </li> -->
                        <li class="footer_list">
                            <a href="#about" class="hover_opacity">私たちについて</a>
                        </li>
                        <li class="footer_list">
                            <a href="#service" class="hover_opacity">事業内容</a>
                        </li>
                        <li class="footer_list">
                            <a href="#company" class="hover_opacity">会社概要</a>
                        </li>
                        <li class="footer_list">
                            <a href="#contact" class="hover_opacity">お問い合わせ</a>
                        </li>
                    </ul>
                    <div class="sns_link">
                        <a href="https://www.instagram.com/kabushikisunki/" class="hover_opacity" target="_blank"><p>Follow us</p><img src="assets/images/sns_icon_white.svg" alt="インスタグラム"></a>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="copyright">Copyright ©Sanki ALL RIGHTS RESERVED.</p>
                <a href="#top" class="pagetop">
                    <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect class="content" x="0.5" y="1.43994" width="49" height="49" rx="24.5" fill="white"/>
                        <rect class="line" x="0.5" y="1.43994" width="49" height="49" rx="24.5" stroke="white"/>
                        <path class="arrow" d="M25 33.9399L25 17.9399M25 17.9399L30 23.4257M25 17.9399L20 23.4257" stroke="#4FA149"/>
                    </svg>
                </a>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/anime.js"></script>
    <script src="assets/js/form.js"></script>
</html>