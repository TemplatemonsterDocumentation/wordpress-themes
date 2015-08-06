<h3>Monstroid change log</h3>

<h4>Monstroid version 1.0.2</h4>

<p><strong>Plugin Updates:</strong> Updated MotoPress Editor to version 1.6.2</p>
<p><strong>heme Updates:</strong> Performed theme styling fixes and updates. </p>
<p><strong>Fixed:</strong></p>
<ul  class="marked-list">
	<li>hovers</li>
    <li>slider styling issues</li>
    <li>totop button behavior</li>
    <li>box presets</li>
    <li>grid layout</li>
    <li>header layout bug in Chrome</li>
    <li>form layous</li>
    <li>home business page layout on mobile devices</li>
    <li>charts on home business page</li>
    <li>menu on mobile devices</li>
    <li>page title on mobile devices Updated: dynamic-style.css, main.less</li>
</ul>

<p>Added check for enabled breadcrumbs to monstroid_add_pagetitle_metabox() function Updated functions.php</p>

<p><strong>Improvements:</strong></p>

<ul  class="marked-list">
	<li>site frontend is loading faster now and became more reliable</li>
    <li>performed .jpg and .png image optimization. Saved over 50 mb in sample data and theme images.</li>
    <li>reduced number if image thumbnail sizes</li>
    <li>run special cache settings</li>
    <li>optimized wizard installation steps. Intallation is more stable now on low-configuration hosting servers</li>
    <li>optimized database queries in the following plugins:
        <ul  class="marked-list">
			<li>testimonials</li>
	        <li>blog-layouts</li>
	        <li>services</li>
	        <li>sidebar-manager</li>
	        <li>shortcodes</li>
	        <li>team</li>
	    </ul>
    </li>
</ul>



<h4>Monstroid version 1.0.1</h4>

<h5>Extended change log</h5>
<ul class="log-list">
	<li>
		<strong>Updated totop button script</strong>
   		<p>Added animation for totop button click Modified function.php file</p>
	</li>
	<li>
		<strong>WPML language switcher fix</strong>
   		<p>Updated monstroid_wpml_add_button function condition Modified function.php file</p>
	</li>
	<li>
		<strong>Added styles for motopress slider</strong>
   		<p>Enqueued motopress /assets/css/shortcodes-slider-styles.css' file. Modified function.php file</p>
	</li>
	<li>
		<strong>Renamed WooCommerce function</strong>
   		<p>Renamed is_realy_woocommerce_page() function to cherry_woocommerce_is_really_woocommerce_page() for better logic structuring. Modified files: includes/woocommerce-functions.php menu/primary.php templates/wrapper-footer.php templates/wrapper-header.php</p>
	</li>
	<li>
		<strong>Updated blog styling</strong>
   		<p>Fixed for blog grod layout Modified files: blog.scss, main.scss</p>
	</li>
	<li>
		<strong>Main navigation fix</strong>
   		<p>Modified primary navigation functions to get correct menu display on shop pages. Modified: menu/primary.php</p>
	</li>
	<li>
		<strong>Main navigation styling update</strong>
   		<p>Fixed styling for Cherry Mega Menu navigation. Modified assets/scss/shortcodes.scss file.</p>
	</li>
	<li>
		<strong>Removed unused code from author bio shortcode template</strong>
   		<p>Modified content/author-bio.tmpl file</p>
	</li>
	<li>
		<strong>Updated text domain for Monstroid labels</strong>
   		<p>Replace text domain 'cherry' with 'monstroid' to enable correct translations. Modified files: includes/blog-functions.php includes/class-cherry-wc-product-video-tab.php includes/shortcodes-functions.php init/config/sidebars.php init/config/static-areas.php blog-layouts .tmpl files</p>
	</li>
	<li>
		<strong>Added general section key to WPML configuratin file to enable correct WPML localization.</strong>
   		<p>Modified wpml-config.xml file.</p>
	</li>
	<li>
		<strong>Update for WooCommerce image carousel</strong>
   		<p>Added correct thumbnails pagination Modified assets/js/woocommerce-script.js</p>
	</li>
	<li>
		<strong>Fixes for WooCommerce listing images styling</strong>
  		<p>Modified assets/scss/woo-commerce.scss</p>
	</li>
	<li>
		<strong>Added WooCommerce carousel images dynamic styles</strong>
   		<p>Modified init/css/dynamic-style.css</p>
	</li>
	<li>
		<strong>Fixes for WooCoommerce form fields</strong>
   		<p>Modifed form input styling for WooCommerce pages. Modified assets/scss/woo-commerce.scss</p>
	</li>
	<li>
		<strong>Replaced media queries width values with dynamic variables.</strong>
   		<p>Modified assets/scss/woo-commerce.scss</p>
	</li>
	<li>
		<strong>Fix for blog layout grid resize.</strong>
   		<p>Modified assets/scss/blog.scss</p>
	</li>
	<li>
		<strong>Fix for responsive header</strong>
   		<p>Header fix for correct display on mobile devices Modified assets/scss/shortcodes.scss</p>
	</li>
	<li>
		<strong>WooCommerce login form fix on mobile devices</strong>
   		<p>Modified woo-commerce.scss</p>
	</li>
	<li>
		<strong>Added yith_wcwl_wishlist_page_id key to cherry_woocommerce_is_really_woocommerce_page() function to make YITH wishlist page be considered as WooCommerce page.</strong>
   		<p>Modified: includes/woocommerce-functions.php</p>
	</li>
	<li>
		<strong>Renamed languages/blank.pot to languages/monstroid.pot for logic structuring</strong>
   		<p>Menu icon update</p>
	</li>
	<li>
		<strong>Replace fa-chevron-right icon with fa-bars. Added mega-menu-direction-vertical styling. Fixes for menu items styling. Modified assets/scss/menu.scss and assets/scss/logo.scss</strong>
   		<p>Replace menu icon class in menu scripts.</p>
	</li>
	<li>
		<strong>Modified assets/js/theme-script.js</strong>
   		<p>WooCoomerce compare table style updates</p>
	</li>
	<li>
		<strong>CSS fixes for table.compare-list Modified assets/scss/woo-commerce.scss file</strong>
   		<p>Changed background color for WooCoomerce product images.</p>
	</li>
	<li>
		<strong>Changed background color for div.product .product-thumbnails_list img, div.product .product-large-image img Modified /init/css/dynamic-style.css</strong>
   		<p>Updates for menu behaviour on mobile devices</p>
	</li>
	<li>
		<strong>Cangeв main navigation behaviour on mobile screen resolutions when Mega Menu option is enabled. Modified /assets/js/theme-script.js assets/js/min/theme-script.min.js</strong>
   		<p>Added 404 page styling</p>
	</li>
	<li>
		<strong>Added CSS styles for .error-404 class Modified /assets/scss/layout.scss</strong>
   		<p>Added new SCSS mixins</p>
	</li>
	<li>
		<strong>Added mixins: input-mixin-inset1, price-mixin Added placeholder selectors: %clearfix, %quantity-input, %button-styles, %small-button</strong>
   		<p>Modified assets/scss/monstroid-mixins.scss</p>
	</li>
	<li>
		<strong>Updated gallery circle script configuration.</strong>
   		<p>Added circle icons AJAX initialization. Modified assets/js/circle-thumbnails.js</p>
	</li>
	<li>
		<strong>Fixes for portfolio styling on mobile devices</strong>
   		<p>Modified assets/scss/portfolio.scss</p>
	</li>
	<li>
		<strong>Updatesd for WPML language selector style</strong>
   		<p>Modified shortcodes.scss</p>
	</li>
	<li>
		<strong>Modified ToTop button behaviour and conditions</strong>
   		<p>Modified functions.php</p>
	</li>
