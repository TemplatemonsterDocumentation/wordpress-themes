<h2 class="item1"><i class="icon-info-sign"></i> General info</h2>
<article id="introduction">
	<h3>Introduction</h3>
	<p class="intro">Thank you for purchasing a Monstroid Wordpress Premium Theme. This documentation consists of several parts and covers the entire process of installing and setting up a WordPress website starting from scratch.</p>

	<h3>What is WordPress CMS?</h3>
	<p>WordPress is a free open-source blogging tool and content management system (CMS) based on PHP and MySQL. With its help you can create and administrate websites or powerful on-line applications without possessing any special technical skills or knowledge.  Due to its ease of use and flexibility WordPress has become the most popular platform for website development. <a href="http://wordpress.org/about/" target="_blank">Learn More</a></p>

	<h3>What is Monstroid Premium Theme</h3>
	<p>Monstroid is a design tool that helps you build a website with any possible content, style and complexity without the need to write a single line of code. Due to the inbuilt visual content editor anyone can build website of any level of complexity not even getting sweaty. Using this multi-purpose theme, you can build a website of any kind, business niche or style. Whether you are a pro or non-tech savvy, the whole process won’t take much of your time due to a rich set of developer-oriented features, multiple extensions and shortcodes. </p>

	<h3>Template Structure</h3>

	<p>The template package includes several folders. Let's check what's inside:</p>

	<ul class="files_structure">

		<li class="folder"><i class="fa fa-folder"></i> <strong>theme</strong><small class="muted"> - contains WordPress theme files.</small>
			<ul>
				<li class="file"><i class="fa fa-file"></i> <strong>CherryFramework.zip</strong><small class="muted"> - archive with the Cherry Framework theme. Contains all theme files. It must be installed through WordPress extension manager.</small></li>
				<li class="file"><i class="fa fa-file"></i> <strong>theme####.zip</strong><small class="muted"> - archive with the theme (child theme). Contains all theme files. </small> <small class="muted">It must be installed through WordPress extension manager.</small></li>
				<li class="folder"><i class="fa fa-folder"></i> <strong>sample_data</strong><small class="muted"> - contains the files that make the WordPress website look like our live demo.</small>
					<ul>
						<li class="file"><i class="fa fa-file"></i> <strong>sample_data.xml</strong><small class="muted"> - contains all template sample data (posts, pages, categories, etc).</small></li>
						<li class="file"><i class="fa fa-file"></i> <strong>widgets.json</strong><small class="muted"> - contains widgets settings.</small></li>
						<li class="file"><i class="fa fa-file"></i> <strong>various images and media files</strong>.<small class="muted"></small></li>
					</ul>
				</li>
				<li class="folder"><i class="fa fa-folder"></i> <strong>manual_install</strong><small class="muted"> - contains files that make the WordPress website look like our live demo.</small>
					<ul>
						<li class="file"><i class="fa fa-folder"></i> <strong>uploads</strong><small class="muted"> - contains theme images.</small></li>
						<li class="file"><i class="fa fa-file"></i> <strong>theme#####.sql</strong><small class="muted"> - database file (contains theme content).</small></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</article>
<article id="preparation">
	<h3>Preparation</h3>
	<p>Before installing a WordPress website, you need to get fully prepared. We recommend that you get the following aspects covered:</p>

	<h4>Software</h4>
	<p>Before you even start working with the WordPress template, you should download the required software. You can check the required software on the template preview page.<br>
	Requirements can alter from template to template, so we will list the most important ones:</p>
	<ol>
		<li>First of all, you will need the right software to extract files from the password protected sources_#########.zip archive. You can use WinZip 9 or a later version (if you have Windows OS) or Stuffit Expander 10 or a later version (if you have Mac OS).</li>
		<li>You might also need Adobe Photoshop. It is used to edit the source .PSD files in case you need to change the graphic design and images of the template.</li>
		<li>To edit the template source code, you can use code editors like Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
		<li>To upload files to a hosting server, you will need an FTP manager like Total Commander, FileZilla, CuteFTP, etc.</li>
	</ol>

		<h4>Hosting</h4>
		<p>As WordPress CMS is a PHP/MySQL platform, you need to have the hosting server prepared for it.</p>
		<p>In case you already have a hosting server, you need to check whether it is compatible with <a href="http://wordpress.org/about/requirements/" target="_blank"> WordPress hosting requirements </a>, in other words, whether you can host a WordPress website with it.</p>
		
		<p>Cherry Framework itself requires Apache or Nginx hosting servers with the following configuration settings:</p>
		
		<h5>Recommended Configuration</h5>

		<ol>
			<li>In <b>php.ini</b> define the following:<br>
				<ul>
					<li>'max_execution_time' => 60;</li>
					<li>'memory_limit'  => 128;</li>
					<li>'post_max_size'  => 8;</li>
					<li>'upload_max_filesize'  => 8;</li>
					<li>'max_input_time'  => 45;</li>
					<li>'file_uploads'    => 'on';</li>
					<li>'safe_mode'       => 'off';</li>
				</ul>
			</li>
			<li>in <b>.htaccess</b> file: 'php_value max_execution_time' => 60;</li>
			<li>in <b>wp-config.php</b>: 'set_time_limit' => 60;</li>
			<li>1 GB of disk space</li>
			<li>memory limit per process: 64mb (128mb or more recommended)</li>
		</ol>
		

		<h5>PHP and MySQL</h5>
		
		<p>Minimal required version of PHP is 5.2.4 and MySQL 5. PHP 5.2 is already not safe as contains critical vulnerabilities that can be used to harm your website. Some Cherry Framework extensions will not work with PHP 5.2 and require version 5.4 or later.</p>

		<p>Recommended settings are: </p>

		<ol>
			<li>PHP 5.4</li>
			<li>MySQL 5.5 or later</li>
			<li>mod_rewrite</li>
			<li>php fopen</li>
			<li>suPHP</li>
		</ol>

		<p>You can also install WordPress on your PC or laptop through a local server. You can use the next software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as regular software.</p>
		<p>These tutorials will help you set up the local server:</p>
		<ul class="list-2">
			<li><i class="icon-play-circle "></i><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
		<li><i class="icon-play-circle "></i><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
		<li><i class="icon-play-circle "></i><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
	</ul>
</article>
