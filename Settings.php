
<?php
    $error_tip = "";
    $header = "";
    $title = "Settings";
    $content_title = "Settings";
    $content = 
'
    <div align="center" style="width:60%; padding-left:20%; padding-right:20%;">
	<form action="SettingsValidation.php" method="post">
	    <br/><br/>
	    <input value="" placeholder="First Name" class="textbox empty" type="text" name="firstname" id="firstname" oninput="checkNameValidity(\'firstname\', \'First Name\')" style="width:42%;" required/>
	    <input value="" placeholder="Last Name" class="textbox empty" type="text" name="lastname" id="lastname" oninput="checkNameValidity(\'lastname\', \'Last Name\')" style="width:42%;" required/></br>
	    <input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')" required /></br>
	    <input value="" type="password" placeholder="Old Password" class="textbox empty" type="text" id="passwordold" name="passwordold" required/></br>
	    <input value="" type="password" placeholder="New Password" class="textbox empty" type="text" id="passwordnew" name="passwordnew" oninput="checkPasswordStrength(\'passwordnew\');" required/></br>
	    <input value="" type="password" placeholder="Confirm New Password" class="textbox empty" type="text" id="passwordnew" name="passwordnew"  oninput="checkMatch(\'passwordold\',\'passwordnew\');" required />
	    </br>                     
	    </br>
	    <input value="Save" type="submit" name="button" class="button" id="button"/>
	</form>
    </div>
    
    <script src="js/Validation.js" type="text/javascript"></script>
    <script> var LINK = "settingsLINK"; </script>
';

include 'Template/MainTemplate.html';
?>