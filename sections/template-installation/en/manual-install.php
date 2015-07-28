<h3>Manual Installation</h3>

<p>If for some reason installation using Cherry Wizard is not an option, you can install Cherry Framework and the theme
   manually.</p>

<h4>Install Cherry Framework</h4>

<ol class="index-list">
    <li>Download
        <a href="https://github.com/CherryFramework/cherryframework4/archive/master.zip">Cherry Framework 4</a>
        .
    </li>
    <li>Open the WordPress admin panel and go to the "<b>Appearance -> Themes</b>" section.</li>
    <li>Click the "<b>Add new</b>" button and click "<b>Upload theme</b>."</li>
    <li>Upload the Cherry Framework 4 package.</li>
</ol>

<div class="alert alert-warning">Please make sure Cherry Framework 4 archive is named 'cherryframework4.zip'</div>

<h4>Install Cherry Theme</h4>

<ol class="index-list">
    <li>Download the theme using the link on the template delivery page. Check your email account for template delivery
        email.
    </li>
    <li>Open the WordPress admin panel and go to "<b>Appearance -> Themes</b>."</li>
    <li>Upload the Cherry theme package.</li>
    <li>Activate Cherry theme.</li>
</ol>

<p>
    If you have difficulties installing the theme through the WordPress admin panel, you can upload it through the FTP
    File Manager.
</p>

<ol class="index-list">
    <li>Unpack the <strong>CherryFramework.zip</strong> archive and <strong>theme####.zip</strong> archive on your local
        computer (right-click each .zip file, choose <strong>Unzip to: CherryFramework</strong> and
        <strong>theme####</strong>, after that you will see 2 folders: CherryFramework and theme####).
    </li>
    <li>Upload the <strong>CherryFramework</strong> and <strong>theme### </strong> folders into the <strong>/wp-content/themes/</strong>
        directory on the FTP server.
    </li>
    <li>Log into the WordPress dashboard (add /wp-admin after the domain name in the browser address bar).</li>
    <li>Click <strong>Appearance</strong> > <strong>Themes</strong> .</li>
    <li>Then click <strong>Available Themes</strong>, find <strong>theme####</strong> and activate it clicking the
        <strong>Activate</strong> button.
    </li>
</ol>

<h4>Install Cherry Plugins</h4>

<p>
    To make a Cherry based website fully functional, you need to install all the required plugins. Plugins provide
    additional functionality to the default WordPress engine.
</p>

<p>To install Cherry Plugins, please do the following:</p>

<ol class="index-list">
    <li>Open the WordPress admin panel.</li>
    <li>Go to "<b>Plugins > Add New</b>."</li>
    <li>Click the "<b>Upload Plugin</b>" button.</li>
    <li>Search for plugins in your downloaded template package in the "<b>source</b>" directory.</li>
    <li>When you have all plugins uploaded, you need to activate them.</li>
    <li>Go to the Plugins section and click the Activate links under each plugin.</li>
</ol>

<h4>Install Sample Data</h4>

<p>
    To make your theme appear as on the template live demo, please install the sample data. You can do this using Data
    Manager tool or manually.
</p>

<h5>Data Manager</h5>

<p>
    Open WordPress admin panel and go to "<b>Tools > Cherry Import</b>" section
</p>

<figure class="img-polaroid"><img src="img/cherryframework/sample_data_import_section.jpg" alt=""></figure>

<p>
    Open your downloaded template package and go to "<b>theme\sample_data\</b>" directory. All files from this
    directory should be uploaded to Cherry Import. You can select all files (CTRL+A) and drag them to the Cherry Import
    section or click "<b>Browse local files</b>" in Cherry Import.
</p>

<figure class="img-polaroid"><img src="img/cherryframework/sample_data_import_import.jpg" alt=""></figure>

<p>
    If all files are uploaded, you'll be able to Continue Installation.
</p>

<figure class="img-polaroid"><img src="img/cherryframework/sample_data_import_upload.jpg" alt=""></figure>

<p class="alert alert-warning">
    Please note: .json and .xml files are required for correct sample data installation.
</p>

<p>
    Click "<b>Continue Install</b>" button to proceed.
</p>

<figure class="img-polaroid"><img src="img/cherryframework/sample_data_import_install.jpg" alt=""></figure>

<p>
    When the installation process is done, you can view your website. It should be as at the live demo.
</p>


<h5>Manual Installation</h5>

<ol class="index-list">
    <li>Copy the "<strong>uploads</strong>" folder (you can find it in the <strong> theme/manual_install/</strong>
        template folder) into the <strong> /wp-content/ </strong> folder on the FTP server.
    </li>
    <li>Open the <strong>theme####.sql</strong> file (located in the <strong>theme/manual_install/</strong> folder)
        using any code editor (Recommended software: Dreamweaver or Notepad) and change all lines with "<strong>your_website_url_here</strong>"
        to your website URL via <strong>Find and Replace</strong> (hot keys - Ctrl+H). E.g.: http://www.mywebsite.com
    </li>
    <li>There should be no forward slash "/" at the end of the URL.</li>
    <li>Save the changes and close the file.</li>
    <li>Now you can import this file through <strong>phpMyAdmin</strong> or another database management tool.</li>
</ol>

<p><strong>Congratulations, now you have completely installed Cherry Theme.</strong></p>
