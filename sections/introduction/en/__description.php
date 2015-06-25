﻿<h2 class="item1"><i class="icon-info-sign"></i> Introduction</h2>
		<p>Thank you for purchasing a WordPress template. This documentation consists of several parts and covers the entire process of installing and setting up a WordPress website starting from scratch.</p>

		<div id="wordpress_cms_desc">
			<h3>What is WordPress CMS?</h3>
			<p>WordPress is a free open-source blogging tool and content management system (CMS) based on PHP and MySQL. With its help you can create and administrate websites or powerful on-line applications without possessing any special technical skills or knowledge.  Due to its ease of use and flexibility WordPress has become the most popular platform for website development. <a href="http://wordpress.org/about/" target="_blank">Learn More</a></p>
		</div>

		<div id="wordpress_template_desc">
			<h3>What is a WordPress Template?</h3>
			<p>A WordPress template is a theme for the WordPress CMS platform. You can easily change your website appearance by installing a new WordPress template in a few easy steps. Despite its simplicity, a WordPress template contains all the necessary source files that can be altered the way you need.</p>
		</div>

		<div id="file_structure">
			<h4>Template Structure</h4>
			<p>The template package includes several folders. Let's check what's inside:</p>
			<ul>
				<li></li>
			</ul>
			<ul class="files_structure">

				<li class="folder"><i class="fa fa-folder"></i> <b>documentation</b><small class="muted"> - contains documentation.</small>
					<ul>
						<li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - the main documentation file that you are reading at the moment :)</small></li>
					</ul>
				</li>

				<li class="folder"><b>screenshots</b><small class="muted"> - contains screen-shots of the template. However, they are not required to edit the template.</small></li>

				<li class="folder"><b>sources.zip</b><small class="muted"> - contains theme source files.</small>
					<ul>
						<li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> -	contains Adobe Photoshop source files (.psd).</small></li>
					</ul>
				</li>

				<li class="folder"><i class="fa fa-folder"></i> <b>theme</b><small class="muted"> - contains WordPress theme files.</small>
					<ul>
						<li class="file"><i class="fa fa-file"></i> CherryFramework.zip<small class="muted"> - archive with the Cherry Framework theme. Contains all theme files. It must be installed through WordPress extension manager.</small></li>
						<li class="file"><i class="fa fa-file"></i> theme####.zip<small class="muted"> - archive with the theme (child theme). Contains all theme files. </small> <small class="muted">It must be installed through WordPress extension manager.</small></li>
						<li class="folder"><i class="fa fa-folder"></i> sample_data<small class="muted"> - contains the files that make the WordPress website look like our live demo.</small>
							<ul>
								<li class="file"><i class="fa fa-file"></i> sample_data.xml<small class="muted"> - contains all template sample data (posts, pages, categories, etc).</small></li>
								<li class="file"><i class="fa fa-file"></i> widgets.json<small class="muted"> - contains widgets settings.</small></li>
								<li class="file"><i class="fa fa-file"></i> various images and media files.<small class="muted"></small></li>
							</ul>
						</li>
						<li class="folder"><i class="fa fa-folder"></i> manuall_install<small class="muted"> - contains files that make the WordPress website look like our live demo.</small>
							<ul>
								<li class="file"><i class="fa fa-folder"></i> uploads<small class="muted"> - contains theme images.</small></li>
								<li class="file"><i class="fa fa-file"></i> theme#####.sql<small class="muted"> - database file (contains theme content).</small></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="file"><i class="fa fa-file"></i> license.txt<small class="muted"> - contains license information.</small></li>
				<li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - contains links to download fonts used in the template.</small></li>
				<li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - instructions on how to extract source files.</small></li>
			</ul>
		</div>

		<div id="prepare">
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
					<p>In case you already have a hosting server, you need to check whether it is compatibile with <a href="http://wordpress.org/about/requirements/" target="_blank"> WordPress hosting requirements </a>, in other words, whether you can host a WordPress website with it.</p>
					
					<p>If your hosting server meets WordPress requirements you should not have any difficulties with Cherry Framework 4.</p>

					<p>You can also install WordPress on your PC or laptop through a local server. You can use the next software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as regular software.</p>
					<p>These tutorials will help you set up the local server:</p>
					<ul class="list-2">
						<li><i class="icon-play-circle "></i><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
					<li><i class="icon-play-circle "></i><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
					<li><i class="icon-play-circle "></i><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
				</ul>
		</div>