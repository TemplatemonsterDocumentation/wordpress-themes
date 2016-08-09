<?php
include_once 'config.php';
include_once 'functions.php';

if (!isset($sections)) {
    $sections = getSections();
}
?>

<!DOCTYPE html>
<head>
    <title><?php echo $doc_title; ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo $path; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/style.css">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $path; ?>/css/prettify.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/jquery.fancybox.css">

    <script src="<?php echo $path; ?>/js/jquery.js"></script>
    <script src="<?php echo $path; ?>/js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="/http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo $path; ?>/img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

    <script src='<?php echo $path; ?>/js/device.min.js'></script>
</head>
<body data-section="<?php echo $section_param; ?>" onload="prettyPrint()">
<?php
$domain = $_SERVER['HTTP_HOST'];
if(strpos($domain, 'templatemonster.com') !== false): ?>
    <!--Templatemonster GTM -->
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS2BNB');</script>
<!-- End Google Tag Manager -->
<?php elseif(strpos($domain, 'info.template-help.com') !== false): ?>
    <!--TemplateHelp GTM-->
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WJX75J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJX75J');</script>
<!-- End Google Tag Manager -->
<?php else: ?>
    <!-- Domain doesn't match. Google Tag Manager no added -->
<?php endif; ?>
<div class="page-wrap">
    <div class="rd-mobilemenu active">
        <div class="logo">
            <a href="<?php echo $path; ?>/"><img src="<?php echo $path; ?>/img/logo.png" alt=""><span>Monstroid</span><small>premium theme</small></a>
        </div>        
        <div class="panel">
            <!-- <div class="select select-version">
                <select>
                    <option data-href="#">Version v3-0</option>
                    <option data-href="#" selected>Version v3-1</option>
                    <option data-href="#">Version v2-4</option>
                    <option data-href="#">Version v2-3</option>
                </select>
            </div>
            <div class="select select-lang">
                <select>
                    <option data-href="#">EN</option>
                    <option data-href="#">RU</option>
                </select>
            </div> -->
        </div>
        <p class="copyright">TemplateMonster ©
            <a href="http://www.templatemonster.com/privacy-policy.php">Privacy Policy</a>
        </p>
    </div>
    <div class="page-content active">
        <button class="rd-mobilepanel_toggle active"><span></span></button>
        <div class="rd-mobilepanel">            
            <h1 class="rd-mobilepanel_title">
                <span><?php echo $product_name; ?></span> <?php echo $product_desc; ?>
            </h1>
        </div>
        <div class="page">
            <!--========================================================
                HEADER
            =========================================================-->
            <header>
                <nav class="nav">
                    <ul class="menu" data-type="navbar">
                        <?php echo generateNavigation($sections, $lang, $section_param); ?>
                    </ul>
                </nav>
            </header>
            <!--========================================================
                CONTENT
            =========================================================-->
            <main id="main">
                <div class="container">
                    <?php include_once 'section.php'; ?>
                </div>
            </main>

            <!--========================================================
                FOOTER
            =========================================================-->
            <footer>
                <!-- <div class="navigate">
                    <div class="next_wrapper navigated-section-2">
                        <div class="container">
                            <a href="/section/template-installatiamework-installation.html" class="next">
                                <span>Next</span>
                                <em>Template installation</em>
                            </a>
                        </div>
                    </div>
                </div> -->

            </footer>
        </div>
    </div>
</div>


<script src="<?php echo $path; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $path; ?>/js/jquery.rd-navbar.js"></script>
<script src="<?php echo $path; ?>/js/prettify.js"></script>
<script src="<?php echo $path; ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo $path; ?>/js/jquery.ui.totop.js"></script>

<script>
    /* Section Class
     ========================================================*/
    function sectionClass(item_key) {
        $.getJSON('<?php echo $path; ?>/sections.json', function (json) {
            var body = $('body');
            var section_class = 'scheme-' + item_key % 9;
            body.attr('class', '');
            body.addClass(section_class);
        });
    }
</script>


<script src="<?php echo $path; ?>/js/script.js"></script>

</body>
</html>