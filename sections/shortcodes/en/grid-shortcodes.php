<h3>Grid</h3>

<h4>Row (Background Type:None)</h4>
<p>When forming a grid, you should "wrap" the grid elements into [row] shortcode.</p>

<ul class="marked-list">
    <li><strong>Width Type</strong> - settings for width type select</li>
    <li><strong>Background Type</strong> - settings for background type select</li>
    <li><strong>Anchor</strong> - this option defines menu item marker</li>
    <li><strong>Class</strong> - extra CSS class</li>
</ul>

<pre class="prettyprint">[cherry_row type="fixed-width" bg_type="none" anchor="anchor_title" class="custom_class"][/cherry_row]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/row_backgroun_type_none.jpg">
</figure>

<h4>Row (Background Type: Color/Image)</h4>

<ul class="marked-list">
    <li><strong>Width Type</strong> - settings for select width type</li>
    <li><strong>Background Type</strong> - settings for select background type</li>
    <li><strong>Anchor</strong> - this option defines menu item marker</li>
    <li><strong>Class</strong> - extra CSS class</li>
    <li><strong>Styling preset</strong> - select styling preset</li>
    <li><strong>Background Color</strong> - select the background color</li>
    <li><strong>Background Image</strong> - upload the background image</li>
    <li><strong>Background image position</strong> - select the background image position</li>
    <li><strong>Background image repeat</strong> - select the background image repeat</li>
    <li><strong>Background image attachment</strong> - select the background image attachment</li>
</ul>

<pre class="prettyprint">[cherry_row type="fixed-width" bg_type="image" anchor="anchor_title1" class="custom_class" preset="primary" bg_color="#ffb6ab" bg_image="http://99.99.99.99/cherry_test/wp-content/uploads/2015/07/257860.jpg" bg_position="top-left" bg_repeat="repeat-x" bg_attachment="fixed"][/cherry_row]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/row_background_color_image.jpg">
</figure>

<h4>Row (Background Type: Parallax Image)</h4>

<ul class="marked-list">
    <li><strong>Width Type</strong> - settings for select width type</li>
    <li><strong>Background Type</strong> - settings for select background type</li>
    <li><strong>Anchor</strong> - this option defines menu item marker</li>
    <li><strong>Class</strong> - extra CSS class</li>
    <li><strong>Background Image</strong> - upload background image</li>
    <li><strong>Parallax speed</strong> - parallax speed value (s)</li>
    <li><strong>Parallax invert</strong> - parallax invert direction move</li>
    <li><strong>Parallax container min-height</strong> - container min-height value (px)</li>
</ul>

<pre class="prettyprint">[cherry_row bg_type="parallax_image" anchor="anchor_title2" class="custom_class1" image_src="http://99.99.99.99/cherry_test/wp-content/uploads/2015/07/407309.jpg" parallax_speed="2" parallax_invert="yes" min_height="320"][/cherry_row]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/row_background_parallax_image.jpg">
</figure>

<h4>Row (Background Type: Parallax Video)</h4>

<ul class="marked-list">
    <li><strong>Width Type</strong> - settings for select width type</li>
    <li><strong>Background Type</strong> - settings for select background type</li>
    <li><strong>Anchor</strong> - this option defines menu item marker</li>
    <li><strong>Class</strong> - extra CSS class</li>
    <li><strong>Poster</strong> - upload poster image</li>
    <li><strong>mp4 file</strong> - upload poster image</li>
    <li><strong>webm file</strong> - URL to webm video-file</li>
    <li><strong>ogv file</strong> - URL to ogv video-file</li>
    <li><strong>Parallax speed</strong> - parallax speed value (s)</li>
    <li><strong>Parallax invert</strong> - parallax invert direction move</li>
</ul>

<pre class="prettyprint">[cherry_row bg_type="parallax_video" anchor="anchor_title3" class="custom_class2" poster="http://99.99.99.99/cherry_test/wp-content/uploads/2015/08/background-2-1920x1013.gif" mp4="http://99.99.99.99/cherry_test/wp-content/uploads/2015/07/623403.jpg" webm="http://99.99.99.99/cherry_test/wp-content/uploads/2015/07/623403.jpg" ogv="http://99.99.99.99/cherry_test/wp-content/uploads/2015/07/623403.jpg" speed="2.5" invert="yes"][/cherry_row]
</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/row_background_parallax_video.jpg">
</figure>



<h4>Row Inner</h4>

<p>When creating an additional nesting of rows, you should "wrap" its elements into [row_inner] shortcode.</p>

