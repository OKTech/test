
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $error_tip = "";
    $header = "";
    $title = "User Settings";
    $content_title = "Settings";
    $content = 
'
<form  id="form1" name="form_name" action="SettingsValidation.php" method="post">
<div align="Center">
    <input value="" placeholder="First Name" class="textbox" type="text" name="firstname" id="firstname" oninput="checkNameValidity(\'firstname\', \'First Name\')" style="width:43%;" required/>
    <input value="" placeholder="Last Name" class="textbox" type="text" name="lastname" id="lastname" oninput="checkNameValidity(\'lastname\', \'Last Name\')" style="width:43%;" required/></br>
    <input value="" placeholder="Email" class="textbox" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')" required /></br>
    <input value="" type="password" placeholder="Old Password" class="textbox" type="text" id="passwordold" name="passwordold" required/></br>
    <input value="" type="password" placeholder="New Password" class="textbox" type="text" id="passwordnew" name="passwordnew" required/></br>
    <input value="" type="password" placeholder="Confirm New Password" class="textbox" type="text" id="passwordnew" name="passwordnew"  oninput="validate_Passwords(\'passwordold\',\'passwordnew\')"/></div></br>                     
</br><div align="center"><input value="Save" type="submit" name="button" class="button" id="button"/></div>

</form>

<script src="js/Validation.js" type="text/javascript"></script>
';

include 'Template/MainTemplate.html';
?>