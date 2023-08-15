<?php

function shortcode_gcm_form_structure( $atts, $content = '', $shortcode_name = 'gcm_form_structure' ) {
	ob_start();
	gcm_output_form_structure_html();
	return ob_get_clean();
}
add_shortcode( 'gcm_form_structure', 'shortcode_gcm_form_structure' );

function gcm_output_form_structure_html() {
	?>
	<h3>Form structure:</h3>
	<form action="" method="post" novalidate="novalidate">
	
	<div class="field-group-heading">
		<div class="step">Step 1/2</div>
		<h3 class="title">About You</h3>
	</div>
	
	<div class="field-group field-list">
		
		<div class="group-label">Full Name</div>
		
		<div class="group-fields group-columns-3">
			
			<div class="field type-text is-required">
				<div class="field-label">
					<label for="first-name">First Name</label>
				</div>
				<div class="field-content">
					<input type="text" id="first-name" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-text is-required">
				<div class="field-label">
					<label for="last-name">Last Name</label>
				</div>
				<div class="field-content">
					<input type="text" id="last-name" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-text is-optional">
				<div class="field-label">
					<label for="middle-name">Middle Name (Optional)</label>
				</div>
				<div class="field-content">
					<input type="text" id="middle-name" name="middle-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="field-group field-list">
		
		<div class="group-label">Physical Address</div>
		
		<div class="group-fields group-columns-3">
			
			<div class="field type-text">
				<div class="field-label">
					<label for="street">Street Number and Name</label>
				</div>
				<div class="field-content">
					<input type="text" id="street" name="street" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-radio-button-row">
				<div class="field-label">
					<label for="apt-type-apartment">Apartment Type (Optional)</label>
				</div>
				
				<div class="field-content">
					<div class="radio-button-row">
						<label>
							<input type="radio" name="apt-type" id="apt-type-apartment" value="apartment" aria-invalid="false">
							<span>Apartment</span>
						</label>
						<label>
							<input type="radio" name="apt-type" id="apt-type-suite" value="suite" aria-invalid="false">
							<span>Suite</span>
						</label>
						<label>
							<input type="radio" name="apt-type" id="apt-type-floor" value="floor" aria-invalid="false">
							<span>Floor</span>
						</label>
					</div>
				</div>
			</div>
			
			<div class="field type-text">
				<div class="field-label">
					<label for="phone-number">Phone Number (Optional)</label>
				</div>
				<div class="field-content">
					<input type="text" id="phone-number" name="phone-number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
		<!-- </div> -->
		
		<!-- <div class="group-fields group-columns-3"> -->
			
			<div class="field type-text">
				<div class="field-label">
					<label for="city">City or Town</label>
				</div>
				<div class="field-content">
					<input type="text" id="city" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-dropdown">
				<div class="field-label">
					<label for="state">State</label>
				</div>
				<div class="field-content">
					<select id="state" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required" aria-required="true" aria-invalid="false" name="State">
						<option value="AL">AL</option>
						<option value="AK">AK</option>
						<option value="AZ">AZ</option>
						<option value="AR">AR</option>
						<option value="...">...</option>
						<option value="VA">VA</option>
						<option value="WA">WA</option>
						<option value="WV">WV</option>
						<option value="WI">WI</option>
						<option value="WY">WY</option>
					</select>
				</div>
			</div>
			
			<div class="field type-text">
				<div class="field-label">
					<label for="zip">Zip code</label>
				</div>
				<div class="field-content">
					<input type="text" id="zip" name="zip" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
		</div>
		
	</div>
	
	
	<div class="field-group-heading">
		<div class="step">Step 2/2</div>
		<h3 class="title">Other</h3>
	</div>
	
	<div class="field-group field-list">
		
		<div class="group-label">Answer Question</div>
		
		<div class="group-fields group-columns-3">
			
			<div class="field type-text">
				<div class="field-label">
					<label for="referrer">How did you find us?</label>
				</div>
				<div class="field-content">
					<input type="text" id="referrer" name="referrer" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-text">
				<div class="field-label">
					<label for="done-before">Have you had an immigration examination done before?</label>
				</div>
				<div class="field-content">
					<input type="text" id="done-before" name="done-before" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
			<div class="field type-text">
				<div class="field-label">
					<label for="uscis-assisted">Do you have a lawyer/company helping you with your USCIS application?</label>
				</div>
				<div class="field-content">
					<input type="text" id="uscis-assisted" name="uscis-assisted" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="field-group group-submit">
		
		<div class="group-fields group-columns-3">
			
			<div class="field type-submit">
				<input type="submit" value="Submit" class="button">
			</div>
			
		</div>
		
	</div>
	
	</form>
	
	
	<h3>Updated contact form html:</h3>
<pre><?php
ob_start();
?>

<div class="field-group-heading">
	<div class="step">Step 1/2</div>
	<h3 class="title">About You</h3>
</div>

<div class="field-group field-list">

	<div class="group-label">Full Name</div>

	<div class="group-fields group-columns-3">

		<div class="field type-text">
			<div class="field-label">
				<label for="first-name">First Name</label>
			</div>
			<div class="field-content">
				[text* FirstName id:first-name class:letters_space]
			</div>
		</div>

		<div class="field type-text">
			<div class="field-label">
				<label for="last-name">Last Name</label>
			</div>
			<div class="field-content">
				[text* LastName id:last-name class:letters_space]
			</div>
		</div>

		<div class="field type-text">
			<div class="field-label">
				<label for="middle-name">Middle Name (Optional)</label>
			</div>
			<div class="field-content">
				[text* MiddleName id:middle-name class:letters_space]
			</div>
		</div>

	</div>

</div>

<div class="field-group field-list">

	<div class="group-label">Physical Address</div>

	<div class="group-fields group-columns-3">

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="street">Street Number and Name</label>
			</div>
			<div class="field-content">
				[text* Street id:street class:RegEx-3190]
			</div>
		</div>

		<div class="field type-radio-button-row is-optional">
			<div class="field-label">
				<label for="apt-type">Apartment Type (Optional)</label>
			</div>

			<div class="field-content">
				[radio AppartmentType id:apt-type class:cf7_radio_button_row use_label_element default:1 "APT" "STE" "FLR"]
				
				@TODO: class:cf7_radio_button_row
				<div class="radio-button-row">
					<label>
						<input type="radio" name="apt-type" id="apt-type-apartment" value="apartment" aria-invalid="false">
						<span>FAKE Apartment</span>
					</label>
					<label>
						<input type="radio" name="apt-type" id="apt-type-suite" value="suite" aria-invalid="false">
						<span>FAKE Suite</span>
					</label>
					<label>
						<input type="radio" name="apt-type" id="apt-type-floor" value="floor" aria-invalid="false">
						<span>FAKE Floor</span>
					</label>
				</div>
				
			</div>
		</div>

		<div class="field type-text is-optional">
			<div class="field-label">
				<label for="apartment-number">Apartment Number (Optional)</label>
			</div>
			<div class="field-content">
				[text Appartment id:apartment-number class:RegEx-3190]
			</div>
		</div>
		
		<div class="field type-text is-required">
			<div class="field-label">
				<label for="city">City or Town</label>
			</div>
			<div class="field-content">
				[text* CityTown id:city class:letters_space]
			</div>
		</div>

		<div class="field type-dropdown">
			<div class="field-label">
				<label for="state">State</label>
			</div>
			<div class="field-content">
				[select* State id:state "AL" "AK" "AZ" "AR" "CA" "CO" "CT" "DE" "FL" "GA" "HI" "ID" "IL" "IN" "IA" "KS" "KY" "LA" "ME" "MD" "MA" "MI" "MN" "MS" "MO" "MT" "NE" "NV" "NH" "NJ" "NM" "NY" "NC" "ND" "OH" "OK" "OR" "PA" "RI" "SC" "SD" "TN" "TX" "UT" "VT" "VA" "WA" "WV" "WI" "WY"]
			</div>
		</div>

		<div class="field type-text">
			<div class="field-label">
				<label for="zip">Zip code</label>
			</div>
			<div class="field-content">
				[text* ZipCode id:zip class:digits class:JVmaxlength-5 class:JVminlength-5]
			</div>
		</div>

	</div>

</div>

<div class="field-group field-list">

	<div class="group-label">Other Information</div>

	<div class="group-fields group-columns-3">

		<div class="field type-radio-button-row is-required">
			<div class="field-label">
				<label for="gender">Gender</label>
			</div>
			<div class="field-content">
				[radio Gender id:gender class:cf7_radio_button_row use_label_element default:1 "M" "F"]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="dob">Date of birth (mm/dd/yyyy)</label>
			</div>
			<div class="field-content">
				[date* dob id:dob class:date]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="city-of-birth">City/Town/Village of Birth</label>
			</div>
			<div class="field-content">
				[text* CityBirth id:city-of-birth class:letters_space]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="country-of-birth">Country of Birth</label>
			</div>
			<div class="field-content">
				[text* CountryBirth id:country-of-birth class:letters_space]
			</div>
		</div>

		<div class="field type-text is-optional">
			<div class="field-label">
				<label for="ar-number">Alien Registration Number (Optional)</label>
			</div>
			<div class="field-content">
				[text ANumber id:ar-number class:digits class:JVmaxlength-9 class:JVminlength-9]
			</div>
		</div>

		<div class="field type-text is-optional">
			<div class="field-label">
				<label for="uscis-number">USCIS Online Account Number (Optional)</label>
			</div>
			<div class="field-content">
				[text USCIS id:uscis-number class:digits class:alphanumeric class:JVmaxlength-12]
			</div>
		</div>

	</div>

</div>

<div class="field-group field-list">

	<div class="group-label">Applicant Information</div>

	<div class="group-fields group-columns-3">

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="applicant-phone">Applicant's Daytime Telephone Number</label>
			</div>
			<div class="field-content">
				[text* DaytimeTelephone id:applicant-phone class:digits  class:JVmaxlength-10 class:JVminlength-10]
			</div>
		</div>

		<div class="field type-text is-optional">
			<div class="field-label">
				<label for="applicant-mobile">Applicant's Mobile Telephone Number (Optional)</label>
			</div>
			<div class="field-content">
				[text MobileTelephone id:applicant-mobile class:digits  class:JVmaxlength-10  class:JVminlength-10]
			</div>
		</div>

		<div class="field type-text is-optional">
			<div class="field-label">
				<label for="applicant-email">Applicant's Email Address (Optional)</label>
			</div>
			<div class="field-content">
				[email Emailaddres id:applicant-email]
			</div>
		</div>

	</div>

</div>

<div class="field-group-heading">
	<div class="step">Step 2/2</div>
	<h3 class="title">Other</h3>
</div>

<div class="field-group field-list">

	<div class="group-label">Answer Question</div>

	<div class="group-fields group-columns-3">

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="find-us">How did you find us?</label>
			</div>
			<div class="field-content">
				@TODO: Try a SELECT dropdown
				[radio find id:find-us use_label_element "Immigration Lawyer" "USCIS website" "Friend or Family referred you" "Google" "Other"]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="exam-before">Have you had an immigration examination done before?</label>
			</div>
			<div class="field-content">
				[radio examination id:exam-before use_label_element "Yes. in the U.S" "Yes. outside the U.S." "No"]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="lawyer">Do you have a lawyer/company/organization/agency helping you with your USCIS application?</label>
			</div>
			<div class="field-content">
				[radio lawyer id:lawyer use_label_element "Yes" "No"]
			</div>
		</div>

	</div>

	<!-- TODO: Does this group syntax work here? -->
	[group lawyer-1]
	<div class="group-fields group-columns-3">

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="lawyer-name">What is the name of the lawyer or person helping you with the application?</label>
			</div>
			<div class="field-content">
				[text* lawyer-name id:lawyer-name]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="lawyer-company">What is the name of the company, organization, or law firm helping you with your application?</label>
			</div>
			<div class="field-content">
				[text* lawyer-company id:lawyer-company]
			</div>
		</div>

		<div class="field type-text is-required">
			<div class="field-label">
				<label for="lawyer-phone">What is the telephone number of the lawyer, person, or agency helping you with your application?</label>
			</div>
			<div class="field-content">
				[text* lawyer-phone id:lawyer-phone class:digits class:JVmaxlength-10 class:JVminlength-10]
			</div>
		</div>

	</div>
	[/group]

</div>

<div class="field-group group-submit">

	<div class="group-fields group-columns-3">

		<div class="field type-submit">
			[submit "Next" class:button]
		</div>

	</div>

</div>

<?php

echo esc_html(ob_get_clean());
?></pre>
	
	
	<h3>Expanded contact form:</h3>
	<div class="wpcf7 js" id="wpcf7-f3170-p3171-o1" lang="en-US" dir="ltr">
		<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
		<form action="/i693form/#wpcf7-f3170-p3171-o1" method="post" class="wpcf7-form init theme_4 errorMsgshow" aria-label="Contact form" novalidate="novalidate" data-status="init">
			<div style="display: none;">
				<input type="hidden" name="_wpcf7" value="3170">
				<input type="hidden" name="_wpcf7_version" value="5.7.7">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3170-p3171-o1">
				<input type="hidden" name="_wpcf7_container_post" value="3171">
				<input type="hidden" name="_wpcf7_posted_data_hash" value="">
				<input type="hidden" name="_wpcf7cf_hidden_group_fields" value="[&quot;lawyer-name&quot;,&quot;lawyer-company&quot;,&quot;lawyer-phone&quot;]">
				<input type="hidden" name="_wpcf7cf_hidden_groups" value="[&quot;lawyer-1&quot;]">
				<input type="hidden" name="_wpcf7cf_visible_groups" value="[]">
				<input type="hidden" name="_wpcf7cf_repeaters" value="[]">
				<input type="hidden" name="_wpcf7cf_steps" value="{}">
				<input type="hidden" name="_wpcf7cf_options" value="{&quot;form_id&quot;:3170,&quot;conditions&quot;:[{&quot;then_field&quot;:&quot;lawyer-1&quot;,&quot;and_rules&quot;:[{&quot;if_field&quot;:&quot;lawyer&quot;,&quot;operator&quot;:&quot;equals&quot;,&quot;if_value&quot;:&quot;Yes&quot;}]}],&quot;settings&quot;:{&quot;animation&quot;:&quot;yes&quot;,&quot;animation_intime&quot;:200,&quot;animation_outtime&quot;:200,&quot;conditions_ui&quot;:&quot;normal&quot;,&quot;notice_dismissed&quot;:false,&quot;notice_dismissed_rollback-cf7-5.6&quot;:true}}">
				<input type="hidden" name="_wpcf7_recaptcha_response" value="">
			</div>
			<p><span class="wpcf7-form-control-wrap appointmentfield"><input name="appointmentfield" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" size="40" aria-invalid="false" type="hidden" value="Appointment was not selected"></span><span class="wpcf7-form-control-wrap location"><input name="location" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" size="40" aria-invalid="false" type="hidden" value="location"></span><label> First Name<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="LastName"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required letters_space required error" aria-required="true" aria-invalid="true" value="" type="text" name="LastName"><label id="LastName-error" class="error" for="LastName">This field is required.</label></span> </label><br>
				<label> Last Name<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="FirstName"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required letters_space required" aria-required="true" aria-invalid="false" value="" type="text" name="FirstName"></span> </label><br>
				<label> Middle Name<br>
					<span class="wpcf7-form-control-wrap" data-name="MiddleName"><input size="40" class="wpcf7-form-control wpcf7-text letters_space" aria-invalid="false" value="" type="text" name="MiddleName"></span> </label><br>
				<label> Street Number and Name<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="Street"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required RegEx-3190 required" aria-required="true" aria-invalid="false" value="" type="text" name="Street"></span> </label><br>
				<label>Apartment Type</label><br>
				<span class="wpcf7-form-control-wrap" data-name="ApartmentType"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="ApartmentType" value="APT" checked="checked" class="required"><span class="wpcf7-list-item-label">APT</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="ApartmentType" value="STE" class="required"><span class="wpcf7-list-item-label">STE</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="ApartmentType" value="FLR" class="required"><span class="wpcf7-list-item-label">FLR</span></label></span></span></span><br>
				<label> Apartment<br>
					<span class="wpcf7-form-control-wrap" data-name="Apartment"><input size="40" class="wpcf7-form-control wpcf7-text RegEx-3190" aria-invalid="false" value="" type="text" name="Apartment"></span> </label><br>
				<label> City or Town<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="CityTown"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required letters_space required" aria-required="true" aria-invalid="false" value="" type="text" name="CityTown"></span> </label><br>
				<label>State<span style="color:red">*</span></label><br>
				<span class="wpcf7-form-control-wrap" data-name="State"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required" aria-required="true" aria-invalid="false" name="State"><option value="AL">AL</option><option value="AK">AK</option><option value="AZ">AZ</option><option value="AR">AR</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="IA">IA</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="ME">ME</option><option value="MD">MD</option><option value="MA">MA</option><option value="MI">MI</option><option value="MN">MN</option><option value="MS">MS</option><option value="MO">MO</option><option value="MT">MT</option><option value="NE">NE</option><option value="NV">NV</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NY">NY</option><option value="NC">NC</option><option value="ND">ND</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VT">VT</option><option value="VA">VA</option><option value="WA">WA</option><option value="WV">WV</option><option value="WI">WI</option><option value="WY">WY</option></select></span>
			</p>
			<p><label> Zip Code<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="ZipCode"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required digits JVmaxlength-5 JVminlength-5 required" aria-required="true" aria-invalid="false" value="" type="text" name="ZipCode"></span> </label>
			</p>
			<p><label>Gender<span style="color:red">*</span></label><br>
				<span class="wpcf7-form-control-wrap" data-name="Gender"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="Gender" value="M" checked="checked" class="required"><span class="wpcf7-list-item-label">M</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="Gender" value="F" class="required"><span class="wpcf7-list-item-label">F</span></label></span></span></span>
			</p>
			<p><label> Date of birth (mm/dd/yyyy)<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="dob"><input class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date date required" aria-required="true" aria-invalid="false" value="" type="date" name="dob"></span> </label>
			</p>
			<p><label> City of Birth<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="CityBirth"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required letters_space required" aria-required="true" aria-invalid="false" value="" type="text" name="CityBirth"></span> </label>
			</p>
			<p><label> Country of Birth<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="CountryBirth"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required letters_space required" aria-required="true" aria-invalid="false" value="" type="text" name="CountryBirth"></span> </label>
			</p>
			<p><label> Alien Registration Number (A-Number) <span style="color:red"> "(Optional)"</span><br>
					<span class="wpcf7-form-control-wrap" data-name="ANumber"><input size="40" class="wpcf7-form-control wpcf7-text digits JVmaxlength-9 JVminlength-9" aria-invalid="false" value="" type="text" name="ANumber"></span></label>
			</p>
			<p><label> USCIS Online Account Number <span style="color:red"> "(Optional)"</span><br>
					<span class="wpcf7-form-control-wrap" data-name="USCIS"><input size="40" class="wpcf7-form-control wpcf7-text digits alphanumeric JVmaxlength-12" aria-invalid="false" value="" type="text" name="USCIS"></span> </label>
			</p>
			<p><label> Applicant's Daytime Telephone Number<span style="color:red">*</span><br>
					<span class="wpcf7-form-control-wrap" data-name="DaytimeTelephone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required digits JVmaxlength-10 JVminlength-10 required" aria-required="true" aria-invalid="false" value="" type="text" name="DaytimeTelephone"></span> </label>
			</p>
			<p><label> Applicant's Mobile Telephone Number<br>
					<span class="wpcf7-form-control-wrap" data-name="MobileTelephone"><input size="40" class="wpcf7-form-control wpcf7-text digits JVmaxlength-10 JVminlength-10" aria-invalid="false" value="" type="text" name="MobileTelephone"></span></label>
			</p>
			<p><label>Applicant's Email address</label><br>
				<span class="wpcf7-form-control-wrap" data-name="Emailaddres"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email email" aria-invalid="false" value="" type="email" name="Emailaddres"></span>
			</p>
			<p><b>How did you find us?<span style="color:red">*</span></b><br>
				<span class="wpcf7-form-control-wrap" data-name="find"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="find" value="Immigration Lawyer" class="required"><span class="wpcf7-list-item-label">Immigration Lawyer</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="find" value="USCIS website" class="required"><span class="wpcf7-list-item-label">USCIS website</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="find" value="Friend or Family referred you" class="required"><span class="wpcf7-list-item-label">Friend or Family referred you</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="find" value="Google" class="required"><span class="wpcf7-list-item-label">Google</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="find" value="Other" class="required"><span class="wpcf7-list-item-label">Other</span></label></span></span></span>
			</p>
			<p><b>Have you had an immigration examination done before?<span style="color:red">*</span></b><br>
				<span class="wpcf7-form-control-wrap" data-name="examination"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="examination" value="Yes. in the U.S" class="required"><span class="wpcf7-list-item-label">Yes. in the U.S</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="examination" value="Yes. outside the U.S." class="required"><span class="wpcf7-list-item-label">Yes. outside the U.S.</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="examination" value="No" class="required"><span class="wpcf7-list-item-label">No</span></label></span></span></span>
			</p>
			<p><b>Do you have a lawyer/company/organization/agency helping you with your USCIS application?<span style="color:red">*</span></b><br>
				<span class="wpcf7-form-control-wrap" data-name="lawyer"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="lawyer" value="Yes" class="required"><span class="wpcf7-list-item-label">Yes</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="lawyer" value="No" class="required"><span class="wpcf7-list-item-label">No</span></label></span></span></span>
			</p>
			<div data-id="lawyer-1" data-orig_data_id="lawyer-1" data-class="wpcf7cf_group" style="height: auto;" class="wpcf7cf-hidden">
				<p><b>What is the name of the lawyer or person helping you with the application?<span style="color:red">*</span></b><br>
					<span class="wpcf7-form-control-wrap" data-name="lawyer-name"><input size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text" name="lawyer-name"></span>
				</p>
				<p><b>What is the name of the company, organization, or law firm helping you with your application?<span style="color:red">*</span></b><br>
					<span class="wpcf7-form-control-wrap" data-name="lawyer-company"><input size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text" name="lawyer-company"></span>
				</p>
				<p><b>What is the telephone number of the lawyer, person, or agency helping you with your application?<span style="color:red">*</span></b><br>
					<span class="wpcf7-form-control-wrap" data-name="lawyer-phone"><input size="40" class="wpcf7-form-control wpcf7-text digits JVmaxlength-10 JVminlength-10" aria-invalid="false" value="" type="text" name="lawyer-phone"></span>
				</p>
			</div>
			<p><input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Next"><span class="wpcf7-spinner"></span>
			</p><div class="wpcf7-response-output" aria-hidden="true"></div>
		</form>
	</div>
	
	<h3>Original contact form content:</h3>
<pre style="background: #fff; border: 1px solid #e3e3e3; border-radius: 12px; padding: 15px 20px; white-space: break-spaces;">
[dynamichidden appointmentfield "appointmentfieldval" ][dynamichidden location default:get default:post_meta "location"]<label> First Name<span style="color:red">*</span>
    [text* LastName class:letters_space] </label>
<label> Last Name<span style="color:red">*</span>
    [text* FirstName class:letters_space] </label>
<label> Middle Name
    [text MiddleName class:letters_space] </label>
<label> Street Number and Name<span style="color:red">*</span>
    [text* Street class:RegEx-3190] </label>
<label>Apartment Type</label>
[radio ApartmentType use_label_element default:1 "APT" "STE" "FLR"]
<label> Apartment
    [text Apartment class:RegEx-3190] </label>
<label> City or Town<span style="color:red">*</span>
    [text* CityTown class:letters_space] </label>
  <label>State<span style="color:red">*</span></label>
   [select* State "AL" "AK" "AZ" "AR" "CA" "CO" "CT" "DE" "FL" "GA" "HI" "ID" "IL" "IN" "IA" "KS" "KY" "LA" "ME" "MD" "MA" "MI" "MN" "MS" "MO" "MT" "NE" "NV" "NH" "NJ" "NM" "NY" "NC" "ND" "OH" "OK" "OR" "PA" "RI" "SC" "SD" "TN" "TX" "UT" "VT" "VA" "WA" "WV" "WI" "WY"]

<label> Zip Code<span style="color:red">*</span>
    [text* ZipCode class:digits class:JVmaxlength-5 class:JVminlength-5] </label>

 <label>Gender<span style="color:red">*</span></label>
[radio Gender use_label_element default:1 "M" "F"]

<label> Date of birth (mm/dd/yyyy)<span style="color:red">*</span>
    [date* dob  class:date] </label>

<label> City of Birth<span style="color:red">*</span>
    [text* CityBirth class:letters_space] </label>

<label> Country of Birth<span style="color:red">*</span>
    [text* CountryBirth class:letters_space] </label>

<label> Alien Registration Number (A-Number) <span style="color:red"> "(Optional)"</span>
    [text ANumber  class:digits class:JVmaxlength-9 class:JVminlength-9]</label>

<label> USCIS Online Account Number <span style="color:red"> "(Optional)"</span>
    [text USCIS class:digits class:alphanumeric class:JVmaxlength-12] </label>

<label> Applicant's Daytime Telephone Number<span style="color:red">*</span>
    [text* DaytimeTelephone class:digits  class:JVmaxlength-10 class:JVminlength-10] </label>

<label> Applicant's Mobile Telephone Number
    [text MobileTelephone class:digits  class:JVmaxlength-10  class:JVminlength-10]</label>

<label>Applicant's Email address</label>
[email Emailaddres]

<b>How did you find us?<span style="color:red">*</span></b>
[radio find use_label_element "Immigration Lawyer" "USCIS website" "Friend or Family referred you" "Google" "Other"]

<b>Have you had an immigration examination done before?<span style="color:red">*</span></b>
[radio examination  use_label_element "Yes. in the U.S" "Yes. outside the U.S." "No"]

<b>Do you have a lawyer/company/organization/agency helping you with your USCIS application?<span style="color:red">*</span></b>
[radio lawyer use_label_element "Yes" "No"]

[group lawyer-1]
<b>What is the name of the lawyer or person helping you with the application?<span style="color:red">*</span></b>
[text lawyer-name]

<b>What is the name of the company, organization, or law firm helping you with your application?<span style="color:red">*</span></b>
[text lawyer-company]

<b>What is the telephone number of the lawyer, person, or agency helping you with your application?<span style="color:red">*</span></b>
[text lawyer-phone class:digits  class:JVmaxlength-10 class:JVminlength-10]
[/group]

[submit "Next"]
</pre>
	<?php
}