
	<h3>Icon Trics</h3>

	<h4>Editing font icons</h4>
	<p>Font icons can be added using Shortcode interface (Insert shortcode). Shortcodes that provide the font icon option include an Icon picker element. Using this option you can preview and select the required icon.</p>
	<p>Font icon script is added to the child-theme, that is why their version is not getting updated. The only exception is the iconic FontAwesome –  it can be updated along with the Cherry Shortcodes plugin.</p>
	<p>You can also add some external icons from Flaticon packages following the steps below:</p>

	<ol class="index-list">
		<li>
				<p>download font source code with the icons and upload them to  the <strong>"wp-content/themes/themeXXXXX/assets/fonts"</strong> folder on your server.</p>
		</li>
		<li>
			<p>
				add the following code to the <strong>"wp-content/themes/themeXXXXX/functions.php" file:</strong>
			</p>
			<pre class="prettyprint">
add_filter( ‘cherry_custom_font_icons’, ‘themeXXXXX_custom_font_icons’ );
function themeXXXXX_custom_font_icons($icons) {
		$icons[‘themeXXXXX_material_icon’] = get_stylesheet_directory_uri() . ‘/assets/fonts/';
		return $icons;
}
			</pre>
		</li>
	</ol>