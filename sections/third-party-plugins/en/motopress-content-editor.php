

	<h3>MotoPress Content Editor</h3>

	<p><a href="http://www.getmotopress.com/plugins/content-editor/" target="_blank"><strong>MotoPress Content Editor</strong></a> enhances the standard WordPress builder and enables to create websites visually. It’s the complete solution for building responsive pages without coding simply by dragging and dropping content elements.</p>


	<p> You have two ways of creating or editing content: in the visual MotoPress Content Editor or in the default WordPress editor. </p>

	<p> If you prefer to create/edit content in the default WordPress editor, but would like to have it viewable and editable in the MotoPress editor, you need to follow the rules below.</p>
 

	<h4>Basic rules of organizing shortcodes:</h4>


	<ol class="index-list">
		<li><p>The grid shortcode should come first. The Row → Column structure should always be kept.</p>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		Content
	[/cherry_col]
[/cherry_row]</pre>
		</li>
		<li><p>Every element has to be placed inside the grid.</p> 
			<p>Let's take “cherry_spacer” as an example:</p>
<strong>Correct:</strong>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		Content 1
	[/cherry_col]
[/cherry_row]
[cherry_row]
	[cherry_col]
		[cherry_spacer size="20"]
	[/cherry_col]
[/cherry_row]
[cherry_row]
	[cherry_col]
		Content 2
	[/cherry_col]
[/cherry_row]</pre>
<strong>Incorrect:</strong>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		Content 1
	[/cherry_col]
[/cherry_row]
[cherry_spacer size="20"]
[cherry_row]
	[cherry_col]
		Content 2
	[/cherry_col]
[/cherry_row]</pre>
<p> You can't insert a shortcode or a piece of content on the inner_row level. For example, it is wrong to insert my_shortcode without wrapping it into a grid.</p>
<strong>Incorrect</strong>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		[cherry_row_inner]
			[cherry_col_inner]
				Content 1
			[/cherry_col_inner]
		[/cherry_row_inner]
		[my_shortcode]
	[/cherry_col]
[/cherry_row]
</pre>
		</li>
		<li><p> Here is how to create two columns:</p>
<pre class="prettyprint">
[cherry_row]
	[cherry_col size_md="6"]
		Content 1
	[/cherry_col]
	[cherry_col size_md="6"]
		Content 2
	[/cherry_col]
[/cherry_row]</pre>
		</li>
		<li><p>Several objects in a column</p>
			<p>Each object in a column should be placed into a grid. Unless this is done, all the objects in the column will be interpreted as one block. Consequently, it will be impossible to customize objects individually. For example, in the second column, the "Content" text and the “cherry_button” shortcode are not separated by grid elements.</p>
			<strong>Incorrect:</strong>
<pre class="prettyprint">
[cherry_row]
	[cherry_col size_md="6"]
		image
	[/cherry_col]
	[cherry_col size_md="6"]
		Content
		[cherry_button text="Read more" url="#" style="primary" size="medium" display="inline" radius="0" centered="no" fluid="no" fluid_position="left" icon_position="left" bg_color="#2D89EF" color="#FFFFFF" min_width="0" target="self" hover_animation="self"]
	[/cherry_col]
[/cherry_row]</pre>
<p>In the visual editor, this block looks like a single object.</p>
<figure class="img-polaroid">
    <img alt="" src="img/cherryframework/third-party-plugins/moto-editor-1.png">
</figure>
<p>You should add a new row and insert “Content” and the “cherry_button” shortcode into separate columns: cherry_row_inner → cherry_col_inner.</p>
<strong>Cоrrect:</strong>
<pre class="prettyprint">
[cherry_row]
	[cherry_col size_md="6"]
		image
	[/cherry_col]
	[cherry_col size_md="6"]
		[cherry_row_inner]
			[cherry_col_inner]
				Content
			[/cherry_col_inner]
		[/cherry_row_inner]
		[cherry_row_inner]
			[cherry_col_inner size_md="12"]
				[cherry_button text="Read more" url="#" style="primary" size="medium" display="inline" radius="0" centered="no" fluid="no" fluid_position="left" icon_position="left" bg_color="#2D89EF" color="#FFFFFF" min_width="0" target="self" hover_animation="self"]
			[/cherry_col_inner]
		[/cherry_row_inner]
	[/cherry_col]
[/cherry_row]</pre>
<p>Now each of the objects can be selected and customized separately in the visual editor.</p>
<figure class="img-polaroid">
    <img alt="" src="img/cherryframework/third-party-plugins/moto-editor-2.png">
</figure>
		</li>
		<li><p>Using Inner-Row. The following structure should be kept: row → col → row_inner → col_inner.</p>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		[cherry_row_inner]
			[cherry_col_inner]
				Content 1
			[/cherry_col_inner]
			[cherry_col_inner]
				Content 2
			[/cherry_col_inner]
		[/cherry_row_inner]
	[/cherry_col]
[/cherry_row]</pre>			
		<p>Here is a nesting example (breaking one column into two):</p>
<pre class="prettyprint">
[cherry_row]
	[cherry_col]
		[cherry_row_inner]
			[cherry_col_inner]
				Content 1
			[/cherry_col_inner]
			[cherry_col_inner]
				Content 2
			[/cherry_col_inner]
		[/cherry_row_inner]
	[/cherry_col]
[/cherry_row]</pre>			
		</li>
		<li><p>Using the cherry_box shortcode.</p>
		<p>The cherry_box shortcode has to be placed into row → col. Inside the shortcode, you can use row_inner → col_inner.</p>
<pre class="prettyprint">
[cherry_row]
	[cherry_col size_md="12"]
		[cherry_box preset="primary" bg_color="#a9e05b"]
			[cherry_row_inner]
				[cherry_col_inner size_md="4"]
					Column content 1
				[/cherry_col_inner]
				[cherry_col_inner size_md="4"]
					Column content 2
				[/cherry_col_inner]
				[cherry_col_inner size_md="4"]
					Column content 3
				[/cherry_col_inner]
			[/cherry_row_inner]
		[/cherry_box]
	[/cherry_col]
[/cherry_row]</pre>		
<p>If "cherry_box" wrapped in a grid is placed into row_inner, you can't use another row_inner inside of it.</p>	
		</li>
		<li><p>The number of columns in a row should not exceed twelve (the default value).</p></li>
	</ol>