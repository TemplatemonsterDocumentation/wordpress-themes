		<article id="grid-shortcodes">
			<h3>Grid</h3>

			<h4>Row</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_row.png"></figure>
			<div class="row">

				<div class="grid_6"><pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_row type</span><span class="pun">=</span><span class="str">"fixed-width"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_row</span><span class="pun">]</span></pre></div>


				<div class="grid_6"><p><span class="label">Description:</span> when forming a grid, you should "wrap" grid elements into [row] shortcode that has 2 additional settings, they are container type and custom class.</p></div>
			</div>

			<h4>Row Inner</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_row.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_row_inner type</span><span class="pun">=</span><span class="str">"fixed-width"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_row_inner</span><span class="pun">]</span></pre>
				</div>


				<div class="grid_7"><p><span class="label">Description:</span> when creating an additional nesting of rows, you should "wrap" its elements into [su_row_inner] shortcode that has two additional settings, they are container type and custom class.</p></div>
			</div>

			<h4>Column</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_column.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_col size_xs</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_sm</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_md</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_lg</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> offset_xs</span><span class="pun">=</span><span class="str">"1"</span><span class="pln"> offset_sm</span><span class="pun">=</span><span class="str">"2"</span><span class="pln"> offset_md</span><span class="pun">=</span><span class="str">"0.5"</span><span class="pln"> offset_lg</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> pull_xs</span><span class="pun">=</span><span class="str">"9"</span><span class="pln"> pull_sm</span><span class="pun">=</span><span class="str">"10"</span><span class="pln"> pull_md</span><span class="pun">=</span><span class="str">"11"</span><span class="pln"> pull_lg</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> push_xs</span><span class="pun">=</span><span class="str">"5"</span><span class="pln"> push_sm</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> push_lg</span><span class="pun">=</span><span class="str">"8"</span><span class="pln"> collapse</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_col</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul>
					<li><strong>size:</strong> - size of the column with possibility to set size for different resolutions</li>
					<li><strong>offset:</strong> - increases the left margin of the column</li>
					<li><strong>pull:</strong> -  <a href="http://getbootstrap.com/css/#grid-column-ordering">column order modifier</a></li>
					<li><strong>push:</strong> -  column order modifier</li>
					<li><strong>collapse column paddings:</strong> - resets the settings of columns margin</li>
					<li><strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Column Inner</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_column_inner.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_col_inner size_xs</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_sm</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_md</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> size_lg</span><span class="pun">=</span><span class="str">"3"</span><span class="pln"> offset_xs</span><span class="pun">=</span><span class="str">"1"</span><span class="pln"> offset_sm</span><span class="pun">=</span><span class="str">"2"</span><span class="pln"> offset_md</span><span class="pun">=</span><span class="str">"0.5"</span><span class="pln"> offset_lg</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> pull_xs</span><span class="pun">=</span><span class="str">"9"</span><span class="pln"> pull_sm</span><span class="pun">=</span><span class="str">"10"</span><span class="pln"> pull_md</span><span class="pun">=</span><span class="str">"11"</span><span class="pln"> pull_lg</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> push_xs</span><span class="pun">=</span><span class="str">"5"</span><span class="pln"> push_sm</span><span class="pun">=</span><span class="str">"6"</span><span class="pln"> push_lg</span><span class="pun">=</span><span class="str">"8"</span><span class="pln"> collapse</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_col_inner</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul>
					<li><strong>size:</strong> - size of the column with possibility to set size for different resolutions</li>
					<li><strong>offset:</strong> - increases the left margin of the column</li>
					<li><strong>pull:</strong> - <a href="http://getbootstrap.com/css/#grid-column-ordering">column order modifier</a></li>
					<li><strong>push:</strong> - column order modifier</li>
					<li><strong>collapse column paddings:</strong> - resets the settings of columns margin</li>
					<li><strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Spacer</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_spacer.png"></figure>
			<div class="row">

				<div class="grid_6"><pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_spacer size</span><span class="pun">=</span><span class="str">"30"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span></pre></div>


				<div class="grid_6"><p><span class="label">Description:</span> can be used in case you need vertical indent between blocks. Can be added in the visual editor with the help of the [su_spacer] shortcode and has next settings:</p>
				<ul>
					<li><strong>size:</strong> - spacer hight</li>
					<li><strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Clear</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_clear.png"></figure>
			<div class="row">

				<div class="grid_6"><pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_clear class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span></pre></div>
				<div class="grid_6"><p><span class="label">Description:</span> used to reset the float. Can be used with a custom class.</p>
				</div>
			</div>

			<h4>Box</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_box.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_box preset</span><span class="pun">=</span><span class="str">"secondary-border"</span><span class="pln"> bg_color</span><span class="pun">=</span><span class="str">"#bdbdbd"</span><span class="pln"> bg_image</span><span class="pun">=</span><span class="str">"http://example/cherry/wp-content/uploads/2015/03/image_3.jpg"</span><span class="pln"> bg_position</span><span class="pun">=</span><span class="str">"top-right"</span><span class="pln"> bg_repeat</span><span class="pun">=</span><span class="str">"repeat"</span><span class="pln"> bg_attachment</span><span class="pun">=</span><span class="str">"fixed"</span><span class="pln"> fill</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_box</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul class="fa-marked">
						<li><strong>box styling preset:</strong> - option of box styling</li>
						<li><strong>background color:</strong> - box background color</li>
						<li><strong>background image:</strong> - box background image</li>
						<li><strong>background image position:</strong> - background image position setting</li>
						<li><strong>background image repeat:</strong> - background image repeat setting</li>
						<li><strong>background image attachment:</strong> - defines whether image will be scrolled with the content or not</li>
						<li><strong>fill:</strong> - used to set up sizes according to the parent container</li>
						<li><strong>class:</strong> - shortcode custom class</li>
					</ul>
				</div>
			</div>


			<h4>Box inner</h4>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_box_inner.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">cherry_box_inner preset</span><span class="pun">=</span><span class="str">"secondary-border"</span><span class="pln"> bg_color</span><span class="pun">=</span><span class="str">"#bdbdbd"</span><span class="pln"> bg_image</span><span class="pun">=</span><span class="str">"http://example/cherry/wp-content/uploads/2015/03/image_3.jpg"</span><span class="pln"> bg_position</span><span class="pun">=</span><span class="str">"top-right"</span><span class="pln"> bg_repeat</span><span class="pun">=</span><span class="str">"repeat"</span><span class="pln"> bg_attachment</span><span class="pun">=</span><span class="str">"fixed"</span><span class="pln"> fill</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/cherry_box_inner</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
					<ul class="fa-marked">
						<li> <strong>box styling preset:</strong> - container styling</li>
						<li> <strong>background color:</strong> - box background color</li>
						<li> <strong>background image:</strong> - box background image</li>
						<li> <strong>background image position:</strong> - box background image position</li>
						<li> <strong>background image repeat:</strong> - box background image repeat</li>
						<li> <strong>background image attachment:</strong> - defines if background image will have fixed position or will scroll with the whole page</li>
						<li> <strong>fill:</strong> - make box have same size as parent container</li>
						<li> <strong>class:</strong> - define user custom class</li>
					</ul>
				</div>
			</div>
		</article>
