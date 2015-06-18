		<article id="components">
			<h3>Components</h3>

			<h4>Tab</h4>		
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_tab.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_tab.png">
						</a>
					</figure>					
				</div>
				<div class="grid_6">
					<p>Displays tab</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>title:</strong> - tab title </li>
						<li><i class="fa fa-angle-right"></i> <strong>disabled:</strong> - enable/disable tab</li>
						<li><i class="fa fa-angle-right"></i> <strong>anchor:</strong> - unique tab anchor</li>
						<li><i class="fa fa-angle-right"></i> <strong>url:</strong> - tab URL</li>
						<li><i class="fa fa-angle-right"></i> <strong>link target:</strong> - defines whether link will be open in the new or in the parent window (tab)</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_tabs style="default" active="1" vertical="no"][cherry_tab title="Title 1"]Content 1[/cherry_tab] [cherry_tab title="Title 2"]Content 2[/cherry_tab] [cherry_tab title="Title 3"]Content 3[/cherry_tab][/cherry_tabs]</pre>
				</div>
			</div>

			<h4>Spoiler</h4>				
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_spoiler.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_spoiler.png">
						</a>
					</figure>
				</div>
				<div class="grid_6">
					<p>Displays spoiler</p>
					<ul>
						<li><i class="fa fa-angle-rght"></i> <strong>title:</strong> - spoiler title</li>
						<li><i class="fa fa-angle-right"></i> <strong>open:</strong> - spoiler content is visible/hidden by default</li>
						<li><i class="fa fa-angle-right"></i> <strong>style:</strong> - spoiler style</li>
						<li><i class="fa fa-angle-right"></i> <strong>icon:</strong> - spoiler icon</li>
						<li><i class="fa fa-angle-right"></i> <strong>anchor:</strong> - unique tab anchor</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_spoiler open="yes" class="spoiler-class"]Hidden content[/cherry_spoiler]</pre>
				</div>
			</div>

			<h4>Accordion </h4>			
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_accordion.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_accordion.png">
						</a>
					</figure>
				</div>
				<div class="grid_6">
					<p>Displays spoiler container</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_accordion class="accordion-class"][cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler] [cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler] [cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler][/cherry_accordion]</pre>
				</div>
			</div>

			<h4>Counter</h4>						
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_counter.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_counter.png">
						</a>
					</figure>
				</div>
				<div class="grid_6">
					<p>Displays animated counter</p>
					<ul>
						<li><i class="fa fa-angle-right"></i> <strong>value:</strong> - counter value</li>
						<li><i class="fa fa-angle-right"></i> <strong>counter delay:</strong> - counter delay value</li>
						<li><i class="fa fa-angle-right"></i> <strong>speed time:</strong> - counter animation speed</li>
						<li><i class="fa fa-angle-right"></i> <strong>before content:</strong> - content displayed before counter</li>
						<li><i class="fa fa-angle-right"></i> <strong>after content:</strong> - content displayed after counter</li>
						<li><i class="fa fa-angle-right"></i> <strong>class:</strong> - shortcode custom class</li>
					</ul>
					<pre class="prettyprint">[cherry_counter counter_value="100.00" delay="10" time="1000" custom_class="counter-class"]</pre>
				</div>
			</div>

			<h4>Lazy Load Effect</h4>
			<div class="row">
				<div class="grid_6">
					<figure class="img-polaroid">
						<a href="img/wordpress/shortcode_lazy_load.png" class="pretty_image" rel="prettyPhoto[shortcodes]"><img alt="" src="img/wordpress/shortcode_lazy_load.png">
						</a>
					</figure>
				</div>
				<div class="grid_6">
					<p><strong>Description:</strong> This shortcode allows you to display the appearance of content items smoothly when scrolling the page.</p>			
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
					<pre class="prettyprint">[cherry_lazy_load_effect start_position="not_changed" rotation="0" flip_x="0" flip_y="0" pivot="center" scale="1" opacity="1" easing="none" speed="1" delay="0" custom_class="lazy-class"][/cherry_lazy_load_effect]</pre>
				</div>
			</div>
		</article>
