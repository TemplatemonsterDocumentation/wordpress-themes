		<article id="media">
			<h3>Media</h3>

			<h4>Banner</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_banner.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_banner image</span><span class="pun">=</span><span class="str">"5"</span><span class="pln"> title</span><span class="pun">=</span><span class="str">"Banner title"</span><span class="pln"> url</span><span class="pun">=</span><span class="str">"http://example.com"</span><span class="pln"> color</span><span class="pun">=</span><span class="str">"#7e2331"</span><span class="pln"> bg_color</span><span class="pun">=</span><span class="str">"#979797"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"image.tmpl"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_banner</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<p>Displays banner</p>
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>banner image:</strong> - banner image</li>
					<li><i class="fa fa-angle-right"></i> <strong>banner title:</strong> - banner title</li>
					<li><i class="fa fa-angle-right"></i> <strong>banner url:</strong> - banner URL</li>
					<li><i class="fa fa-angle-right"></i> <strong>text color:</strong> - banner color</li>
					<li><i class="fa fa-angle-right"></i> <strong>background color:</strong> - banner background color</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Swiper carousel</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_swiper_carousel.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_swiper_carousel posts_per_page</span><span class="pun">=</span><span class="str">"9"</span><span class="pln"> post_type</span><span class="pun">=</span><span class="str">"post,portfolio"</span><span class="pln"> tax_term</span><span class="pun">=</span><span class="str">"1"</span><span class="pln"> tax_operator</span><span class="pun">=</span><span class="str">"2"</span><span class="pln"> author</span><span class="pun">=</span><span class="str">"1,2,3,4,5,6,7,8,9"</span><span class="pln"> offset</span><span class="pun">=</span><span class="str">"15"</span><span class="pln"> order</span><span class="pun">=</span><span class="str">"asc"</span><span class="pln"> orderby</span><span class="pun">=</span><span class="str">"title"</span><span class="pln"> post_parent</span><span class="pun">=</span><span class="str">"22"</span><span class="pln"> post_status</span><span class="pun">=</span><span class="str">"pending"</span><span class="pln"> ignore_sticky_posts</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> linked_title</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> linked_image</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> content_type</span><span class="pun">=</span><span class="str">"full"</span><span class="pln"> content_length</span><span class="pun">=</span><span class="str">"66"</span><span class="pln"> button_text</span><span class="pun">=</span><span class="str">"MORE"</span><span class="pln"> crop_image</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> crop_width</span><span class="pun">=</span><span class="str">"500"</span><span class="pln"> crop_height</span><span class="pun">=</span><span class="str">"340"</span><span class="pln"> slides_per_column</span><span class="pun">=</span><span class="str">"2"</span><span class="pln"> space_between_slides</span><span class="pun">=</span><span class="str">"15"</span><span class="pln"> swiper_duration_speed</span><span class="pun">=</span><span class="str">"400"</span><span class="pln"> swiper_loop</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> swiper_free_mode</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> swiper_centered_slide</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> swiper_effect</span><span class="pun">=</span><span class="str">"fade"</span><span class="pln"> swiper_pagination</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> swiper_navigation</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"default.tmpl"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>

				</div>
				<div class="grid_7">
					<p>Displays carousel with chosen posts</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>posts per page:</strong> - number of posts displayed per page</li>
						<li><i class="fa fa-angle-right"></i> <strong>post types:</strong> - post types (multiple choice)</li>
						<li><i class="fa fa-angle-right"></i> <strong>taxonomy:</strong> - taxonomy</li>
						<li><i class="fa fa-angle-right"></i> <strong>terms:</strong> - terms to show post from</li>
						<li><i class="fa fa-angle-right"></i> <strong>taxonomy term operator:</strong> - taxonomy term has 3 values, they are NOT, NOT IN, AND</li>
						<li><i class="fa fa-angle-right"></i> <strong>authors:</strong> - coma-separated list of authors</li>
						<li><i class="fa fa-angle-right"></i> <strong>offset:</strong> - indent value</li>
						<li><i class="fa fa-angle-right"></i> <strong>order:</strong> - ascending/descending order</li>
						<li><i class="fa fa-angle-right"></i> <strong>order by:</strong> - order by one of parameters</li>
						<li><i class="fa fa-angle-right"></i> <strong>post parent:</strong> - parent container can be set in this field</li>
						<li><i class="fa fa-angle-right"></i> <strong>post status:</strong> - display posts with specific status only</li>
						<li><i class="fa fa-angle-right"></i> <strong>ignore sticky:</strong> - defines whether ignore sticky posts or not</li>
						<li><i class="fa fa-angle-right"></i> <strong>linked title:</strong> - linked title description</li>
						<li><i class="fa fa-angle-right"></i> <strong>linked featured image:</strong> - linked featured image description</li>
						<li><i class="fa fa-angle-right"></i> <strong>post content:</strong> - post content value</li>
						<li><i class="fa fa-angle-right"></i> <strong>Content Length:</strong> - number of words per displayed posts</li>
						<li><i class="fa fa-angle-right"></i> <strong>button text:</strong> - button text</li>
						<li><i class="fa fa-angle-right"></i> <strong>using cropped image:</strong> - used / not use cropped images</li>
						<li><i class="fa fa-angle-right"></i> <strong>cropping image width:</strong> - cropped image width</li>
						<li><i class="fa fa-angle-right"></i> <strong>cropping image height:</strong> - cropped image height</li>
						<li><i class="fa fa-angle-right"></i> <strong>number slides per view:</strong> - number of slides displayed per view</li>
						<li><i class="fa fa-angle-right"></i> <strong>multi Row Slides Layout:</strong> - number of rows</li>
						<li><i class="fa fa-angle-right"></i> <strong>space Between Slides:</strong> - slides indent value</li>
						<li><i class="fa fa-angle-right"></i> <strong>duration of transition:</strong> - slides transition duration value</li>
						<li><i class="fa fa-angle-right"></i> <strong>slider Infinite Loop:</strong> - enable/disable infinite loop</li>
						<li><i class="fa fa-angle-right"></i> <strong>free Mode sliding:</strong> - enable/disable slides fixed position</li>
						<li><i class="fa fa-angle-right"></i> <strong>grab Cusor:</strong> - enable/disable grab cursor for slider</li>
						<li><i class="fa fa-angle-right"></i> <strong>mousewheel Control:</strong> - enable/disable mousewheel control mode</li>
						<li><i class="fa fa-angle-right"></i> <strong>centered Slides:</strong> - enable/disable slides alignment</li>
						<li><i class="fa fa-angle-right"></i> <strong>effect Layout:</strong> - slides transition effect</li>
						<li><i class="fa fa-angle-right"></i> <strong>slider pagination:</strong> - display/hide slider pagination</li>
						<li><i class="fa fa-angle-right"></i> <strong>slider navigation:</strong> - display/hide slider navigation</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
						<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
					</ul>
				</div>
			</div>

			<h4>Parallax image</strong></h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_parallax_image.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_paralax_image bg_imag</span><span class="pun">=</span><span class="str">"http://example/cherry/wp-content/uploads/2015/04/header-about-bg.jpg"</span><span class="pln"> speed</span><span class="pun">=</span><span class="str">"2.5"</span><span class="pln"> invert</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<p>Displays image with parallax effect</p>
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>parallax image:</strong> - parallax image</li>
					<li><i class="fa fa-angle-right"></i> <strong>paralax speed:</strong> - parallax speed</li>
					<li><i class="fa fa-angle-right"></i> <strong>banner url:</strong> - image URL</li>
					<li><i class="fa fa-angle-right"></i> <strong>paralax invert:</strong> - enable/disable parallax inversion</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Paralax html video</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_parallax_html_video.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_paralax_html_video poster</span><span class="pun">=</span><span class="str">"http://192.168.9.26/cherry/wp-content/uploads/2015/05/gator-hater.jpg"</span><span class="pln"> mp4</span><span class="pun">=</span><span class="str">"http://192.168.9.26/cherry/wp-content/uploads/2015/04/video1.m4v"</span><span class="pln"> webm</span><span class="pun">=</span><span class="str">"http://192.168.9.26/cherry/wp-content/uploads/2015/04/video3.flv"</span><span class="pln"> ogv</span><span class="pun">=</span><span class="str">"http://192.168.9.26/cherry/wp-content/uploads/2015/04/video2.ogv"</span><span class="pln"> speed</span><span class="pun">=</span><span class="str">"2.5"</span><span class="pln"> invert</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<p>Displays video with parallax effect</p>
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>poster:</strong> - poster image (use media manager to add image)</li>
					<li><i class="fa fa-angle-right"></i> <strong>mp4 file:</strong> - mp4 file (use media manager to add mp4 file)</li>
					<li><i class="fa fa-angle-right"></i> <strong>webm file:</strong> - webm file (use media manager to add webm file)</li>
					<li><i class="fa fa-angle-right"></i> <strong>ogv file:</strong> - ogv file (use media manager to add ogv file)</li>
					<li><i class="fa fa-angle-right"></i> <strong>paralax speed:</strong> - parallax speed</li>
					<li><i class="fa fa-angle-right"></i> <strong>paralax invert:</strong> - enable/disable parallax inversion</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>
		</article>
