		<article id="manual-install">
			<h3>Manual installation</h3>
			<p>If for some reason installation using Cherry Wizard is not an option you can install Cherry Framework and theme manually.</p>

			<h4>Install Cherry Framework</h4>			
			<ol>
				<li>Download <a href="https://github.com/CherryFramework/cherryframework4/archive/master.zip">Cherry Framework 4</a></li>				
				<li>Open WordPress admin panel and go to "<b>Appearance -> Themes</b>" section.</li>
				<li>Click "<b>Add new</b>" button and click "<b>Upload theme</b>".</li>
				<li>Upload Cherry Framework 4 package.</li>				
			</ol>

			<h4>Install Cherry Theme</h4>
			<ol>
				<li>Download theme using link at the template delivery page. Check your email account for template delivery email.</li>
				<li>Open WordPress admin panel and go to "<b>Appearance -> Themes</b>" section.</li>
				<li>Upload Cherry theme package.</li>
				<li>Activate Cherry theme.</li>
			</ol>

			<p>If you have difficulties installing theme through WordPress admin panel you can upload it through FTP File Manager. </p>
			<ol>
				<li>Unpack <strong>CherryFramework.zip</strong> archive and <strong>theme####.zip</strong> archive on your local computer (right-click each .zip file, choose <strong>Unzip	to… CherryFramework</strong> and <strong>theme####</strong>, after that you will see 2 folders: CherryFramework и theme####).		</li>
				<li>Upload <strong>CherryFramework</strong> and <strong>theme### </strong> folders into <strong>/wp-content/themes/</strong> directory on FTP server.</li>
				<li>Log into Wordpress dashboard (add /wp-admin after domain name in browser address bar).</li>
				<li>Click <strong>Appearance</strong> > <strong>Themes</strong> .</li>
				<li>Then click <strong>Available Themes</strong>, find<strong>theme####</strong> an activate it clicking <strong>Activate</strong> button.</li>
			</ol>

			<h4>Install Cherry Plugins</h4>
			<p>To make Cherry based website fully functional you need to install all required plugins. Plugins provide additional functionality to default WordPress engine.</p>

			<p>To install Cherry Plugins please do the following:</p>
			<ol>
				<li>Open WordPress admin panel.</li>
				<li>Go to "<b>Plugins > Add New</b>".</li>
				<li>Click "<b>Upload Plugin</b>" button.</li>
				<li>Search for plugins in your downloaded template package in the "<b>source</b>" directory.</li>
				<li>When you have all plugins uploaded you need to activate them.</li>
				<li>Go to Plugins section and click Activate links under each plugin.</li>
			</ol>

			<h4>Install Sample Data</h4>
			<p>To make your theme appear as at the template live demo please install sample data. </p>
			<ol>
				<li>Copy "<strong>uploads</strong>" folder	(you can find it in <strong> theme/manual_install/</strong> template folder) into <strong> /wp-content/ </strong> folder on FTP server.</li>
				<li>Open <strong>theme####.sql</strong> file (located in	<strong>theme/manual_install/</strong> folder) using any code editor(Recommended software - Dreamweaver или Notepad) and change all lines with  "<strong>your_website_url_here</strong>" to your website URL via <strong>Find and Replace</strong>	(hot keys - Ctrl+H). E.g.: http://www.mywebsite.com</li>
				<li>There should be no forward slash "/" at the end of the URL, it also should start with http://www.</li>
				<li>Save changes, close file.</li>
				<li>Now you can import this file through <strong>phpMyAdmin</strong> or another database management tool.</li>
			</ol>

			<p>Congratulations, now you have completely installed Cherry Theme. </p>
		</article>