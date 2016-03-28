<h3>Media</h3>

<h4>Banners</h4>

<p>Displays banner</p>

<ul class="marked-list">
    <li><strong>Banner image:</strong> – banner image</li>
    <li><strong>Banner title:</strong> – banner title</li>
    <li><strong>Banner url:</strong> – banner URL</li>
    <li><strong>Text color:</strong> – banner color</li>
    <li><strong>Background color:</strong> – banner background color</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
    <li><strong>Class:</strong> – extra CSS class</li>
</ul>

<pre class="prettyprint">[cherry_banner image="path_to_image" url="/" color="#444444" bg_color="#DDDDDD" template="default.tmpl"]Banner content goes here[/cherry_banner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_banner.png">
</figure>


<h4>Swiper carousel</h4>

<p>Displays carousel with chosen posts</p>

<ul class="marked-list">
    <li><strong>Posts per page:</strong> – number of posts displayed per page</li>
    <li><strong>Post types:</strong> – post types (multiple choice)</li>
    <li><strong>Taxonomy:</strong> – taxonomy</li>
    <li><strong>Terms:</strong> – terms to show post from</li>
    <li><strong>Taxonomy term operator:</strong> – taxonomy term has 3 values, they are NOT, NOT IN, AND</li>
    <li><strong>Authors:</strong> – coma-separated list of authors</li>
    <li><strong>Offset:</strong> – indent value</li>
    <li><strong>Order:</strong> – ascending/descending order</li>
    <li><strong>Order by:</strong> – order by one of the parameters</li>
    <li><strong>Post parent:</strong> – parent container can be set in this field</li>
    <li><strong>Post status:</strong> – display posts with specific status only</li>
    <li><strong>Ignore sticky:</strong> – defines whether ignore sticky posts or not</li>
    <li><strong>Linked title:</strong> – linked title description</li>
    <li><strong>Linked featured image:</strong> – linked featured image description</li>
    <li><strong>Post content:</strong> – post content value</li>
    <li><strong>Content Length:</strong> – number of words per displayed posts</li>
    <li><strong>Button text:</strong> – button text</li>
    <li><strong>Using cropped image:</strong> – to use/not to use cropped images</li>
    <li><strong>Cropping image width:</strong> – cropped image width</li>
    <li><strong>Cropping image height:</strong> – cropped image height</li>
    <li><strong>Number slides per view:</strong> – number of slides displayed per view</li>
    <li><strong>Multi Row Slides Layout:</strong> – number of rows</li>
    <li><strong>Space Between Slides:</strong> – slides indent value</li>
    <li><strong>Duration of transition:</strong> – slides transition duration value</li>
    <li><strong>Slider Infinite Loop:</strong> – enable/disable infinite loop</li>
    <li><strong>Free Mode sliding:</strong> – enable/disable slides fixed position</li>
    <li><strong>Grab Cursor:</strong> – enable/disable grab cursor for slider</li>
    <li><strong>Mousewheel Control:</strong> – enable/disable mousewheel control mode</li>
    <li><strong>Centered Slides:</strong> – enable/disable slides alignment</li>
    <li><strong>Effect Layout:</strong> – slides transition effect</li>
    <li><strong>Slider pagination:</strong> – display/hide slider pagination</li>
    <li><strong>Slider navigation:</strong> – display/hide slider navigation</li>
    <li><strong>Class:</strong> – extra CSS class</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
</ul>

<pre class="prettyprint">[cherry_swiper_carousel posts_per_page="10" post_type="post" taxonomy="category" tax_operator="0" offset="0" order="desc" orderby="date" post_status="publish" ignore_sticky_posts="no" linked_title="yes" linked_image="yes" content_type="part" content_length="55" button_text="read more" template="default.tmpl" crop_image="no" crop_width="540" crop_height="320" slides_per_view="3" slides_per_column="1" space_between_slides="10" swiper_duration_speed="300" swiper_loop="yes" swiper_free_mode="no" swiper_grab_cursor="no" swiper_mouse_wheel="no" swiper_centered_slide="no" swiper_effect="slide" swiper_pagination="yes" swiper_navigation="yes" swiper_navigation_position="inner"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_swiper_carousel.png">
</figure>


<h4>Parallax image</strong></h4>

<p>Displays image with parallax effect</p>

<ul class="marked-list">
    <li><strong>Parallax image:</strong> – parallax image</li>
    <li><strong>Parallax speed:</strong> – parallax speed</li>
    <li><strong>Banner url:</strong> – image URL</li>
    <li><strong>Parallax invert:</strong> – enable/disable parallax inversion</li>
    <li><strong>Class:</strong> – extra CSS class</li>
</ul>

<pre class="prettyprint">[cherry_paralax_image speed="1.5" invert="no" min_height="300"]Your content goes here[/cherry_paralax_image]</pre>


<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_parallax_image.png">
</figure>

<h4>Parallax html video</h4>

<p>Displays video with parallax effect</p>

<ul class="marked-list">
    <li><strong>Poster:</strong> – poster image (use media manager to add image)</li>
    <li><strong>MP4 file:</strong> – mp4 file (use media manager to add mp4 file)</li>
    <li><strong>Webm file:</strong> – webm file (use media manager to add webm file)</li>
    <li><strong>Ogv file:</strong> – ogv file (use media manager to add ogv file)</li>
    <li><strong>Parallax speed:</strong> – parallax speed</li>
    <li><strong>Parallax invert:</strong> – enable/disable parallax inversion</li>
    <li><strong>Class:</strong> – extra CSS class</li>
</ul>

<pre class="prettyprint prettyprinted">[cherry_paralax_html_video poster=".../wp-content/uploads/2015/06/Albinus_t08.jpg" mp4=".../wp-content/uploads/2015/06/Albinus_t08.mp4" webm=".../wp-content/uploads/2015/06/Albinus_t08.webm" ogv=".../wp-content/uploads/2015/06/Albinus_t08.ogv" custom_class="parallax-class"]Your content goes here[/cherry_paralax_html_video]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_parallax_html_video.png">
</figure>