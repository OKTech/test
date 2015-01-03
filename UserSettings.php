
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $title = "User Settings";
    $content_title = "Settings";
    $content = 
'
<form  id="form1" name="form_name" action="UpdateProfile.php" method="post">
<div align="Center">
<input value="" placeholder="First Name" class="textbox" type="text" name="firstnameTXT" id="firstnameTXT" oninput="checkNameValidity(\'firstnameTXT\', \'First Name\')" style="width:43%;" required/</br>
<input value="" placeholder="Last Name" class="textbox" type="text" name="lastnameTXT" id="lastnameTXT" oninput="checkNameValidity(\'lastnameTXT\', \'Last Name\')" style="width:43%;" required/></br>
<input value="" placeholder="Email" class="textbox" type="text" name="emailTXT" id="emailTXT" oninput="checkEmailValidity(\'emailTXT\')" required /></br>
<input value="" type="password" placeholder="Old Password" class="textbox" type="text" id="id_passwordTXT" name="passwordTXT" required></br>
<input value="" type="password" placeholder="New Password" class="textbox" type="text" id="id_passwordTXT1" name="passwordTXT1" required></br>
<!--<input value="" type="password" placeholder="Confirm New Password" class="textbox" type="text" id="passwordTXT2" name="passwordTXT2"  oninput="validate_Passwords(\'passwordTXT1\',\'passwordTXT2\')"required></div></br>-->                     
</br><div align="center"><input value="save change" type="submit" name="signupBTN" class="signup_button" id="submitBTN"/></div>

</form>';

include 'Template/MainTemplate.html';
?>