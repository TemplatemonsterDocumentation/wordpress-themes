
	<h3>Приемы с иконками</h3>

	<h4>Редактирование шрифтовых иконок</h4>
	<p>Шрифтовые иконки вставляются через интерфейс для вставки шорткодов (Insert shortcode). В шорткодах, где предусмотрена возможность вставки шрифтовых иконок есть элемент управления - <strong>Icon picker</strong>. С его помощью вы можете визуально выбрать нужную иконку</p>
	<p>Шрифтовые иконки статически подключаются в дочерней теме, поэтому их версия не обновляется.  Исключением являются только иконки шрифта FontAwesome – он может обновляться вместе с плагином Cherry Shortcodes.</p>
	<p>Вы так же можете добавлять свои иконки из наборов Flaticon следуя данной инструкции:</p>

	<ol class="index-list">
		<li>
				<p>скачайте исходные файлы шрифта с иконками <strong>"wp-content/themes/themeXXXXX/assets/fonts"</strong> и загрузите их на сервер в папку.</p>
		</li>
		<li>
			<p>
				добавьте следующий код в файле <strong>"wp-content/themes/themeXXXXX/functions.php" file:</strong>
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