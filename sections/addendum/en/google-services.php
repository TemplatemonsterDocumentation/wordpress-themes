
	<h3>Loading data from Google servers</h3>

     <p>Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts. To resolve these issues, please do the following: </p>

<h5>If you come across an error "Can not load Google Fonts:"
please do the following </h5>
	<p>Open function.php file in your theme and add the following:</p>
	<pre class="prettyprint">
add_filter( 'cherry_google_fonts_cdn', 'cherry_china_fonts_url' );
function cherry_china_fonts_url( $url ) {
    return '//china.fonts.url.com/';
}</pre>
