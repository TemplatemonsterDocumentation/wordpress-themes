<h3>Cherry Shortcodes Template Editor</h3>

<p><a href="https://github.com/CherryFramework/cherry-shortcodes-templater" target="_blank">Cherry Shortcode Template Editor</a> plugin allows to create unique shortcodes templates.</p>

<ol class="index-list">
    <li>Log into the WordPress dashboard.</li>
    <li>Click the <strong>Appearance</strong> tab.</li>
    <li>Click <strong>Shortcode Template Editor</strong>.</li>
</ol>

<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-panel.png" alt=""></figure>

<p>If you did not create any shortcode templates, you will see the welcome message only.</p>
<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-first.png" alt=""></figure>

<p>First, choose the necessary shortcode and click <strong>Add new</strong>.</p>
<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-start.png" alt=""></figure>

<p>Now you can create a new template based on the default one. It will get a name with an ordinal prefix and
   shortcode name <strong>[Shortcode Name][N]</strong>, e.g. <strong>post_1</strong>.
   The shortcode template name will be displayed in the list and in the visual editor title. The template will be
   physically stored in the \wp-content\uploads\templates\shortcodes\shortcodes_name\*-N.tmpl directory.</p>
<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-new-template.png" alt=""></figure>

<p>You can rename, copy and delete the template. While copying, <strong>Duplicate</strong> the template. It will
   get a name with an ordinal prefix (by analogy with the new template) but with the structure of the current
   template instead of the default template.</p>
<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-edit.png" alt=""></figure>

<p>Shortcode template editor allows you to create your own markup, display necessary <strong>Macros</strong> and
   set up display parameters in some of them. For example, clicking the <strong>Content</strong> button, you
   will generate the <strong>%%CONTENT%%</strong> macro which will display post content on the website.</p>
<figure class="img-polaroid"><img src="img/wordpress/1shortcode-editor-making.png" alt=""></figure>