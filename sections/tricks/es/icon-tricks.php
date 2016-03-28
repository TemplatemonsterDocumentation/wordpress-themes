
	<h3>Edición de iconos de fuente</h3>

	<h4>Edición de iconos de fuente</h4>
	<p>Se pueden agregar iconos de fuente utilizando la interfaz de Shortcode (Insertar shortcode). En los Shortcode, que prevé la inserción de los iconos de la fuente tiene el elemento de control - Icono selector. Con esta opción se puede obtener una vista previa y seleccionar el icono deseado.</p>
	<p>Font icon script is added to the child-theme that is why their version is not getting updated. The only exception is iconic FontAwesome –  it can be updated together with the Cherry Shortcodes plugin.</p>
	<p>You can also add external icons from Flaticon packages following the steps below:</p>

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