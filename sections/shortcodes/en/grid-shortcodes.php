<h3>Grid</h3>

<h4>Row</h4>

<p>When forming a grid, you should "wrap" grid elements into [row] shortcode that has 2 additional settings, they are
   container type and custom class.</p>

<pre class="prettyprint">[cherry_row class="custom-row"][/cherry_row]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_row.png">
</figure>

<h4>Row Inner</h4>

<p>When creating an additional nesting of rows, you should "wrap" its elements into [su_row_inner] shortcode that has
   two additional settings, they are container type and custom class.</p>

<pre class="prettyprint">[cherry_row_inner type="full-width"][/cherry_row_inner]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_row.png">
</figure>


<h4>Column</h4>

<p>Along with row shortcode, column is used to build multicolumn layouts. Columns should be placed only within rows.</p>

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

<p>Can be used in case you need vertical indent between blocks. Can be added in the visual editor with the help of the
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

<p>Box shortcode is used to build nesting content wrapping boxes..</p>

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
