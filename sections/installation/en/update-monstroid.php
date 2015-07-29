	<h3>How to update Monstroid</h3>
	<p>Monstroid installation contains several WordPress components: Cherry Framework, Cherry Plugins and Monstroid theme itself. Each component can be updated separately.</p>

	<h4>How to update Cherry Framework and Cherry Plugins</h4>
	<p>When new version of Cherry Framework is available you'll see a notification in your WordPress admin panel in "Dashboard -> Updates" section. </p>
	<figure class="img-polaroid"><img src="img/monstroid/update_cherry1.png" alt=""></figure>
	<p>Click on 'updates' menu item to see what components can be updated. Just click on any element you want to update and proceed. The update process is exactly the same as WordPress core update. </p>

	<p>Plugins, that have updates available can also be seen in "Plugins -> Update Available" section.</p>
	<figure class="img-polaroid"><img src="img/monstroid/update_plugins_2.png" alt=""></figure>
	<p>Click "Update Now" button to download plugin updates.</p>

	<h4>How to update Monstroid theme</h4>
	<p>Monstroid theme itself is a child theme for Cherry Framework and it is updated in semi-automatic mode. All functionality updates you will receive with Cherry Framework and Cherry Plugins updates. Theme files should be reinstalled manually.</p>

	<div class="alert alert-warning">
        <p>Reinstalling Monstroid theme will delete your theme and cherry options changes. Please backup your data to save your changes.</p>
    </div>

	<p>To update Monstroid theme please do the following:</p>

	<ol class="index-list">
		<li>
			<p>Perform settings backup under <strong>"Cherry > Options"</strong>. Just scroll to the end of the page and locate the Export button:</p>
			<figure class="img-polaroid"><img src="img/monstroid/export.jpg" alt=""></figure>
			<p>Make sure you have Cherry Data Manager plugin included.</p>
		</li>
		<li>
			<p>Backup your theme files ("wp-content/themes/monstroid" directory). </p>
		</li>
		<li>
			<p>Delete Monstroid theme from "Appearance -> Themes" section in admin panel.</p>
		</li>
		<li>
			<p>Download theme archive and follow <a href="#manual-install">Manual Installation</a> to install new version of Monstroid theme or</p>
		</li>
		<li>
			<p>you can use Monstroid Wizard ("Tools > Monstroid Wizard"). <b>Make sure to delete "Monstroid Wizard" plugin and reinstall it from <a href="http://cloud.cherryframework.com/downloads/wizard/monstroid-wizard.zip">this link</a> before update.</b></p>
		</li>		
		<li>
			<p>Import your updated files from the backup and import Cherry Options if required. </p>
		</li>
	</ol>