<h3>Content</h3>

<h4>Posts</h4>

<p>Displays posts content with possibility of sorting and additional settings.</p>
<ul class="marked-list">
    <li><strong>Post ID's:</strong> – field for IDs of posts to display</li>
    <li><strong>Posts per page:</strong> – number of posts per page</li>
    <li><strong>Post types:</strong> – type of displayed posts (multiple choice)</li>
    <li><strong>Taxonomy:</strong> – taxonomy</li>
    <li><strong>Terms:</strong> – terms to show posts from</li>
    <li><strong>Taxonomy term operator:</strong> – taxonomy term operator has 3 values NOT, NOT IN, AND</li>
    <li><strong>Authors:</strong> – coma-separated list of authors</li>
    <li><strong>Offset:</strong> – indent value</li>
    <li><strong>Order:</strong> – ascending/descending order</li>
    <li><strong>Order by:</strong> – order by one of parameters</li>
    <li><strong>Post parent:</strong> – parent container can be set in this field</li>
    <li><strong>Post status:</strong> – display posts with specific status only</li>
    <li><strong>Ignore sticky:</strong> – defines whether ignore sticky posts or not</li>
    <li><strong>Linked title:</strong> – linked title description</li>
    <li><strong>Linked featured image:</strong> – linked featured image description</li>
    <li><strong>Post content:</strong> – post content value</li>
    <li><strong>Content Length:</strong> – number of words per displayed posts</li>
    <li><strong>Button text:</strong> – button text</li>
    <li><strong>Column class:</strong> – container size settings with possibility to set size for different resolutions
    </li>
    <li><strong>Class:</strong> – shortcode custom class</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
