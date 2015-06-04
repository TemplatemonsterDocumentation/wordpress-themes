		<article id="engine-installation">
			<h3>WordPress Engine installation</h3>
			<p>Download required Wordpress version. Check required version on the template preview page in the requirements list. Make sure yo are downloading correct version.</p>
			<ol>
				<li>You can download Wordpress platform at Wordpress official website WordPress.org <a href="http://wordpress.org/download/" target="_blank"><strong>Download WordPress</strong></a>. If you need another version, follwo this link <a href="http://wordpress.org/download/release-archive/" target="_blank"><strong>Wordpress versions archive</strong></a>.				</li>
				<li>Once platform is downloaded, you'll need to unpack files. You can use any file archiver that support ZIP format to unpack <strong>ZIP</strong> file.
					<p>These tutorials will show you how to unpack archived file, if you have <a target="_blank" href="/help/unzipping-your-template.html"><strong>Windows OS (using WinZip)</strong></a> and if you have <a target="_blank" href="/help/how-unzip-template-mac.html"><strong>MAC OS (using StuffitExpander)</strong></a>.</p>
					<ul class="list-2">
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/extract-archived-files-mac-os.html">Unpacking archive (MAC OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/extract-archived-files-windows-os.html">Unpacking archive (Windows OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/downloading-and-installing-winzip.html">How to download and install WinZip</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-unzip-template-mac.html">How to unpack the template (MAC OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-unzip-template-mac.html">How to unpack the template</a><a target="_blank" href="/help/unzipping-your-template.html"> (Windows OS)</a></li>
					</ul>
				</li>
				<li>Once Wordpress platform files and folders are unpacked. you need to uplaod them to the hosting server.
					<p>You need to upload files and folders to the server into the directory <strong>PUBLIC_HTML</strong> or <strong>WWW</strong>.</p>

					<div class="box-info"><span>If you can't find PUBLIC_HTML or WWW directory on your hosting server, contact your hosting provider and specify, where do you need to upload website files.</span></div>

					<p>You can also take a look t these tutorials that contain detailed information on how to upload files to hosting server:</p>
					<ul class="list-2">
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-upload-files-server-2.html">How to upload files to server</a>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html">How to upload files to server using cPanel (WebHost Manager, WHM)</a> </li>
					</ul>
				</li>
				<li>On the next stage you need to create database for Wordpress platform.

					<p>You can create it using database management tool in the hosting cpanel (<em>usually it is PhpMyAdmin</em>).</p>

					<p>With the help of phpMyAdmin you can create a new database in 3 simple steps (check slides below):</p>

					<ol class="list">
										<li>Click Database button at the top navigation menu to see databases list.</li>
										<li>Enter database name in the "Create new database" field.</li>
										<li>Click Create button.</li>
										</ol>
										<br>
					<p>You will see new database in the list now. Click its name to access it.</p>

					<div class="flexslider clearfix img-polaroid">
						<ul class="slides">
							<li>
								<img src="img/database-create-1.jpg" alt="" />
								<div class="flex-caption">
									<p>1. Click Database button to see databases list.</p>
								</div>
							</li>
							<li>
								<img src="img/database-create-2.jpg" alt="" />
								<div class="flex-caption">
									<p>2. Enter database name. <br>
									3. Click Create button.</p>
								</div>
							</li>
							<li>
								<img src="img/database-create-3.jpg" alt="" />
								<div class="flex-caption">
									<p>4. You will see new database in the list now. Click its name to access it.</p>
								</div>
							</li>
						</ul>
					</div>
						<br>
					<p>You can also take a look at this video tutorial - <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a></p>
			 <br />
					<div class="box-notification"><span>If you face any difficulties while creating database, contact your hosting provider for tech support.</span></div>

					<p>You can also check next tutorials:</p>
					<ul class="list-2">
						<li class="first"><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-create-database.html">How to create database</a></li>
						<li class="last"><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-to-create-mysql-database-with-godaddy.html">How to create MySQL database with GoDaddy </a></li>
					</ul>
				</li>
				<li>Enter Wordpress directory path into browser address bar and click Enter. Wordpress installation will begin.</li>
				<li><strong>Creating configuration file. </strong> Wordpress installation screen will inform you that you are missing configuration file. Click "Create Configuration File" button to create it.

						<figure class="img-polaroid"><img src="img/wordpress/wp-install-1-b.jpg" alt="Creating configuration file."></figure>
						<p class="muted text-center"></p>
				</li>
				<li><strong>Database details.</strong> You need to enter Wordpress database connection details on this step.

						<figure class="img-polaroid"><img src="img/wordpress/wp-install-3-b.jpg" alt="Inserting database details."></figure>
						<p class="muted text-center"></p>
				</li>
				<li><strong>Webiste details.</strong> You need to enter next details:
					<ul class="fa-marked">
						<li>website name</li>
						<li>administrator login and password</li>
						<li>website e-mail</li>
					</ul>

						<figure class="img-polaroid"><img src="img/wordpress/wp-install-6-b.jpg" alt="Inserting website details."></figure>
						<p class="muted text-center"></p>
				</li>
				<li>Click "Install WordPress";.

						<figure class="img-polaroid"><img src="img/wordpress/wp-install-7-b.jpg" alt="Install WordPress button."></figure>
						<p class="muted text-center"></p>

					<p>If you have entered correct details, you will see a message about successful installation and aWordpress dashboard access button.</p>
				</li>
			</ol>
			<p>You can also take a look at these video tutorials:</p>
			<ul class="list-2">
				<li class="first"><i class="icon-info-sign"></i> <a href="/help/wordpress-how-to-install-the-engine-to-hostgator-server-manual-installation.html" target="_blank">How to install Wordpress engine to HostGator (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/wordpress-how-to-install-the-engine-to-bluehost-server-manual-installation.html" target="_blank">How to install Wordpress engine to Bluehost (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/wordpress-how-to-install-the-engine-to-siteground-server-manual-installation.html" target="_blank">How to install Wordpress engine to SiteGround (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/how-to-install-wordpress-to-godaddy-server-manual-installation.html" target="_blank"> How to install Wordpress engine to GoDaddy (manual installation)</a></li>
				<li class="last"><i class="icon-info-sign"></i> <a href="/help/wordpress-how-to-install-the-engine-to-just-host-server-manual-installation.html" target="_blank">How to install JustHost engine to Bluehost (manual installation)</a></li>
			</ul>
		</article>
