		<article id="media">
			<h3>Media</h3>

			<h4>Banner</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_banner.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_banner.png">
						</a>
					</figure>						
				</div>
				<div class="grid_6">
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
					<pre class="prettyprint">[cherry_banner image="path_to_image" url="/" color="#444444" bg_color="#DDDDDD" template="default.tmpl"]Banner content goes here[/cherry_banner]</pre>
				</div>
			</div>

			<h4>Swiper carousel</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_swiper_carousel.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_swiper_carousel.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
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
					<pre class="prettyprint">[cherry_swiper_carousel posts_per_page="10" post_type="post" taxonomy="category" tax_operator="0" offset="0" order="desc" orderby="date" post_status="publish" ignore_sticky_posts="no" linked_title="yes" linked_image="yes" content_type="part" content_length="55" button_text="read more" template="default.tmpl" crop_image="no" crop_width="540" crop_height="320" slides_per_view="3" slides_per_column="1" space_between_slides="10" swiper_duration_speed="300" swiper_loop="yes" swiper_free_mode="no" swiper_grab_cursor="no" swiper_mouse_wheel="no" swiper_centered_slide="no" swiper_effect="slide" swiper_pagination="yes" swiper_navigation="yes" swiper_navigation_position="inner"]</pre>
				</div>
			</div>

			<h4>Parallax image</strong></h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_parallax_image.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_parallax_image.png">
						</a>
					</figure>						
				</div>
				<div class="grid_6">
					<p>Displays image with parallax effect</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>parallax image:</strong> - parallax image</li>
						<li><i class="fa fa-angle-right"></i> <strong>paralax speed:</strong> - parallax speed</li>
						<li><i class="fa fa-angle-right"></i> <strong>banner url:</strong> - image URL</li>
						<li><i class="fa fa-angle-right"></i> <strong>paralax invert:</strong> - enable/disable parallax inversion</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_paralax_image speed="1.5" invert="no" min_height="300"]Your content goes here[/cherry_paralax_image]</pre>
				</div>
			</div>

			<h4>Paralax html video</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_parallax_html_video.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_parallax_html_video.png">
						</a>
					</figure>						
				</div>
				<div class="grid_6">
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
					<pre class="prettyprint prettyprinted">[cherry_paralax_html_video poster=".../wp-content/uploads/2015/06/Albinus_t08.jpg" mp4=".../wp-content/uploads/2015/06/Albinus_t08.mp4" webm=".../wp-content/uploads/2015/06/Albinus_t08.webm" ogv=".../wp-content/uploads/2015/06/Albinus_t08.ogv" custom_class="parallax-class"]Your content goes here[/cherry_paralax_html_video]</pre>
				</div>
			</div>
		</article>