</ul>
<pre class="prettyprint">[cherry_posts posts_per_page="10" post_type="post" taxonomy="category" tax_operator="0" offset="0" order="desc" orderby="date" post_status="publish" ignore_sticky_posts="yes" linked_title="yes" linked_image="yes" image_size="thumbnail" content_type="part" content_length="55" button_text="read more" col_xs="12" col_sm="6" col_md="3" col_lg="3" template="default.tmpl"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_post.png">
</figure>


<h4>Grid</h4>

<p>Displays content in a chosen grid style</p>
<ul class="marked-list">
    <li><strong>Number posts:</strong> – number of displayed posts</li>
    <li><strong>Post type:</strong> – posts type</li>
    <li><strong>Grid layout:</strong> – grid layout type</li>
    <li><strong>Gutter width:</strong> – items indent</li>
    <li><strong>Columns number:</strong> – number of columns (has effect only for columns layout type)</li>
    <li><strong>Initial item width:</strong> – initial grid item width</li>
    <li><strong>Thumbnail size:</strong> – post thumbnail size</li>
    <li><strong>Read more button text:</strong> – "Read More" button text</li>
    <li><strong>Class:</strong> – shortcode custom class</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
</ul>
<pre class="prettyprint">[cherry_grid num="8" post_type="post" type="flex" gutter="0" columns="3" initial_size="0" thumbnail_size="0" button_text="Read More" template="default.tmpl"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_grid.png">
</figure>


<h4>Portfolio</h4>

<p>Displays portfolio posts</p>
<ul class="marked-list">
    <li><strong>Portfolio listing layout:</strong> – portfolio grid layout</li>
    <li><strong>Portfolio pagination type:</strong> – portfolio navigation type</li>
    <li><strong>Portfolio animation type:</strong> – grid type</li>
    <li><strong>Filter:</strong> – filter layout</li>
    <li><strong>Post per page:</strong> – number of displayed posts</li>
    <li><strong>Columns number:</strong> – number of columns (has effect only for columns layout type)</li>
    <li><strong>Gutter width:</strong> – items indent</li>
    <li><strong>Class:</strong> – shortcode custom class</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
</ul>
<pre class="prettyprint">[cherry_portfolio listing_layout="masonry-layout" loading_mode="portfolio-ajax-pagination-mode" loading_animation="loading-animation-move-up" filter_visible="yes" posts_per_page="9" grid_col="3" item_margin="9"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_portfolio.png">
</figure>


<h4>Services</h4>

<p>Besides, there is a possibility to display content as pricing table and service box</p>
<ul class="marked-list">
    <li><strong>Limit:</strong> – minimum number of displayed services</li>
    <li><strong>Order:</strong> – ascending/descending order</li>
    <li><strong>Order by:</strong> – order by one of parameters</li>
    <li><strong>Post ID's:</strong> – field for IDs of posts to display</li>
    <li><strong>Show service title?:</strong> – display/hide the service title</li>
    <li><strong>Show media:</strong> – additional media content type to be displayed</li>
    <li><strong>Featured image size:</strong> – post featured image size</li>
    <li><strong>Excerpt length:</strong> – excerpt length (if used in the post)</li>
    <li><strong>Read more button text:</strong> – "Read More" button text</li>
    <li><strong>Order button text:</strong> – order button text</li>
    <li><strong>Layout type:</strong> – shortcode layout type</li>
    <li><strong>Column class:</strong> – container size settings with possibility to set size for different resolutions
    </li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
    <li><strong>Class:</strong> – shortcode custom class</li>
</ul>
<pre class="prettyprint">[cherry_services limit="3" order="desc" orderby="date" id="0" show_title="yes" show_media="icon" size="thumbnail" excerpt_length="20" button_text="Read More" order_button_text="Order" layout="boxes" col_xs="12" col_sm="6" col_md="3" col_lg="none" template="default.tmpl"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_services.png">
</figure>


<h4>Team</h4>

<p>Displays "Our team" posts</p>
<ul class="marked-list">
    <li><strong>Limit:</strong> – minimum number of displayed services</li>
    <li><strong>Order:</strong> – ascending/descending order</li>
    <li><strong>Order by:</strong> – order by one of parameters</li>
    <li><strong>Post ID's:</strong> – field for IDs of posts to display</li>
    <li><strong>Show name:</strong> – display/hide team members names</li>
    <li><strong>Show photo:</strong> – display/hide team members photo</li>
    <li><strong>Photo size:</strong> – photo size</li>
    <li><strong>Excerpt length:</strong> – excerpt length</li>
    <li><strong>Column class:</strong> – container size settings with possibility to set size for different resolutions
    </li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
    <li><strong>Class:</strong> – shortcode custom class</li>
</ul>
<pre class="prettyprint">[cherry_team limit="3" order="desc" orderby="date" id="0" show_name="yes" show_photo="yes" size="thumbnail" excerpt_length="20" col_xs="12" col_sm="6" col_md="3" col_lg="none" template="default.tmpl"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_team.png">
</figure>


<h4>Testimonials</h4>

<p>Displays testimonials posts</p>
<ul class="marked-list">
    <li><strong>Limit:</strong> – minimum number of displayed services</li>
    <li><strong>Order:</strong> – ascending/descending order</li>
    <li><strong>Order by:</strong> – order by one of parameters</li>
    <li><strong>Post ID's:</strong> – field for IDs of posts to display</li>
    <li><strong>Display author?:</strong> – display/hide author</li>
    <li><strong>Display avatar?:</strong> – display/hide author avatar</li>
    <li><strong>Avatar size:</strong> – avatar size</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
    <li><strong>Class:</strong> – shortcode custom class</li>
</ul>
<pre class="prettyprint">[cherry_testimonials limit="3" order="desc" orderby="date" display_author="yes" display_avatar="yes" size="50" content_type="full" content_length="55" template="default.tmpl"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_testimonials.png">
</figure>


<h4>Charts</h4>

<p>Displays chart according to pre-set and set up element identification.</p>
<ul class="marked-list">
    <li><strong>Chart id:</strong> – chart ID</li>
    <li><strong>Class:</strong> – shortcode custom class</li>
</ul>
<pre class="prettyprint">[cherry_charts id="21" custom_class="chart-class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_charts.png">
</figure>


<h4>Sharing</h4>

<p>Renders social networks sharing block. Available only if Social plugin is active.</p>
<ul class="marked-list">
    <li><i class="icon-angle-right"></i> <strong>Networks:</strong> – select social networks</li>
    <li><i class="icon-angle-right"></i> <strong>Class:</strong> – add user custom css class</li>
</ul>
<pre class="prettyprint">[cherry_sharing networks="facebook,twitter,pinterest" custom_class="sharing-class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_sharing.png">
</figure>


<h4>Blog Layout</h4>

<p>Shortcode for outputting blog posts, with enhanced customization.</p>
<ul class="marked-list">
    <li><i class="icon-angle-right"></i> <strong>Limit</strong> – maximum number of posts</li>
    <li><i class="icon-angle-right"></i> <strong>Order</strong> – posts order</li>
    <li><i class="icon-angle-right"></i> <strong>Order by</strong> – order posts by</li>
    <li><i class="icon-angle-right"></i> <strong>Category</strong> – select categories to show posts from</li>
    <li><i class="icon-angle-right"></i> <strong>Show pages</strong> – show page navigation or not</li>
    <li><i class="icon-angle-right"></i> <strong>Layout</strong> – select output layout format</li>
    <li><i class="icon-angle-right"></i> <strong>Filter type</strong> – select blog filter type</li>
    <li><i class="icon-angle-right"></i> <strong>Grid columns</strong> – select grid layout pattern for pages with custom blog layout</li>
    <li><i class="icon-angle-right"></i> <strong>Masonry columns number</strong> – specify custom masonry layout columns number</li>
    <li><i class="icon-angle-right"></i> <strong>Masonry columns gutter</strong> – specify custom masonry layout columns gutter(px)</li>
    <li><i class="icon-angle-right"></i> <strong>Timeline item width</strong> – specify custom item width for Timeline blog layout(%)</li>
    <li><i class="icon-angle-right"></i> <strong>Enable timeline breakpoints</strong> – enable/disable timeline breakpoints</li>
    <li><i class="icon-angle-right"></i> <strong>Timeline breakpoint</strong> – select timeline breakpoint type</li>
    <li><i class="icon-angle-right"></i> <strong>Timeline breakpoint date format</strong> – timeline breakpoint date format</li>
    <li><i class="icon-angle-right"></i> <strong>Enable marker's date label</strong> – enable/disable marker's date label</li>
    <li><i class="icon-angle-right"></i> <strong>Prev button label</strong> – previous button label text. Text or HTML can be used</li>
    <li><i class="icon-angle-right"></i> <strong>Next button label</strong> – next button label text. Text or HTML can be used</li>
    <li><i class="icon-angle-right"></i> <strong>Class</strong> – extra CSS class</li>
    <li><strong>Template:</strong> – shortcode template to display shortcode content, for more information, please visit our <a href="./index.php?project=monstroid&lang=en&section=cherry-plugins#" target="blank">tutorial</a></li>
</ul>
<pre class="prettyprint">[cherry_blog posts_per_page="6" order="asc" orderby="id" category="uncategorized" paged="yes" layout_type="masonry" filter_type="tags" grid_column="grid-3" columns="4" columns_gutter="20" timeline_item_width="50" use_timeline_breakpoint="no" timeline_breakpoint="year" timeline_breakpoint_date_format="Y, j, F" show_marker_date="yes" timeline_marker_date_format=" Y, j, F" pagination_previous_label="Previous" class="custom_class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/blog_layouts.jpg">
</figure>


<h4>Simple Slider</h4>

<p>Shortcode for outputting slider (posts format "slides list").</p>
<ul class="marked-list">
    <li><i class="icon-angle-right"></i> <strong>Post per page</strong> – specify number of posts that you want to show. Enter -1 to get all posts</li>
    <li><i class="icon-angle-right"></i> <strong>Slider width</strong> – sets the width of the slider</li>
    <li><i class="icon-angle-right"></i> <strong>Slider height</strong> – sets the height of the slider</li>
    <li><i class="icon-angle-right"></i> <strong>Slider orientation</strong> – indicates whether the slides will be arranged horizontally or vertically</li>
    <li><i class="icon-angle-right"></i> <strong>Slide distance</strong> – sets the distance between the slides</li>
    <li><i class="icon-angle-right"></i> <strong>Slider navigation</strong> – indicates whether the arrow buttons will be created</li>
    <li><i class="icon-angle-right"></i> <strong>Slider pagination</strong> – indicates whether the pagination will be created</li>
    <li><i class="icon-angle-right"></i> <strong>Slider autoplay</strong> – indicates whether or not autoplay will be enabled</li>
    <li><i class="icon-angle-right"></i> <strong>Slider fullScreen</strong> – indicates whether the full-screen button is enabled</li>
    <li><i class="icon-angle-right"></i> <strong>Class</strong> –  extra CSS class</li>
</ul>
<pre class="prettyprint">[cherry_slider posts_per_page="4" slider_width="90%" slider_height="560" slider_orientation="vertical" slider_slide_distance="15" slider_navigation="no" slider_pagination="no" slider_autoplay="no" slider_fullScreen="no" custom_class="custom_class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/simple_slider.jpg">
</figure>


<h4>Video Preview</h4>

<p>Shortcode for outputting video in the content. You can configure the playback mode, set the poster, and more.</p>
<ul class="marked-list">
    <li><i class="icon-angle-right"></i> <strong>URL or File</strong> – to use video from YouTube or Vimeo input video URL. You can also upload video file from media library.</li>
    <li><i class="icon-angle-right"></i> <strong>Poster</strong> – poster image url</li>
    <li><i class="icon-angle-right"></i> <strong>Controls</strong> – select how to display controls</li>
    <li><i class="icon-angle-right"></i> <strong>Show content on mouse hover</strong> – select, show or hide content on mouse hover</li>
    <li><i class="icon-angle-right"></i> <strong>Muted</strong> – set enable or disable mute mode</li>
    <li><i class="icon-angle-right"></i> <strong>Loop</strong> – enable or disable loop paying mode</li>
    <li><i class="icon-angle-right"></i> <strong>Preload</strong></li>
    <li><i class="icon-angle-right"></i> <strong>Custom class</strong> –  extra CSS class</li>
</ul>
<pre class="prettyprint">[cherry_slider posts_per_page="4" slider_width="90%" slider_height="560" slider_orientation="vertical" slider_slide_distance="15" slider_navigation="no" slider_pagination="no" slider_autoplay="no" slider_fullScreen="no" custom_class="custom_class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/video_preview.jpg">
</figure>