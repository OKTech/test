

<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $title = "School Registration";
    $content_title = "";
    $content = '
    <script type="text/javascript" src="js/School Registration.js"></script>
	<div style="float:center;">
		
	<link rel="stylesheet" href="css/progressbar.css" type="text/css" media="all" />
		
	<!-- multistep form -->
	<form id="msform">
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Account Setup</li>
			<li>School Information</li>
			<li>Personal Details</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Create your school account</h2>
			<h3 class="fs-subtitle">Basic Information</h3>
			<input type="text" name="email" placeholder="Email" id="email_id" oninput=onChange() />
			<input type="password" name="pass" id="pass_id" placeholder="Password" oninput="whenPassChange(); onChange()" id="pass_id" />
			<input type="password" name="cpass" placeholder="Confirm Password" id="repass_id"  oninput=onChange()/>
			<input type="button" name="next" class="next action-button" value="Next" id="fnext_id"" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">School Information</h2>
			<input type="text" name="schoolName" placeholder="School Name"> </br></br>
			<select id="selectCountry_id" class="dropdown">
				<option>Select Country</option>
			</select> </br>
			<select id="selectGovernorate_id" class="dropdown">
				<option>Select Governorate</option>
			</select> </br>
			<input type="text" name="twitter" placeholder="Twitter" />
			<input type="text" name="facebook" placeholder="Facebook" />
			<input type="text" name="gplus" placeholder="Google Plus" />
			<input type="text" name="ppic" placeholder="School Logo"> 
			<input type="button" name="uplodeButton" calss="upload_button" value="upload">
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" id="snext_id" onClick="nextClick()" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Confirmation & Personal Details</h2>
			<h3 class="fs-subtitle">We will never sell it</h3>
			<input type="text" name="fname" placeholder="First Name" />
			<input type="text" name="lname" placeholder="Last Name" />
			<input type="text" name="phone" placeholder="Phone" />
			<input type="text" name="fax" placeholder="Fax" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="submit" name="submit" class="submit action-button" value="Submit" />
		</fieldset>
	</form>

	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="js/progressbar.js" type="text/javascript"></script>
	<script src="js/School Registration.js" type="text/javascript"></script>
		
	    <br style="clear: left;" />
	</div><br style="clear: left;" />

	


';
    
    
    
    include 'Template/Template.php';
?>

