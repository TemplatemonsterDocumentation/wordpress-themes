<h3>Cherry Mailer</h3>

<p><a href="https://github.com/CherryFramework/cherry-mailer">Cherry Mailer</a> - the plugin is designed to manage  mailing list subscriptions and allows to implement newsletter subscription for visitors.</p>


<h5>Plugin settings:</h5>

	<ul class="marked-list">
		<li>
			<dl class="inline-term">
				<dt>Api Key (DISCONNECT)</dt>
				<dd>
					Set your Api Key - API stands for application programming interface. It can be helpful to think of the API as a way for different apps to talk to each other.
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>List</dt>
				<dd>
					Subscribe list id - Each MailChimp list has a unique List ID that integrations, plugins, and widgets may require to connect and transfer subscriber data.
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Confirmation</dt>
				<dd>
					Email for confirmation
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Placeholder</dt>
				<dd>
					Default placeholder for email input
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Button</dt>
				<dd>
					Default submit button text
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Success message</dt>
				<dd>
					Default success message
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Fail message</dt>
				<dd>
					Default fail message
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Warning message</dt>
				<dd>
					Default warning message
				</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dd>
					Generate Mailer shortcode button
				</dd>
			</dl>
		</li>
	</ul>


<figure class="img-polaroid"><img src="img/cherryframework/plugins/mailer-option-panel.png" alt=""></figure>

<p>Paste this shortcode to page content section, where you want to use a subscription.</p>

	<pre class="prettyprint">[cherry_mailer placeholder="Enter your email" button_text="Subscribe" success_message="Subscribed successfully" fail_message="Subscribed failed" warning_message="Email is incorect" popup_is="true"]</pre>



<h5>Subscribe form</h5>

<figure class="img-polaroid"><img src="img/cherryframework/plugins/mailer-subscribe-form.png" alt=""></figure>