<?php 

if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
	$path = dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
} else {
	$path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// $path = 111;

// Variables
$doc_title = "Cherry Framework 4 Documentation";

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
	$section_param = $_GET['section'];
}

// Get Sections
$sections = getSections();

function getSections()
{
	$sections_json_file = dirname(__FILE__) . '/sections.json';
	if (file_exists($sections_json_file)) {
		$sections_string = file_get_contents($sections_json_file);
		return json_decode($sections_string, true);
	} else {
		die('Sections.json file not found');
	}
}

function getArticles($current_section)
{	
	return $current_section['articles'];
}

/**
 * Generates navigation markup
 * @param  [array] $sections [Sections data array]
 * @param  [string] $lang    [Current language key]
 * @return [string]          [Navigation markup string]
 */
function generateNavigation($sections, $lang, $section_param)
{		
	$html = '';
	foreach ($sections as $section_dirname) {
		$section_json_file	= dirname(__FILE__) . '/sections/' . $section_dirname . '/section.json';
		// Check if section json file exists
		if (file_exists($section_json_file)):
			$section_string 	= file_get_contents($section_json_file);
			$current_section 	= json_decode($section_string, true);

			if (empty($current_section)) {
				echo "<i>Section $section_dirname JSON empty or formatted wrong</i>";
			}

			$section_id 		= $current_section['id'];
			$section_title 		= $current_section['translations'][$lang];
			$section_path 		= 'index.php?lang=' . $lang . '&section=' . $section_id;

			// Active class
			$active_class = '';			
			if ($section_id == $_GET['section']) {
				$active_class = ' opened';
			}

			// Get Articles List
			$section_articles 	= getArticles($current_section);

			$html .= '<li class="section section__' . $section_id . $active_class . '"><a href="' . $section_path .'">' . $section_title . '</a>';

				// Generate articles navigation
				if (!empty($section_articles)) {
					$html .= '<ul>';
					foreach ($section_articles as $key => $article) {

						$article_id 	= $article['id'];
						$article_name 	= $article['translations'][$lang];

						$article_path	= '#' . $article_id;
						// Update article path if not in article section						
						if ($section_param != $section_id) {
							$article_path = 'index.php?lang=' . $lang . '&section=' . $section_id . '#' . $article_id;
						}
						$html .= '<li class="article article__' . $article_id . '"><a href="' . $article_path . '">' . $article_name . '</a></li>';
					}
					$html .= '</ul>';
				}
			$html .= '</li>';
		else:
			die("Section $section_dirname JSON file not found");
		endif;

	}
	return $html;
}

/**
 * Includes articles files
 * @param  [array] $sections      	[Array with sections data]
 * @param  [string] $lang          	[Current language]
 * @param  [string] $section_param 	[Current section]
 */
function includeSection($sections, $lang, $section_param)
{
	$section_json_file	= dirname(__FILE__) . '/sections/' . $section_param . '/section.json';

	if (file_exists($section_json_file)):
		$section_string 	= file_get_contents($section_json_file);
		$current_section 	= json_decode($section_string, true);		

		$section_id 		= $current_section['id'];
		$section_articles 	= $current_section['articles'];

		// Load section description
		$section_desc = dirname(__FILE__) . '/sections/' . $section_param . '/' . $lang . '/__description.php';
		if (file_exists($section_desc)) {
			include_once $section_desc;
		} else {
			echo "<i>Section __description.php file is missing.</i>";
		}

		foreach ($section_articles as $key => $article) {
			$article_id = $article['id'];
			echo "<section id='" . $section_id . "'>";
				$article_path = dirname(__FILE__) . '/sections/' . $section_param . '/' . $lang . '/' . $article_id . '.php';
				if (file_exists($article_path)) {
					include_once $article_path;
				} else {
					echo "<i>Article $article_id not found.</i>";
				}			
			echo "</section>";
		}
	else:
		die("Section $section_dirname JSON file not found");
	endif;	
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

	<!-- Syntax Highlighter -->
	<link rel="stylesheet" href="<?php echo $path; ?>/css/syntax_highlighter/shCore.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/syntax_highlighter/shCoreDefault.css">


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
<body>
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
				<div class="title"><h1 class="chapter-title">Cherry WordPress Documentation</h1></div>

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
	<main>
		<div class="container">
			<?php includeSection($sections, $lang, $section_param); ?>
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
		<div class="copyright">TemplateMonster © <a href="#">Privacy Policy</a></div>
	</footer>
</div>


<script src="<?php echo $path; ?>/js/jquery.easing.1.3.js"></script>

<script src="<?php echo $path; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo $path; ?>/js/jquery.rd-navbar.js"></script>
<script src="<?php echo $path; ?>/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo $path; ?>/js/tmstickup.js"></script>
<script src="<?php echo $path; ?>/js/jquery.simplr.smoothscroll.min.js"></script>

<!-- Syntax Highlighter -->
<script src="<?php echo $path; ?>/js/syntax_highlighter/shCore.js"></script>
<script src="<?php echo $path; ?>/js/syntax_highlighter/shAutoloader.js"></script>
<script src="<?php echo $path; ?>/js/syntax_highlighter/shLegacy.js"></script>


<script src="<?php echo $path; ?>/js/script.js"></script>

<script>
	/* Syntax Highlighter
	 ========================================================*/
	SyntaxHighlighter.autoloader(
	  'js                       <?php echo $path; ?>/js/syntax_highlighter/brushes/shBrushJScript.js',
	  'css                      <?php echo $path; ?>/js/syntax_highlighter/brushes/shBrushCss.js',
	  'php                      <?php echo $path; ?>/js/syntax_highlighter/brushes/shBrushPhp.js',
	  'sass                     <?php echo $path; ?>/js/syntax_highlighter/brushes/shBrushSass.js',
	  'xml                      <?php echo $path; ?>/js/syntax_highlighter/brushes/shBrushXml.js'
	);
	 
	SyntaxHighlighter.all();
</script>
</body>
</html>