<h3>Contact form 7</h3>

<p><a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7</a> plugin can manage multiple contact forms. It also lets you customize the form and the mail contents flexibly with simple markup.</p>


<h4>Displaying a Form</h4>

<p>Let’s start with displaying a contact form on your page. First, open the <strong>"Contact -> Contact Forms"</strong> menu in your WordPress administration panel.</p> 
<p>You can manage multiple contact forms there.</p>
<figure class="img-polaroid">
    <img alt="" src="img/cherryframework/third-party-plugins/contact-form-0.png">
</figure>


<p>Right after the installation of the Contact Form 7 plugin, you’ll see a default form named <strong>"Contact form 1"</strong> and a code that will look  like this:</p>
<pre class="prettyprint">[contact-form-7 id="1234" title="Contact form 1"]</pre>

<p>Copy this code. Then open "Edit menu" (<strong>'Pages -> Edit'</strong>) of the page where you wish to place the contact form. A popular practice is creating a page named "Contact" for the contact form page. Paste the code you've copied into the contents of the page.</p>

<p>Now your contact form setup is complete. Your site visitors can now find the form and start submitting the messages to you.</p>

<p>Next, let’s see how you can customize the form and mail content.</p>

<h4>Customizing a Form</h4>
<p>Title for this contact form(<strong>1</strong>). This title is just a label for a contact form and is used only for administrative purposes. You can use any title you like, e.g. “Job Application Form,” “Form for Event 2016/01/01″ and so on.</p>

<p>Shortcode for this contact form (<strong>2</strong>). Copy this code and paste it into your post, page or text widget where you want to place this contact form.</p>
<figure class="img-polaroid">
    <img alt="" src="img/cherryframework/third-party-plugins/contact-form-1.png">
</figure>


<h5>Form Tab</h5>

<p>Form editing field (<strong>4</strong>). You can customize the form content in this section using HTML and <a href="http://contactform7.com/tag-syntax/#form_tag" target="_blank">form-tags</a>. Line breaks and blank lines in this field are automatically formatted with &lt;br/&gt; and &lt;p&gt; HTML tags.</p>

<p>Tag generators (<strong>3</strong>). By using these tag generators, you can generate form-tags even without any particular skills.</p>

<p>For more information about form-tags, see <a href="http://contactform7.com/tag-syntax/"  target="_blank">How Tags Work</a>.</p>

<h5>Mail Tab</h5>

<p>You can edit the mail template for the mail which is sent in response to a form submission. You can use <a href="http://contactform7.com/tag-syntax/#mail_tag"  target="_blank">mail-tags</a> in these fields.</p>

<p>An additional mail template is also available. It is called Mail(2) and its content can differ from the primary Mail template. </p>

<p>For more information, see <a href="http://contactform7.com/setting-up-mail/"  target="_blank">Setting Up Mail</a>.</p>

<h5>Messages Tab</h5>

<p>You can edit the messages that are used for various situations, including “Validation errors occurred,” “Please fill in the required field,” etc.</p>

<p>Note that only plain text is available here. HTML tags and entities are not allowed in the message fields.</p>

<h5>Additional Settings Tab</h5>
<p>You can add customization code snippets here. See <a href="http://contactform7.com/additional-settings/"  target="_blank">Additional Settings</a> for more details.</p>