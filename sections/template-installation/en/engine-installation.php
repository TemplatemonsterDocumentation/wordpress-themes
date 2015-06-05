<article id="engine-installation">
			<h3>WordPress Engine installation</h3>
			<p>Download the required WordPress version. You can check which release is required on the template preview page in the requirements list. Make sure you download the correct version.</p>
			<ol>
				<li>You can download the WordPress platform at the official WordPress.org website: <a href="http://WordPress.org/download/" target="_blank"><strong>Download WordPress</strong></a>. If you need another release, follow this link <a href="http://WordPress.org/download/release-archive/" target="_blank"><strong>WordPress versions archive</strong></a>.				</li>
				<li>Once the platform is downloaded, you'll need to unpack files. You can use any file archiver that support ZIP format to unpack the <strong>ZIP</strong> file.
					<p>These tutorials will show you how to unpack archived file, if you have <a target="_blank" href="/help/unzipping-your-template.html"><strong>Windows OS (using WinZip)</strong></a> and if you have <a target="_blank" href="/help/how-unzip-template-mac.html"><strong>MAC OS (using StuffitExpander)</strong></a>.</p>
					<ul class="list-2">
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/extract-archived-files-mac-os.html">Unpacking archive (MAC OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/extract-archived-files-windows-os.html">Unpacking archive (Windows OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/downloading-and-installing-winzip.html">How to download and install WinZip</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-unzip-template-mac.html">How to unpack the template (MAC OS)</a></li>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-unzip-template-mac.html">How to unpack the template</a><a target="_blank" href="/help/unzipping-your-template.html"> (Windows OS)</a></li>
					</ul>
				</li>
				<li>Once WordPress platform files and folders are unpacked, you need to upload them to the hosting server.
					<p>Upload files and folders to the server into the <strong>PUBLIC_HTML</strong> or <strong>WWW</strong> directory.</p>

					<div class="box-info"><span>If you can't find the PUBLIC_HTML or WWW directory on your hosting server, contact your hosting provider and find out where you should upload website files to.</span></div>

					<p>You can also take a look at these tutorials that contain detailed information on how to upload files to a hosting server:</p>
					<ul class="list-2">
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-upload-files-server-2.html">How to upload files to server</a>
						<li><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html">How to upload files to server using cPanel (WebHost Manager, WHM)</a> </li>
					</ul>
				</li>
				<li>Next, you need to create a database for the WordPress platform.

					<p>You can create it using the database management tool in the hosting cpanel (<em>usually it is PhpMyAdmin</em>).</p>

					<p>With the help of phpMyAdmin you can create a new database in 3 simple steps (check the slides below):</p>

					<ol class="list">
										<li>Click the Database button at the top navigation menu to see the list of databases.</li>
										<li>Enter database name in the "Create new database" field.</li>
										<li>Click the "Create" "button.</li>
										</ol>
										<br>
					<p>You will see the new database in the list now. Click on its name to access it.</p>

					<div class="flexslider clearfix img-polaroid">
						<ul class="slides">
							<li>
								<img src="img/database-create-1.jpg" alt="" />
								<div class="flex-caption">
									<p>1. Click the Database button to see the list of databases.</p>
								</div>
							</li>
							<li>
								<img src="img/database-create-2.jpg" alt="" />
								<div class="flex-caption">
									<p>2. Enter database name. <br>
									3. Click the "Create"" button.</p>
								</div>
							</li>
							<li>
								<img src="img/database-create-3.jpg" alt="" />
								<div class="flex-caption">
									<p>4. You will see the new database in the list now. Click on its name to access it.</p>
								</div>
							</li>
						</ul>
					</div>
						<br>
					<p>You can also take a look at this video tutorial - <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>.</p>
			 <br />
					<div class="box-notification"><span>If you face any difficulties while creating the database, contact your hosting provider for tech support.</span></div>

					<p>You can also check the following tutorials:</p>
					<ul class="list-2">
						<li class="first"><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-create-database.html">How to create database</a></li>
						<li class="last"><i class="icon-info-sign"></i> <a target="_blank" href="/help/how-to-create-mysql-database-with-godaddy.html">How to create MySQL database with GoDaddy </a></li>
					</ul>
				</li>
				<li>Enter the WordPress directory path into the browser address bar and click Enter. WordPress installation will begin.</li>
				<li><strong>Creating the configuration file. </strong> WordPress installation screen will inform you that you are missing the configuration file. Click "Create Configuration File" to create it.

						<figure class="img-polaroid"><img src="img/WordPress/wp-install-1-b.jpg" alt="Creating configuration file."></figure>
						<p class="muted text-center"></p>
				</li>
				<li><strong>Database details.</strong> You need to enter the WordPress database connection details here.

						<figure class="img-polaroid"><img src="img/WordPress/wp-install-3-b.jpg" alt="Inserting database details."></figure>
						<p class="muted text-center"></p>
				</li>
				<li><strong>Webiste details.</strong> You need to enter the next details:
					<ul>
						<li><i class="icon-angle-right"></i>website name</li>
						<li><i class="icon-angle-right"></i>administrator login and password</li>
						<li><i class="icon-angle-right"></i>website e-mail</li>
					</ul>

						<figure class="img-polaroid"><img src="img/WordPress/wp-install-6-b.jpg" alt="Inserting website details."></figure>
						<p class="muted text-center"></p>
				</li>
				<li>Click "Install WordPress."

						<figure class="img-polaroid"><img src="img/WordPress/wp-install-7-b.jpg" alt="Install WordPress button."></figure>
						<p class="muted text-center"></p>

					<p>If you have entered the correct details, you will see a message about successful installation and  the WordPress dashboard access button.</p>
				</li>
			</ol>
			<p>You can also take a look at these video tutorials:</p>
			<ul class="list-2">
				<li class="first"><i class="icon-info-sign"></i> <a href="/help/WordPress-how-to-install-the-engine-to-hostgator-server-manual-installation.html" target="_blank">How to install WordPress engine to HostGator (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/WordPress-how-to-install-the-engine-to-bluehost-server-manual-installation.html" target="_blank">How to install WordPress engine to Bluehost (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/WordPress-how-to-install-the-engine-to-siteground-server-manual-installation.html" target="_blank">How to install WordPress engine to SiteGround (manual installation)</a></li>
				<li><i class="icon-info-sign"></i> <a href="/help/how-to-install-WordPress-to-godaddy-server-manual-installation.html" target="_blank"> How to install WordPress engine to GoDaddy (manual installation)</a></li>
				<li class="last"><i class="icon-info-sign"></i> <a href="/help/WordPress-how-to-install-the-engine-to-just-host-server-manual-installation.html" target="_blank">How to install JustHost engine to Bluehost (manual installation)</a></li>
			</ul>
		</article>