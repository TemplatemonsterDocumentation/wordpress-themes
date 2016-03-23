<h2>Introduction</h2>
<h5>Thank you for purchasing a WordPress template. This documentation consists of several parts and covers the entire process of installing and setting up a WordPress website starting from scratch.</h5>
<article id="whatiswordpress">
    <h3>What is WordPress CMS?</h3>

    <p>WordPress is a free open-source blogging tool and content management system (CMS) based on PHP and MySQL. With
    its help you can create and administrate websites or powerful on-line applications without possessing any special
    technical skills or knowledge. Due to its ease of use and flexibility WordPress has become the most popular
    platform for website development.
    <a href="http://wordpress.org/about/" target="_blank">Learn More</a>
    </p>
</article>
<article id="whatistemplate">
    <h3>What is a WordPress Template?</h3>
    <p>A WordPress template is a theme for the WordPress CMS platform. You can easily change your website appearance by installing a new WordPress template in a few easy steps. Despite its simplicity, a WordPress template contains all the necessary source files that can be altered the way you need.</p>
</article>
<article id="structure">
    <h3>Template Structure</h3>
    <p>The template package includes several folders. Let's check what's inside:</p>

<ul class="files_structure">
    <li>
        <dl class="inline-term">
            <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
            <dd> contains screen-shots of the template. However, they are not required to edit the template.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><i class="fa fa-folder"></i> <strong>theme</strong></dt>
            <dd> contains WordPress theme files.</dd>
        </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt>
                        <i class="fa fa-folder"></i> <strong>theme-name.zip</strong>
                        </dt>
                            <dd>
                            archive with the theme (child theme). Contains all theme files.
                            It must be installed through WordPress extension manager.
                            </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i> <strong>sample_data</strong>
                        </dt>
                            <dd>
                            contains the files that make the WordPress website look like our live
                            demo.
                            </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-file"></i> <strong>content.xml</strong>
                                </dt>
                                    <dd>
                                    contains all template sample data (posts, pages, categories, etc).
                                    </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-file"></i> <strong>widgets.wie</strong>
                                </dt>
                                    <dd>
                                    contains widgets settings.
                                    </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li class="folder">
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i> <strong>manual_install</strong>
                        </dt>
                            <dd>
                            contains files that make the WordPress website look like our live demo.
                            </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i> <strong>uploads</strong>
                                </dt>
                                    <dd>
                                    contains theme images.
                                    </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-file"></i> <strong>theme-name.sql</strong>
                                </dt>
                                    <dd>
                                    database file (contains theme content).
                                    </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
    </li>
    <li>
        <dl class="inline-term">
            <dt><i class="fa fa-file"></i> <strong>documentation.txt</strong></dt>
                <dd> contains documentation link information.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> instructions on how to extract source files.</dd>
        </dl>
    </li>
</ul>
</article>
<article id="preparation">
    <h3>Preparation</h3>
    <h6>Before installing a WordPress website, you need to get fully prepared. We recommend you to get the following aspects covered:</h6>

    <h4>Software</h4>
    <p>Before you start working with the WordPress template, you should download the required software. You can check the required software on the template preview page.<br>
    Requirements can alter from template to template, so we will list the most important ones:</p>
    <ol class="index-list">
    	<li>First of all, you will need the right software to extract the files from the password protected sources_#########.zip archive. You can use WinZip 9 or a later version (if you have Windows OS) or Stuffit Expander 10 or a later version (if you have Mac OS).</li>
    	<li>You might also need Adobe Photoshop. It is used to edit the source .PSD files in case you need to change the graphic design and images of the template.</li>
    	<li>To edit the template source code, you can use code editors like Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
    	<li>To upload the files to a hosting server, you will need an FTP manager like Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>

    	<h4>Hosting</h4>
    	<p>As WordPress CMS is a PHP/MySQL platform, you need to have the hosting server prepared for it.</p>
    	<p>In case you already have a hosting server, you need to check whether it is compatibile with <a href="http://wordpress.org/about/requirements/" target="_blank"> WordPress hosting requirements </a>, in other words, whether you can host a WordPress website with it.</p>
    	
    	<p>Cherry Framework itself requires Apache or Nginx hosting servers with the following configuration settings:</p>
    	
    	<h5>Recommended Configuration</h5>

    	<ol class="index-list">
    		<li>In <strong>php.ini</strong> define the following:<br>
    			<ul class="marked-list">
    				<li>'max_execution_time' => 60;</li>
    				<li>'memory_limit' => 128;</li>
    				<li>'post_max_size' => 8;</li>
    				<li>'upload_max_filesize' => 8;</li>
    				<li>'max_input_time' => 45;</li>
    				<li>'file_uploads' => 'on';</li>
    				<li>'safe_mode' => 'off';</li>
    			</ul>
    		</li>
    		<li>in <strong>.htaccess</strong> file: 'php_value max_execution_time' => 60;</li>
    		<li>in <strong>wp-config.php</strong>: 'set_time_limit' => 60;</li>
    		<li>1 GB of disk space</li>
    		<li>memory limit per process: 64mb (128mb or more recommended)</li>
    	</ol>
    	

    	<h5>PHP and MySQL</h5>
    	
    	<p>Minimal required version of PHP is 5.2.4 and MySQL 5. PHP 5.2 is already not safe as contains critical vulnerabilities that can be used to harm your website. Some Cherry Framework extensions will not work with PHP 5.2 and require version 5.4 or later.</p>

    	<p>Recommended settings are: </p>

    	<ol class="index-list">
    		<li>PHP 5.4</li>
    		<li>MySQL 5.5 or later</li>
    		<li>mod_rewrite</li>
    		<li>php fopen</li>
    		<li>suPHP</li>
    	</ol>

    	<p>You can also install WordPress on your PC or laptop through a local server. You can use the next software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as regular software.</p>
    	<p>These tutorials will help you set up the local server:</p>
    	<ul class="marked-list">
    		<li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">How to install AppServ web development environment</a></li>
    	<li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">How to install WAMP web development environment</a></li>
    	<li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">How to install XAMP web development environment</a></li>
    </ul>
</article>