<h3>Booked - Appointment Booking</h3>

<p>Booked is a powerful and easy-to-use appointment booking plugin for WordPress.</p>


<h4>Create a Profile Page</h4>

<p>If you would like your customers to be able to manage their own appointments and edit their profile, you'll want to activate the profile page. It's an easy process though, just follow the guide below:</p> 

<ol>
	<li>Create a page and give it a title. "Profile" works, but it can be whatever you want it to be.</li>
	<li>Add the [booked-login] shortcode to the page so your users can log in to view their profile.</li>
	<li>Go to the Booked Settings panel (Appointments > Settings) and choose this new page from the dropdown in the General Settings tab.</li>
</ol>

<p>Just after installing the Contact Form 7 plugin, you’ll see a default form named <strong>“Contact form 1″</strong> and a code like this:</p>

<h5>GENERAL SETTINGS</h5>

<ol class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>Profile Page</dt>
			<dd>As described above, you will choose the page you want to use for the profile from this dropdown.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Time Slot Intervals</dt>
			<dd>When creating your default time slots (described below), you can choose the intervals at which you can choose your time slots. Just change it with this dropdown.</dd>
		</dl>
	</li>
</ol>

<h5>USER EMAILS</h5>

<p>All emails can be turned off one by one by simply removing the content of the email in the fields. If nothing is there then no email is sent. All emails have special tokens you can use in place of actual content. This content is placed into the email when it gets sent. The tokens are listed above each email form.</p>


<ol class="marked-list">
	<li>
		<dl class="inline-term">
			<dt>Registration</dt>
			<dd>This is the email that is sent to your new users, welcoming them to your website.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Appointment Confirmation</dt>
			<dd>This email is sent to the user when they book an appointment as a confirmation that the appointment has been submitted.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Appointment Approval</dt>
			<dd>This is the email that is sent to the user when their appointment is approved.</dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt>Appointment Cancellation</dt>
			<dd>This is the email that is sent to the user if their appointment is cancelled by the website admin.</dd>
		</dl>
	</li>
</ol>


<h5>APPOINTMENT CREATION</h5>

<p>The power of Booked is that your customers can pick and choose from available time slots when they would like to book their appointment. However, in some cases the admin needs this power. You can create appointments quickly and easily using the appointment calendar:</p>


<ol class="index-list">
	<li>
		Click "Appointments" in the admin panel.
	</li>
	<li>
		You will see a big calendar, showing the current month (if the current date is wrong, please make sure the correct time zone is selected from Settings > General).
	</li>
	<li>
		Pick the day on which you want to book the appointment.
	</li>
	<li>
		Choose a time slot and click the "New Appointment..." button.
	</li>
	<li>
		If this is a current customer, you can simply select them from the user dropdown.		
	</li>
	<li>
		If this is a new customer, you can quickly add them as a new user by using the registration fields. The first name and email are the only required fields.		
	</li>
	<li>
		When the appointment is booked, the user will get an email welcoming them to the site (with a username/password) as well as a appointment confirmation email. These emails can be customized/turned off from the Booked Settings panel.		
	</li>
</ol>

<h5>APPOINTMENT CANCELLATION</h5>

<p>To cancel someone's appointment, simply find the appointment on the calendar and click the " ×" next to their name in the time slot from which you want to remove them.</p>


<h4>Shortcode</h4>

<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">booked-calendar year</span><span class="pun">=</span><span class="str">"2016"</span><span class="pln"> month</span><span class="pun">=</span><span class="str">"7"</span><span class="pln"> calendar</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> switcher</span><span class="pun">=</span><span class="str">"true"</span><span class="pun">]</span></pre>


<h4>Default Time Slots</h4>

<p>Setting your default time slots is at the heart of the Booked plugin. Each day is given default time slots. For example, if your business is open Monday – Friday from 8:00am – 4:00pm and you have 2 employees available every hour, you would create 2 times slots every hour from 8–4, Monday – Friday.</p>

<h5>BULK TIME SLOT ENTRY</h5>

<p>To quickly add a bunch of time slots, you can use the Bulk time slot entry option:</p>

<ol class="index-list">
	<li>
		Click "Add..." at the top of the day you're adding time slots to.
	</li>
	<li>
		Switch to the "Bulk" tab.
	</li>
	<li>
		For the "Start time...", select "8:00am".
	</li>
	<li>
		For the "End time...", select "4:00pm".
	</li>
	<li>
		Leave the next dropdown as "Every 1 hour" to set your time slots every hour.
	</li>
	<li>
		Choose "2 time slots" as the last option, and then click "Add".
	</li>
	<li>
		Your available time slots for that day will then be added and your customers can start booking appointments!
	</li>
</ol>

<h5>SINGLE TIME SLOT ENTRY</h5>

<p>Alternatively, you can add a single time slot to any day/time:</p>

<ol class="index-list">
	<li>
		Click "Add..." at the top of the day you're adding time slots to.
	</li>
	<li>
		Choose a "Start time" and "End time" and then select how many time slots you want to add.
	</li>
	<li>
		Click "Add" and that time slot entry will be added as a default for that day.
	</li>
</ol>


<h4>Adding Custom Time Slots</h4>

<ol class="index-list">
	<li>
		Go to the Booked Settings panel and then go to the Custom Time Slots tab.
	</li>
	<li>
		Click the "Add Date(s)" button.
	</li>
	<li>
		Choose the calendar you want to use (if applicable).
	</li>
	<li>
		Choose the Start Date.
	</li>
	<li>
		If this is a one day setting, you can leave the End Date blank. If this is a date range, choose the End Date.
	</li>
	<li>
		To add a single time slot, click the "+ Single Time Slot" button. To bulk add time slots, click the "+ Bulk Time Slots" button.
	</li>
	<li>
		For single time slots, you'll choose how many available appointments for this time slot and then you'll choose the start and end times. Alternatively, you can check the "All day" checkbox to make this an all day time slot.
	</li>
	<li>
		To add bulk time slots, choose how many available appointments there are, choose a start and end time for the entire span of your day, choose the time between each slot if you need a 10 minute break for example. Then choose the interval for the time slots to be entered.
	</li>
</ol>

<p>For more information, please visit <a href="https://www.youtube.com/watch?v=bD-BcS7p4vQ" target="blank">video tutorial</a></p>

<h4>Adding Vacation/Closed Dates</h4>

<ol class="index-list">
	<li>
		Go to the Booked Settings panel and then go to the Custom Time Slots tab.
	</li>
	<li>
		Click the "Add Date(s)" button.
	</li>
	<li>
		Choose the calendar you want to use (if applicable).
	</li>
	<li>
		Choose the Start Date.
	</li>
	<li>
		If this is a one day setting, you can leave the End Date blank. If this is a date range, choose the End Date.
	</li>
	<li>
		Check the "Disable appointments" checkbox to make this a vacation/closed date.
	</li>
	<li>
		That's it
	</li>
</ol>

<p>For more information, please visit <a href="https://www.youtube.com/watch?v=0n5zdYoaHzc" target="blank">video tutorial</a></p>
