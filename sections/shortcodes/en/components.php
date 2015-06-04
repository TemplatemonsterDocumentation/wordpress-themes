		<article id="components">
			<h3>Components</h3>

			<h4>Tab</h4>
			<p>Displays tab</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_tab.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_tab title</span><span class="pun">=</span><span class="str">"Tab title"</span><span class="pln"> disabled</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> anchor</span><span class="pun">=</span><span class="str">"http://example.com/page-url#Hello"</span><span class="pln"> url</span><span class="pun">=</span><span class="str">"http://example.com"</span><span class="pln"> target</span><span class="pun">=</span><span class="str">"self"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_tab</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>title:</strong> - tab title </li>
					<li><i class="fa fa-angle-right"></i> <strong>disabled:</strong> - enable/disable tab</li>
					<li><i class="fa fa-angle-right"></i> <strong>anchor:</strong> - unique tab anchor</li>
					<li><i class="fa fa-angle-right"></i> <strong>url:</strong> - tab URL</li>
					<li><i class="fa fa-angle-right"></i> <strong>link target:</strong> - defines whether link will be open in the new or in the parent window (tab)</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Spoiler</h4>
				<p>Displays spoiler</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_spoiler.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_spoiler title</span><span class="pun">=</span><span class="str">"spoiler name"</span><span class="pln"> open</span><span class="pun">=</span><span class="str">"yes"</span><span class="pln"> style</span><span class="pun">=</span><span class="str">"simple"</span><span class="pln"> icon</span><span class="pun">=</span><span class="str">"chevron"</span><span class="pln"> anchor</span><span class="pun">=</span><span class="str">"http://example.com/page-url#Hello"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom_class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_spoiler</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>title:</strong> - spoiler title</li>
					<li><i class="fa fa-angle-right"></i> <strong>open:</strong> - spoiler content is visible/hidden by default</li>
					<li><i class="fa fa-angle-right"></i> <strong>style:</strong> - spoiler style</li>
					<li><i class="fa fa-angle-right"></i> <strong>icon:</strong> - spoiler icon</li>
					<li><i class="fa fa-angle-right"></i> <strong>anchor:</strong> - unique tab anchor</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Accordion </h4>
				<p>Displays spoiler container</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_accordion.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_accordion</span><span class="pun">]</span><span class="pun">[</span><span class="pln">su_spoiler</span><span class="pun">]</span><span class="str">Content1</span><span class="pun">[</span><span class="pln">/su_spoiler</span><span class="pun">]</span><span class="pun">[</span><span class="pln">su_spoiler</span><span class="pun">]</span><span class="str">Content2</span><span class="pun">[</span><span class="pln">/su_spoiler</span><span class="pun">]</span><span class="pun">[</span><span class="pln">su_spoiler</span><span class="pun">]</span><span class="str">Content3</span><span class="pun">[</span><span class="pln">/su_spoiler</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_accordion</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Counter</h4>
				<p>Displays animated counter</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_counter.png"></figure>
			<div class="row">
				<div class="grid_5">
					<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_counter counter_value</span><span class="pun">=</span><span class="str">"2000.00"</span><span class="pln"> delay</span><span class="pun">=</span><span class="str">"30"</span><span class="pln"> time</span><span class="pun">=</span><span class="str">"2000"</span><span class="pln"> before_content</span><span class="pun">=</span><span class="str">"&lt;section class=&#39;before&#39;&gt;"</span><span class="pln"> after_content</span><span class="pun">=</span><span class="str">"&lt;/ section&gt;"</span><span class="pln"> class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span></pre>
				</div>
				<div class="grid_7">
				<ul>
					<li><i class="fa fa-angle-right"></i> <strong>value:</strong> - counter value</li>
					<li><i class="fa fa-angle-right"></i> <strong>counter delay:</strong> - counter delay value</li>
					<li><i class="fa fa-angle-right"></i> <strong>speed time:</strong> - counter animation speed</li>
					<li><i class="fa fa-angle-right"></i> <strong>before content:</strong> - content displayed before counter</li>
					<li><i class="fa fa-angle-right"></i> <strong>after content:</strong> - content displayed after counter</li>
					<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>

			<h4>Lazy Load Effect</h4>
			<p><strong>Description:</strong> This shortcode allows you to display the appearance of content items smoothly when scrolling the page.</p>
			<figure class="img-polaroid"><img alt="" src="img/wordpress/shortcode_lazy_load.png"></figure>
			<div class="row">
				<div class="grid_5"><pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">su_lazy_load_effect start_position</span><span class="pun">=</span><span class="str">"left"</span><span class="pln"> out_rotation</span><span class="pun">=</span><span class="str">"180"</span><span class="pln"> flip_x</span><span class="pun">=</span><span class="str">"220"</span><span class="pln"> flip_y</span><span class="pun">=</span><span class="str">"140"</span><span class="pln"> pivot</span><span class="pun">=</span><span class="str">"top_left"</span><span class="pln"> scale</span><span class="pun">=</span><span class="str">"4"</span><span class="pln"> opacity</span><span class="pun">=</span><span class="str">"0.5"</span><span class="pln"> easing</span><span class="pun">=</span><span class="str">"ease-in-out-cubic"</span><span class="pln"> animation_speed</span><span class="pun">=</span><span class="str">"2"</span><span class="pln"> animation_duration</span><span class="pun">=</span><span class="str">"1"</span><span class="pln"> custom_class</span><span class="pun">=</span><span class="str">"custom-class"</span><span class="pun">]</span><span class="pun">[</span><span class="pln">/su_lazy_load_effect</span><span class="pun">]</span></pre></div>
				<div class="grid_7">
					<ul>
					<li><i class="fa fa-angle-right"></i> <strong>start position:</strong> - element position at the animation start</li>
					<li><i class="fa fa-angle-right"></i> <strong>out rotation:</strong> - initial element angle at the animation start (min -360° max 360°)</li>
					<li><i class="fa fa-angle-right"></i> <strong>flip X:</strong> - initial element angle flip at the animation start (<strong>X-axis</strong> rotation min -360° max 360°)</li>
					<li><i class="fa fa-angle-right"></i> <strong>flip Y:</strong> - initial element angle flip at the animation start (<strong>Y-axis</strong> rotation min -360° max 360°)</li>
					<li><i class="fa fa-angle-right"></i> <strong>pivot:</strong> - element rotation pivot</li>
					<li><i class="fa fa-angle-right"></i> <strong>scale:</strong> - element scale value (min: 0; max 10;)</li>
					<li><i class="fa fa-angle-right"></i> <strong>opacity:</strong> - element opacity value (min - 0; max 1;)</li>
					<li><i class="fa fa-angle-right"></i> <strong>easing:</strong> - animation easing effect</li>
					<li><i class="fa fa-angle-right"></i> <strong>animation speed:</strong> - animation speed in seconds</li>
					<li><i class="fa fa-angle-right"></i> <strong>animation delay:</strong> - delay before next element appears (can be used in case you have 22-3 elements in a row and you want to animate them one by one)</li>
					<li><i class="fa fa-angle-right"></i> <strong>custom_class:</strong> - shortcode custom class</li>
				</ul>
				</div>
			</div>
		</article>