</ul>
<h5>Updated Files</h5>
<ul  class="marked-list">
	<li>default-options/default.options</li>
    <li>default-options/statics_default.options</li>
    <li>rtl.css</li>
    <li>wpml-config.xml</li>
    <li>function.php</li>
    <li>includes/required-plugins.php</li>
    <li>includes/shortcodes-functions.php</li>
    <li>includes/blog-functions.php</li>
    <li>includes/portfolio-functions.php</li>
    <li>includes/class-cherry-wc-product-video-tab.php</li>
    <li>includes/woocommerce-functions.php</li>
    <li>init/config/menus.php</li>
    <li>init/css/dynamic-style.css</li>
    <li>blog-layouts (dir)</li>
    <li>content (dir)</li>
    <li>assets/js/equal_height.js</li>
    <li>assets/scss/shortcodes.scss</li>
    <li>assets/scss/blog.scss</li>
    <li>assets/scss/main.scss</li>
    <li>assets/scss/woo-commerce.scss</li>
    <li>assets/js/woocommerce-script.js</li>
    <li>assets/js/min/woocommerce-script.min.js</li>
    <li>assets/js/woocommerce-script.js</li>
    <li>init/statics/footer-shop-sidebars.php</li>
    <li>init/statics/header-shop-main-menu.php</li>
    <li>init/statics/header-shop-menu.php</li>
    <li>init/statics/header-shop-search-cart.php</li>
    <li>admin/class-monstroid-pagetitleblock-meta.php</li>
    <li>menu/primary.php</li>
    <li>content/author-bio.tmpl</li>
    <li>includes/blog-functions.php</li>
    <li>includes/class-cherry-wc-product-video-tab.php</li>
    <li>includes/shortcodes-functions.php</li>
    <li>init/config/sidebars.php</li>
    <li>init/config/static-areas.php</li>
    <li>languages/blank.pot</li>

</ul>

