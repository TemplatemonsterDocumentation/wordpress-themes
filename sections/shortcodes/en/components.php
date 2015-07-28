<h3>Components</h3>

<h4>Tab</h4>

<p>Displays tab</p>

<ul class="marked-list">
    <li><strong>title:</strong> – tab title</li>
    <li><strong>disabled:</strong> – enable/disable tab</li>
    <li><strong>anchor:</strong> – unique tab anchor</li>
    <li><strong>url:</strong> – tab URL</li>
    <li><strong>link target:</strong> – defines whether the link will open in the new or in the parent window (tab)</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_tabs style="default" active="1" vertical="no"][cherry_tab title="Title 1"]Content 1[/cherry_tab] [cherry_tab title="Title 2"]Content 2[/cherry_tab] [cherry_tab title="Title 3"]Content 3[/cherry_tab][/cherry_tabs]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_tab.png">
</figure>


<h4>Spoiler</h4>

<p>Displays spoiler</p>

<ul class="marked-list">
    <li><strong>title:</strong> – spoiler title</li>
    <li><strong>open:</strong> – spoiler content is visible/hidden by default</li>
    <li><strong>style:</strong> – spoiler style</li>
    <li><strong>icon:</strong> – spoiler icon</li>
    <li><strong>anchor:</strong> – unique tab anchor</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_spoiler open="yes" class="spoiler-class"]Hidden content[/cherry_spoiler]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_spoiler.png">
</figure>


<h4>Accordion </h4>

<p>Displays spoiler container</p>

<ul class="marked-list">
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_accordion class="accordion-class"][cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler] [cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler] [cherry_spoiler title="Spoiler Title"]Content[/cherry_spoiler][/cherry_accordion]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_accordion.png">
</figure>


<h4>Counter</h4>

<p>Displays animated counter</p>

<ul class="marked-list">
    <li><strong>value:</strong> – counter value</li>
    <li><strong>counter delay:</strong> – counter delay value</li>
    <li><strong>speed time:</strong> – counter animation speed</li>
    <li><strong>before content:</strong> – content displayed before counter</li>
    <li><strong>after content:</strong> – content displayed after counter</li>
    <li><strong>class:</strong> – shortcode custom class</li>
</ul>

<pre
    class="prettyprint">[cherry_counter counter_value="100.00" delay="10" time="1000" custom_class="counter-class"]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_counter.png">
</figure>


<h4>Lazy Load Effect</h4>

<p><strong>Description:</strong> This shortcode allows you to display the appearance of content items smoothly when
                                 scrolling the page.</p>

<ul class="marked-list">
    <li><strong>start position:</strong> – position of element at the beginning of animation</li>
    <li><strong>out rotation:</strong> – initial element angle at the beginning of animation (min -360° max 360°)</li>
    <li><strong>flip X:</strong> – initial element angle flip at the beginning of animation (<strong>X-axis</strong>
                                 rotation min -360° max 360°)
    </li>
    <li><strong>flip Y:</strong> – initial element angle flip at the beginning of animation (<strong>Y-axis</strong>
                                 rotation min -360° max 360°)
    </li>
    <li><strong>pivot:</strong> – element rotation pivot</li>
    <li><strong>scale:</strong> – element scale value (min: 0; max: 10;)</li>
    <li><strong>opacity:</strong> – element opacity value (min: 0; max: 1;)</li>
    <li><strong>easing:</strong> – animation easing effect</li>
    <li><strong>animation speed:</strong> – animation speed in seconds</li>
    <li><strong>animation delay:</strong> – delay before next element appears (can be used in case you have two or more
                                          elements in a row and you want to animate them one by one)
    </li>
    <li><strong>custom_class:</strong> – shortcode custom class</li>
</ul>

<pre class="prettyprint">[cherry_lazy_load_effect start_position="not_changed" rotation="0" flip_x="0" flip_y="0" pivot="center" scale="1" opacity="1" easing="none" speed="1" delay="0" custom_class="lazy-class"][/cherry_lazy_load_effect]</pre>

<figure class="img-polaroid">
    <img alt="" src="img/wordpress/shortcode_lazy_load.png">
</figure>