

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
                        <h3 class="fs-subtitle">Personal Identification</h3>
			<input value="" placeholder="Username" class="textbox" type="text" name="usernameTXT" id="username_id" oninput="checkNameValidity(\'username_id\', \'username\')" style="width:90%; height:50px" required/>
			<input value="" type="password" placeholder="Password" class="textbox" type="text" name="passwordTXT" style="width:90%; height:50px" required>
			<input type="button" name="next" class="next action-button" value="Next" id="fnext_id" style="height:40px" />
		</fieldset>
		<fieldset>
                        <h3 class="fs-subtitle">School Information</h3>
			
                        <div>
                            <select id="selectCountry_id" class="dropdown" class="birthday_homepage" style="width:50%; float:left;">
                                    <option>Country</option>
                            </select> 
                            <select id="grade_id" class="dropdown" class="birthday_homepage" style="width:50%; float:left;">
                                    <option>Grade</option>
                            </select> 
                        </div>
                        </br></br>
                        <input value="" placeholder="School Name" class="textbox" type="text" name="schoolnameTXT" id="schoolname_id" oninput="checkNameValidity(\'schoolname_id\', \'schoolname\')" style="width:100%; height:50px" required/>
                        <input value="" placeholder="Twitter Account" class="textbox" type="text" name="twitterTXT" id="twitter_id" oninput="" style="width:100%; height:50px" required/>
			<input value="" placeholder="Facebook Page" class="textbox" type="text" name="facebookTXT" id="facebook_id" oninput="" style="width:100%; height:50px" required/>
			<input value="" placeholder="Google Plus" class="textbox" type="text" name="googleTXT" id="google_id" oninput="" style="width:100%; height:50px" required/>
			<input value="" placeholder="" class="textbox" type="text" name="picTXT" id="pic_id" oninput="" style="width:100%; height:50px;" required/>
			<input type="button" name="uplodeButton" calss="upload_button" value="upload" style="width:50%;"></br>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" id="snext_id" onClick="nextClick()" />
		</fieldset>
		<fieldset>
			<h3 class="fs-subtitle">Contact Details</h3>

			<input value="" placeholder="Phone" class="textbox" type="text" name="phoneTXT" id="phone_id" oninput="" style="width:100%; height:50px" required/>
			<input value="" placeholder="Fax" class="textbox" type="text" name="faxTXT" id="twitter_id" oninput="" style="width:100%; height:50px" required/>
			<textarea value="" placeholder="Address" class="textbox" type="textarea" name="addressTXT" id="address_id" oninput="" style="width:100%; height:100px" required/></textarea>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="submit" name="submit" class="submit action-button" value="Submit" />
		</fieldset>
	</form>
        <script>
            $("input[value=\'\']").addClass(\'empty\');
            $(\'input\').keyup(function(){
            if( $(this).val() === ""){
                $(this).addClass("empty");
            }else{
                $(this).removeClass("empty");
            }
            });
        </script>
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="js/progressbar.js" type="text/javascript"></script>
        <script src="js/FrontPageValidation" type="text/javascript"></script>
	<script src="js/SchoolRegistration.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/SchoolRegistration.css" type="text/css"/>
		
	    <br style="clear: left;" />
	</div><br style="clear: left;" />

	


';
    
    
    
    include 'Template/FrontPageTemplate.html';
?>

