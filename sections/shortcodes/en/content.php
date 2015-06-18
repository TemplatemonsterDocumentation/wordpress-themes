		<article id="content">
			<h3>Content</h3>

			<h4>Posts</h4>
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_post.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_post.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Displays posts content with possibility of sorting and additional settngs</p>
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
					<pre class="prettyprint">[cherry_posts posts_per_page="10" post_type="post" taxonomy="category" tax_operator="0" offset="0" order="desc" orderby="date" post_status="publish" ignore_sticky_posts="yes" linked_title="yes" linked_image="yes" image_size="thumbnail" content_type="part" content_length="55" button_text="read more" col_xs="12" col_sm="6" col_md="3" col_lg="3" template="default.tmpl"]</pre>
				</div>
			</div>

			<h4>Grid</h4>		
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_grid.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_grid.png">
						</a>
					</figure>
				</div>
				<div class="grid_6">
					<p>Displays content in a chosen grid style</p>
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
					<pre class="prettyprint">[cherry_grid num="8" post_type="post" type="flex" gutter="0" columns="3" initial_size="0" thumbnail_size="0" button_text="Read More" template="default.tmpl"]</pre>
				</div>
			</div>

			<h4>Portfolio</h4>
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_portfolio.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_portfolio.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Displays portfolio posts</p>
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
					<pre class="prettyprint">[cherry_portfolio listing_layout="masonry-layout" loading_mode="portfolio-ajax-pagination-mode" loading_animation="loading-animation-move-up" filter_visible="yes" posts_per_page="9" grid_col="3" item_margin="9"]</pre>
				</div>
			</div>

			<h4>Services</h4>
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_services.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_services.png">
						</a>
					</figure>				
				</div>
				<div class="grid_6">
					<p>Displays portfolio posts. Besides there is a possibility to display content as procing table и service box</p>
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
					<pre class="prettyprint">[cherry_services limit="3" order="desc" orderby="date" id="0" show_title="yes" show_media="icon" size="thumbnail" excerpt_length="20" button_text="Read More" order_button_text="Order" layout="boxes" col_xs="12" col_sm="6" col_md="3" col_lg="none" template="default.tmpl"]</pre>
				</div>
			</div>

			<h4>Team</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_team.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_team.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Displays "Our team" posts</p>
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
					<pre class="prettyprint">[cherry_team limit="3" order="desc" orderby="date" id="0" show_name="yes" show_photo="yes" size="thumbnail" excerpt_length="20" col_xs="12" col_sm="6" col_md="3" col_lg="none" template="default.tmpl"]</pre>
				</div>
			</div>

			<h4>Testimonials</h4>	
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_testimonials.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_testimonials.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Displays testimonials posts</p>
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
					<pre class="prettyprint">[cherry_testimonials limit="3" order="desc" orderby="date" display_author="yes" display_avatar="yes" size="50" content_type="full" content_length="55" template="default.tmpl"]</pre>
				</div>
			</div>

			<h4>Cherry Charts</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_charts.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_charts.png">
						</a>
					</figure>				
				</div>
				<div class="grid_6">
					<p>Displays chart according to pre-set and set up element identification.</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>chart id:</strong> - chart ID</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_charts id="21" custom_class="chart-class"]</pre>
				</div>
			</div>

			<h4>Sharing</h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_sharing.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_sharing.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Renders social networks sharing block. Available only if Social plugin is active.</p>
					<ul>
						<li><i class="icon-angle-right"></i> <strong>networks:</strong> - select social networks</li>
						<li><i class="icon-angle-right"></i> <strong>class:</strong> - add user custom css class</li>
					</ul>
					<pre class="prettyprint">[cherry_sharing networks="facebook,twitter,pinterest" custom_class="sharing-class"]</pre>
				</div>
			</div>

		</article>