<pre class="prettyprint">[cherry_row_inner type="fixed-width" bg_type="none" anchor="anchor_title" class="custom_class"][/cherry_row_inner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/row_backgroun_type_none.jpg">
</figure>


<h4>Column</h4>

<p>Along with row shortcode, column is used to build multicolumn layouts. Columns should be placed only within rows.</p>

<ul class="marked-list">
    <li><strong>size:</strong> - size of the column with the ability of setting a propper size for different  screen resolutions</li>
    <li><strong>offset:</strong> - increases the left margin of the column</li>
    <li><strong>pull:</strong> -
        <a href="http://getbootstrap.com/css/#grid-column-ordering">column order modifier</a>
    </li>
    <li><strong>push:</strong> - column order modifier</li>
    <li><strong>collapse column paddings:</strong> - resets the settings of columns margin</li>
    <li><strong>class:</strong> - shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_col size_xs="none" size_sm="none" size_md="6" size_lg="none" offset_xs="none" offset_sm="none" offset_md="none" offset_lg="none" pull_xs="none" pull_sm="none" pull_md="none" pull_lg="none" push_xs="none" push_sm="none" push_md="none" push_lg="none" collapse="no"]Column content[/cherry_col]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_column.png">
</figure>


<h4>Column Inner</h4>

<p>Used to build multicolumn layouts in nesting rows.</p>

<ul class="marked-list">
    <li><strong>size:</strong> - size of the column with possibility to set size for different resolutions</li>
    <li><strong>offset:</strong> - increases the left margin of the column</li>
    <li><strong>pull:</strong> -
        <a href="http://getbootstrap.com/css/#grid-column-ordering">column order modifier</a>
    </li>
    <li><strong>push:</strong> - column order modifier</li>
    <li><strong>collapse column paddings:</strong> - resets the settings of columns margin</li>
    <li><strong>class:</strong> - shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_col_inner size_xs="none" size_sm="none" size_md="6" size_lg="none" offset_xs="none" offset_sm="none" offset_md="none" offset_lg="none" pull_xs="none" pull_sm="none" pull_md="none" pull_lg="none" push_xs="none" push_sm="none" push_md="none" push_lg="none" collapse="no"]Column content[/cherry_col_inner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_column_inner.png">
</figure>

<h4>Spacer</h4>

<p>Can be used in case you need the vertical indent between blocks. Can be added in the visual editor with the help of the
   [su_spacer] shortcode and has the following settings:</p>

<ul class="marked-list">
    <li><strong>size:</strong> - spacer height</li>
    <li><strong>class:</strong> - shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_spacer size="450" class="spacer-class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_spacer.png">
</figure>


<h4>Clear</h4>

<p>Used to reset the float. Can be used with a custom class.</p>

<pre class="prettyprint">[cherry_clear class="clear-class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_clear.png">
</figure>

<h4>Box</h4>

<p>Box shortcode is used to build content wrapping boxes.</p>

<ul class="marked-list">
    <li><strong>box styling preset:</strong> - option of box styling</li>
    <li><strong>background color:</strong> - box background color</li>
    <li><strong>background image:</strong> - box background image</li>
    <li><strong>background image position:</strong> - background image position setting</li>
    <li><strong>background image repeat:</strong> - background image repeat setting</li>
    <li><strong>background image attachment:</strong> - defines whether image will be scrolled with the content or not
    </li>
    <li><strong>fill:</strong> - used to set up sizes according to the parent container</li>
    <li><strong>class:</strong> - shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_box preset="primary" bg_color="#ffffff" bg_position="center" bg_repeat="no-repeat" bg_attachment="scroll" fill="no"]Your content goes here[/cherry_box]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_box.png">
</figure>


<h4>Box inner</h4>

<p>Box shortcode is used to build nesting content wrapping boxes.</p>

<ul class="marked-list">
    <li><strong>box styling preset:</strong> - container styling</li>
    <li><strong>background color:</strong> - box background color</li>
    <li><strong>background image:</strong> - box background image</li>
    <li><strong>background image position:</strong> - box background image position</li>
    <li><strong>background image repeat:</strong> - box background image repeat</li>
    <li><strong>background image attachment:</strong> - defines if background image will have fixed position or will
                                                      scroll with the whole page
    </li>
    <li><strong>fill:</strong> - make box have the same size as parent container</li>
    <li><strong>class:</strong> - define user custom class</li>
</ul>

<pre class="prettyprint">[cherry_box_inner bg_color="#ffffff" bg_position="center" bg_repeat="no-repeat" bg_attachment="scroll" fill="no"]Your content goes here[/cherry_box_inner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_box_inner.png">
</figure>