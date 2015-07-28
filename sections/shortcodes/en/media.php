<h3>Media</h3>

<h4>Banner</h4>

<p>Displays banner</p>

<ul class="marked-list">
    <li><strong>banner image:</strong> – banner image</li>
    <li><strong>banner title:</strong> – banner title</li>
    <li><strong>banner url:</strong> – banner URL</li>
    <li><strong>text color:</strong> – banner color</li>
    <li><strong>background color:</strong> – banner background color</li>
    <li><strong>template:</strong> – shortcode template</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_banner image="path_to_image" url="/" color="#444444" bg_color="#DDDDDD" template="default.tmpl"]Banner content goes here[/cherry_banner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_banner.png">
</figure>


<h4>Swiper carousel</h4>

<p>Displays carousel with chosen posts</p>

<ul class="marked-list">
    <li><strong>posts per page:</strong> – number of posts displayed per page</li>
    <li><strong>post types:</strong> – post types (multiple choice)</li>
    <li><strong>taxonomy:</strong> – taxonomy</li>
    <li><strong>terms:</strong> – terms to show post from</li>
    <li><strong>taxonomy term operator:</strong> – taxonomy term has 3 values, they are NOT, NOT IN, AND</li>
    <li><strong>authors:</strong> – coma-separated list of authors</li>
    <li><strong>offset:</strong> – indent value</li>
    <li><strong>order:</strong> – ascending/descending order</li>
    <li><strong>order by:</strong> – order by one of parameters</li>
    <li><strong>post parent:</strong> – parent container can be set in this field</li>
    <li><strong>post status:</strong> – display posts with specific status only</li>
    <li><strong>ignore sticky:</strong> – defines whether ignore sticky posts or not</li>
    <li><strong>linked title:</strong> – linked title description</li>
    <li><strong>linked featured image:</strong> – linked featured image description</li>
    <li><strong>post content:</strong> – post content value</li>
    <li><strong>Content Length:</strong> – number of words per displayed posts</li>
    <li><strong>button text:</strong> – button text</li>
    <li><strong>using cropped image:</strong> – to use/not to use cropped images</li>
    <li><strong>cropping image width:</strong> – cropped image width</li>
    <li><strong>cropping image height:</strong> – cropped image height</li>
    <li><strong>number slides per view:</strong> – number of slides displayed per view</li>
    <li><strong>multi Row Slides Layout:</strong> – number of rows</li>
    <li><strong>space Between Slides:</strong> – slides indent value</li>
    <li><strong>duration of transition:</strong> – slides transition duration value</li>
    <li><strong>slider Infinite Loop:</strong> – enable/disable infinite loop</li>
    <li><strong>free Mode sliding:</strong> – enable/disable slides fixed position</li>
    <li><strong>grab Cursor:</strong> – enable/disable grab cursor for slider</li>
    <li><strong>mousewheel Control:</strong> – enable/disable mousewheel control mode</li>
    <li><strong>centered Slides:</strong> – enable/disable slides alignment</li>
    <li><strong>effect Layout:</strong> – slides transition effect</li>
    <li><strong>slider pagination:</strong> – display/hide slider pagination</li>
    <li><strong>slider navigation:</strong> – display/hide slider navigation</li>
    <li><strong>class:</strong> – shortcode custom class</li>
    <li><strong>template:</strong> – shortcode template</li>
</ul>

<pre class="prettyprint">[cherry_swiper_carousel posts_per_page="10" post_type="post" taxonomy="category" tax_operator="0" offset="0" order="desc" orderby="date" post_status="publish" ignore_sticky_posts="no" linked_title="yes" linked_image="yes" content_type="part" content_length="55" button_text="read more" template="default.tmpl" crop_image="no" crop_width="540" crop_height="320" slides_per_view="3" slides_per_column="1" space_between_slides="10" swiper_duration_speed="300" swiper_loop="yes" swiper_free_mode="no" swiper_grab_cursor="no" swiper_mouse_wheel="no" swiper_centered_slide="no" swiper_effect="slide" swiper_pagination="yes" swiper_navigation="yes" swiper_navigation_position="inner"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_swiper_carousel.png">
</figure>


<h4>Parallax image</strong></h4>

<p>Displays image with parallax effect</p>

<ul class="marked-list">
    <li><strong>parallax image:</strong> – parallax image</li>
    <li><strong>parallax speed:</strong> – parallax speed</li>
    <li><strong>banner url:</strong> – image URL</li>
    <li><strong>parallax invert:</strong> – enable/disable parallax inversion</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_paralax_image speed="1.5" invert="no" min_height="300"]Your content goes here[/cherry_paralax_image]</pre>


<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_parallax_image.png">
</figure>

<h4>Parallax html video</h4>

<p>Displays video with parallax effect</p>

<ul class="marked-list">
    <li><strong>poster:</strong> – poster image (use media manager to add image)</li>
    <li><strong>mp4 file:</strong> – mp4 file (use media manager to add mp4 file)</li>
    <li><strong>webm file:</strong> – webm file (use media manager to add webm file)</li>
    <li><strong>ogv file:</strong> – ogv file (use media manager to add ogv file)</li>
    <li><strong>parallax speed:</strong> – parallax speed</li>
    <li><strong>parallax invert:</strong> – enable/disable parallax inversion</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint prettyprinted">[cherry_paralax_html_video poster=".../wp-content/uploads/2015/06/Albinus_t08.jpg" mp4=".../wp-content/uploads/2015/06/Albinus_t08.mp4" webm=".../wp-content/uploads/2015/06/Albinus_t08.webm" ogv=".../wp-content/uploads/2015/06/Albinus_t08.ogv" custom_class="parallax-class"]Your content goes here[/cherry_paralax_html_video]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_parallax_html_video.png">
</figure>