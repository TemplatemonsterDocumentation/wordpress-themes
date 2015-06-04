		<article id="content">
			<h3>Content</h3>

			<h4>Post grid</strong></h4>
			<p>Displays posts content with possibility of sorting and additional settngs</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_post.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_posts id</span><span class="pun">=</span><span class="str">"1,2,3,4"</span><span class="pln"> posts_per_page</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> post_type</span><span class="pun">=</span><span class="str">"post,page"</span><span class="pln"> tax_operator</span><span class="pun">=</span><span class="str">"1"</span><span class="pln"> author</span><span class="pun">=</span><span class="str">"admin"</span><span class="pln"> offset</span><span class="pun">=</span><span class="str">"15"</span><span class="pln"> order</span><span class="pun">=</span><span class="str">"asc"</span><span class="pln"> orderby</span><span class="pun">=</span><span class="str">"id"</span><span class="pln"> post_parent</span><span class="pun">=</span><span class="str">"post_parent"</span><span class="pln"> post_status</span><span class="pun">=</span><span class="str">"pending"</span><span class="pln"> content_length</span><span class="pun">=</span><span class="str">"60"</span><span class="pln"> col_xs</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> col_sm</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> col_md</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> col_lg</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"posts_2.tmpl"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>Post ID's:</strong> - field for IDs of posts to display</li>
						<li><i class="fa fa-angle-right"></i> <strong>Posts per page:</strong> - number of posts per page</li>
						<li><i class="fa fa-angle-right"></i> <strong>Post types:</strong> - type of displayed posts (multiple choice)</li>
						<li><i class="fa fa-angle-right"></i> <strong>Taxonomy:</strong> - taxonomy</li>
						<li><i class="fa fa-angle-right"></i> <strong>Terms:</strong> - terms to show posts from</li>
						<li><i class="fa fa-angle-right"></i> <strong>Taxonomy term operator:</strong> - taxonomy term operator has 3 values NOT, NOT IN, AND</li>
						<li><i class="fa fa-angle-right"></i> <strong>Authors:</strong> - coma-separated list of authors</li>
						<li><i class="fa fa-angle-right"></i> <strong>Offset:</strong> - indent value</li>
						<li><i class="fa fa-angle-right"></i> <strong>Order:</strong> - ascending/descending order</li>
						<li><i class="fa fa-angle-right"></i> <strong>Order by:</strong> - order by one of parameters</li>

						<li><i class="fa fa-angle-right"></i> <strong>Post parent:</strong> - parent container can be set in this field</li>
						<li><i class="fa fa-angle-right"></i> <strong>Post status:</strong> - display posts with specific status only</li>

						<li><i class="fa fa-angle-right"></i> <strong>Ignore sticky:</strong> - defines whether ignore sticky posts or not</li>
						<li><i class="fa fa-angle-right"></i> <strong>Linked title:</strong> - linked title description</li>
						<li><i class="fa fa-angle-right"></i> <strong>Linked featured image:</strong> - linked featured image description</li>
						<li><i class="fa fa-angle-right"></i> <strong>Post content:</strong> - post content value</li>
						<li><i class="fa fa-angle-right"></i> <strong>Content Length:</strong> - number of words per displayed posts</li>
						<li><i class="fa fa-angle-right"></i> <strong>Button text:</strong> - button text</li>

						<li><i class="fa fa-angle-right"></i> <strong>Column class:</strong> - container size settings with possibility to set size for different resolutions</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
						<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template to display shortcode content</li>
					</ul>
				</div>
			</div>

			<h4>Cherry Grid</h4>
			<p>Displays content in a chosen grid style</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_grid.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">cherry_grid num</span><span class="pun">=</span><span class="str">"8"</span><span class="pln"> post_type</span><span class="pun">=</span><span class="str">"service"</span><span class="pln"> type</span><span class="pun">=</span><span class="str">"columns"</span><span class="pln"> gutter</span><span class="pun">=</span><span class="str">"25"</span><span class="pln"> columns</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> initial_size</span><span class="pun">=</span><span class="str">"240"</span><span class="pln"> thumbnail_size</span><span class="pun">=</span><span class="str">"100"</span><span class="pln"> button_text</span><span class="pun">=</span><span class="str">"More"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"default.tmpl"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul>
					<li><i class="fa fa-angle-right"></i> <strong>number posts:</strong> - number of displayed posts </li>
					<li><i class="fa fa-angle-right"></i> <strong>post type:</strong> - posts type</li>
					<li><i class="fa fa-angle-right"></i> <strong>grid layout:</strong> - grid layout type</li>
					<li><i class="fa fa-angle-right"></i> <strong>gutter width:</strong> - items indent</li>
					<li><i class="fa fa-angle-right"></i> <strong>columns number:</strong> - number of columns (has effect only for columns layout type)</li>
					<li><i class="fa fa-angle-right"></i> <strong>initial item width:</strong> - initial grid item width</li>
					<li><i class="fa fa-angle-right"></i> <strong>thumbnail size:</strong> - post thumbnail size</li>

					<li><i class="fa fa-angle-right"></i> <strong>read more button text:</strong> - "Read More" button text</li>


					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
				</ul>
				</div>
			</div>

			<h4>Portfolio</h4>
			<p>Displays portfolio posts</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_portfolio.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">cherry_portfolio listing_layout</span><span class="pun">=</span><span class="str">"grid-layout"</span><span class="pln"> loading_mode</span><span class="pun">=</span><span class="str">"portfolio-more-button-mode"</span><span class="pln"> loading_animation</span><span class="pun">=</span><span class="str">"loading-animation-flip"</span><span class="pln"> filter_visible</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> posts_per_page</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> grid_col</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> item_margin</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"default.tmpl"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul>
					<li><i class="fa fa-angle-right"></i> <strong>portfolio listing layout:</strong> - portfolio grid layout</li>
					<li><i class="fa fa-angle-right"></i> <strong>portfolio pagination type:</strong> - portfolio navigation type</li>
					<li><i class="fa fa-angle-right"></i> <strong>portfolio animation type:</strong> - grid type</li>
					<li><i class="fa fa-angle-right"></i> <strong>filter:</strong> - filter layout</li>
					<li><i class="fa fa-angle-right"></i> <strong>post per page:</strong> - number of displayed posts</li>
					<li><i class="fa fa-angle-right"></i> <strong>columns number:</strong> - number of columns (has effect only for columns layout type)</li>
					<li><i class="fa fa-angle-right"></i> <strong>gutter width:</strong> - items indent</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
				</ul>
				</div>
			</div>

			<h4>Services</h4>
			<p>Displays portfolio posts. Besides there is a possibility to display content as procing table и service box</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_services.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_services limit</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> order</span><span class="pun">=</span><span class="str">"asc"</span><span class="pln"> orderby</span><span class="pun">=</span><span class="str">"title"</span><span class="pln"> id</span><span class="pun">=</span><span class="str">"1,2,3,4"</span><span class="pln"> show_title</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> size</span><span class="pun">=</span><span class="str">"60"</span><span class="pln"> excerpt_length</span><span class="pun">=</span><span class="str">"30"</span><span class="pln"> button_text</span><span class="pun">=</span><span class="str">"More"</span><span class="pln"> order_button_text</span><span class="pun">=</span><span class="str">"Order now"</span><span class="pln"> layout</span><span class="pun">=</span><span class="str">"pricing-table"</span><span class="pln"> col_xs</span><span class="pun">=</span><span class="str">"8"</span><span class="pln"> col_sm</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> col_md</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> col_md</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> col_lg</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"pricing-table.tmpl"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>limit:</strong> - minimum number of displayed services</li>
					<li><i class="fa fa-angle-right"></i> <strong>order:</strong> - ascending/descending order</li>
					<li><i class="fa fa-angle-right"></i> <strong>order by:</strong> - order by one of parameters</li>
					<li><i class="fa fa-angle-right"></i> <strong>post ID's:</strong> - field for IDs of posts to display</li>
					<li><i class="fa fa-angle-right"></i> <strong>show service title?:</strong> - display/hide the service title</li>
					<li><i class="fa fa-angle-right"></i> <strong>show media:</strong> - additional media content type to be displayed</li>
					<li><i class="fa fa-angle-right"></i> <strong>featured image size:</strong> - post featured image size</li>
					<li><i class="fa fa-angle-right"></i> <strong>excerpt length:</strong> - excerpt length (if used in the post)</li>
					<li><i class="fa fa-angle-right"></i> <strong>read more button text:</strong> - "Read More" button text</li>
					<li><i class="fa fa-angle-right"></i> <strong>order button text:</strong> - order button text</li>
					<li><i class="fa fa-angle-right"></i> <strong>layout type:</strong> - shortcoed layout type</li>
					<li><i class="fa fa-angle-right"></i> <strong>column class:</strong> - container size settings with possibility to set size for different resolutions</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Team</h4>
			<p>Displays "Our team" posts</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_team.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_team limit</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> order</span><span class="pun">=</span><span class="str">"asc"</span><span class="pln"> orderby</span><span class="pun">=</span><span class="str">"title"</span><span class="pln"> id</span><span class="pun">=</span><span class="str">"1,2,3,4"</span><span class="pln"> show_name</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> show_photo</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> size</span><span class="pun">=</span><span class="str">"150"</span><span class="pln"> excerpt_length</span><span class="pun">=</span><span class="str">"30"</span><span class="pln"> col_xs</span><span class="pun">=</span><span class="str">"8"</span><span class="pln"> col_sm</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> col_md</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> col_md</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> col_lg</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"default.tmpl"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>limit:</strong> - minimum number of displayed services</li>
					<li><i class="fa fa-angle-right"></i> <strong>order:</strong> - ascending/descending order</li>
					<li><i class="fa fa-angle-right"></i> <strong>order by:</strong> - order by one of parameters</li>
					<li><i class="fa fa-angle-right"></i> <strong>post ID's:</strong> - field for IDs of posts to display</li>
					<li><i class="fa fa-angle-right"></i> <strong>show name:</strong> - display/hide team members names</li>
					<li><i class="fa fa-angle-right"></i> <strong>show photo:</strong> - display/hide team members photo</li>
					<li><i class="fa fa-angle-right"></i> <strong>photo size:</strong> - photo size</li>
					<li><i class="fa fa-angle-right"></i> <strong>excerpt length:</strong> - excerpt length</li>
					<li><i class="fa fa-angle-right"></i> <strong>column class:</strong> - container size settings with possibility to set size for different resolutions</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Testimonials</h4>
			<p>Displays testimonials posts</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_testimonials.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_testimonials limit</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> order</span><span class="pun">=</span><span class="str">"asc"</span><span class="pln"> orderby</span><span class="pun">=</span><span class="str">"author"</span><span class="pln"> id</span><span class="pun">=</span><span class="str">"1,2,3,4"</span><span class="pln"> display_author</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> display_avatar</span><span class="pun">=</span><span class="str">"no"</span><span class="pln"> size</span><span class="pun">=</span><span class="str">"400"</span><span class="pln"> template</span><span class="pun">=</span><span class="str">"default.tmpl"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>limit:</strong> - minimum number of displayed services</li>
					<li><i class="fa fa-angle-right"></i> <strong>order:</strong> - ascending/descending order</li>
					<li><i class="fa fa-angle-right"></i> <strong>order by:</strong> - order by one of parameters</li>
					<li><i class="fa fa-angle-right"></i> <strong>post ID's:</strong> - field for IDs of posts to display</li>
					<li><i class="fa fa-angle-right"></i> <strong>display author?:</strong> - display/hide author</li>
					<li><i class="fa fa-angle-right"></i> <strong>display avatar?:</strong> - display/hide author avatar</li>
					<li><i class="fa fa-angle-right"></i> <strong>avatar size:</strong> - avatar size</li>
					<li><i class="fa fa-angle-right"></i> <strong>template:</strong> - shortcode template</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Cherry Charts</strong></h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_charts.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_charts id</span><span class="pun">=</span><span class="str">"5"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<p>Displays chart according to pre-set and set up element identification.</p>
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>chart id:</strong> - chart ID</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>
		</article>
