
<?php

    
    require './Controllers/SchoolController.php';
    $SchoolController = new SchoolController();
    $header = "";
    $title = "School Registration";
    $content_title = "";
    $error_tip="";
    if (!isset($_SESSION['error_message'])) $_SESSION['error_message'] = "";
    //<!--div id = "error_message_div" style="color:red">' .$_SESSION["error_message"]. '</div-->
    $content = '
        
	<div style="float:center;">
        
		
	<!-- multistep form -->
	<form id="msform" action="SchoolRegistrationValidation.php" method="POST" noValidation>
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Account Setup</li>
			<li>School Information</li>
			<li>Personal Details</li>
		</ul>
                <div id = "error_message_div" style="color:red; font-weight:bold; font-size:15px">' .$_SESSION["error_message"]. '</div><br/>
		<!-- fieldsets -->
		<fieldset>
                        <h3 class="fs-subtitle">Personal Identification</h3>
			<input value="" placeholder="Email" class="textbox" type="text" name="emailTXT" id="email" style="width:90%; height:50px" oninput="checkEmailValidity(\'email\')"/>
			<input value="" type="password" placeholder="Password" class="textbox" type="text" id="password" name="passwordTXT" style="width:90%; height:50px"/>
                        
			<input type="button" name="next" class="next action-button" value="Next" id="fnext_id" style="height:40px" />
		</fieldset>
		<fieldset>
                        <h3 class="fs-subtitle">School Information</h3>
			
                        <div>
                            <select name="country" id="day" class="dropdown" style="width:48%; float:left;">
                                    <option>Country</option>
                            </select> 
                            <select name="grade" id="month" class="dropdown" style="width:48%; float:left;">
                                    <option>Grade</option>
                            </select> 
                        </div>
                        </br></br>
                        <input value="" placeholder="School Name" class="textbox" type="text" name="schoolnameTXT" id="schoolname_id" oninput="checkNameValidity(\'schoolname_id\', \'schoolname\')" style="width:100%; height:50px"/>
                        <input value="" placeholder="Twitter Account" class="textbox" type="text" name="twitterTXT" id="twitter_id" oninput="" style="width:100%; height:50px"/>
			<input value="" placeholder="Facebook Page" class="textbox" type="text" name="facebookTXT" id="facebook_id" oninput="" style="width:100%; height:50px"/>
			<input value="" placeholder="Google Plus" class="textbox" type="text" name="googleTXT" id="google_id" oninput="" style="width:100%; height:50px"/>
                        <h3 class="mytext">Profile Picture:
                        <input type="file" name="upload" id="upload_id" value="Profile Picture" style="width:60%"></h3>
                        </br>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" id="snext_id" onClick="nextClick()" />
		</fieldset>
		<fieldset>
			<h3 class="fs-subtitle">Contact Details</h3>

			<input value="" placeholder="Phone" class="textbox" type="text" name="phoneTXT" id="phone" style="width:100%; height:50px" oninput="checkPhoneValidity(\'phone\')"/>
			<input value="" placeholder="Fax" class="textbox" id="fax" type="text" name="faxTXT" id="twitter_id" style="width:100%; height:50px" oninput="checkPhoneValidity(\'fax\')"/>
			<textarea value="" placeholder="Address" class="addresstextarea" type="textarea" name="addressTXT" id="address_id" oninput="" style="width:100%; height:100px"/></textarea>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="submit" name="submit" class="action-button" value="Submit" id="submit_id" />
		</fieldset> 
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                
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
        <script src="js/Validation.js" type="text/javascript"></script>
        <script src="js/School Registration.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/SchoolRegistration.css" type="text/css"/>
		
	    <br style="clear: left;" />
	</div><br style="clear: left;" />

	<script>
            var LINK = "regLI";
        </script>


';
    
    $_SESSION['error_message'] = "";
    
    include 'Template/MainTemplate.html';
?>

