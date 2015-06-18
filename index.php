<?php 
include_once 'config.php';
include_once 'functions.php';


if (!isset($sections)) {
	$sections = getSections();
}

// Get body class
$body_class = 'scheme-0';
foreach ($sections as $key => $section) {
	if ($section == $section_param) {
		$body_class = 'scheme-' . $key%9;
	}
}

?>

<!DOCTYPE html>
<head>
	<title><?php echo $doc_title; ?></title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/prettify.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/prettyPhoto.css">


	<script src="<?php echo $path; ?>/js/jquery.js"></script>
	<script src="<?php echo $path; ?>/js/jquery-migrate-1.2.1.js"></script>

	<!--[if lt IE 9]>
	<html class="lt-ie9">
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="/http://windows.microsoft.com/en-US/internet-explorer/..">
			<img src="<?php echo $path; ?>/img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
		</a>
	</div>
	<script src="/js/html5shiv.js"></script>
	<![endif]-->

	<script src='<?php echo $path; ?>/js/device.min.js'></script>
</head>
<body class="<?php echo $body_class; ?>" data-section="<?php echo $section_param; ?>" onload="prettyPrint()">

<div class="page">
	<!--========================================================
		HEADER
	=========================================================-->
	<header>
		<a href="<?php echo $path; ?>" class="logo"><img src="<?php echo $path; ?>/img/logo.png" alt=""></a>

		<nav class="nav">
			<ul class="menu" data-type="navbar">				
				<?php echo generateNavigation($sections, $lang, $section_param); ?>				
			</ul>
		</nav>

		<div class="stuck">
			<div class="container">
				<div class="title"><h1 class="chapter-title">Cherry Framework Documentation</h1></div>

				<!-- <div class="select_wrap">
					<div class="select">
						<select>
							<option data-href="#">v3-0</option>
							<option data-href="#" selected >v3-1</option>
							<option data-href="#">v2-4</option>
							<option data-href="#">v2-3</option>
						</select>
					</div>
					<div class="select">
						<select>
							<option data-href="#">EN</option>
							<option data-href="#">RU</option>
						</select>
					</div>
				</div> -->

			</div>
		</div>
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
		<div class="navigate">
			<div class="next_wrapper navigated-section-2">
				<div class="container">
					<a href="/section/template-installatiamework-installation.html" class="next">
						<span>Next</span>
						<em>Template installation</em>
					</a>
				</div>
			</div>
		</div>
		<div class="copyright">TemplateMonster © <a href="http://www.templatemonster.com/privacy-policy.php">Privacy Policy</a></div>
	</footer>
</div>


<script src="<?php echo $path; ?>/js/jquery.easing.1.3.js"></script>

<script src="<?php echo $path; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo $path; ?>/js/jquery.rd-navbar.js"></script>
<script src="<?php echo $path; ?>/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo $path; ?>/js/tmstickup.js"></script>
<script src="<?php echo $path; ?>/js/jquery.simplr.smoothscroll.min.js"></script>
<script src="<?php echo $path; ?>/js/prettify.js"></script>
<script src="<?php echo $path; ?>/js/jquery.prettyPhoto.js"></script>

<script>
/* Section Class
========================================================*/
function sectionClass(item_key){
	$.getJSON('<?php echo $path; ?>/sections.json', function(json){
		var body = $('body');
		var section_class = 'scheme-' + item_key%9;
		body.attr('class', '');
		body.addClass(section_class);
	});
}
</script>


<script src="<?php echo $path; ?>/js/script.js"></script>

</body>
</html>