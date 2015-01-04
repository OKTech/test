
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $header = "";
    $title = "Sign In";
    $content_title = "";
    $content = 
'
<div style="font-family:\'Ubuntu\', sans-serif;"><h1 style="color: #2d2d2d; font-size: 36px; font-weight: bold;">Sign In</h1></div>
<pre>
<form  id="form1" name="form_name" action="LoginHome.php" method="post">
<div align="Center">
<input value="" placeholder="Useremail" class="textbox" type="text" name="useremailTXT" id="useremailTXT" oninput="checkNameValidity(\'useremailTXT\', \'Useremail\')" style="width:33%;" required/>
<input value="" type="password" placeholder="Password" class="textbox" type="text" id="passwordTXT" name="passwordTXT" style="width:33%;" required/></div>
<div align="center"><input value="Sign In" type="submit" name="login" class="button" id="login"/></div>
</form></pre>
		<script>
                    $(".textbox[value=\'\']").addClass(\'empty\');
                            $(\'input\').keyup(function(){
                                if( $(this).val() === ""){
                                    $(this).addClass("empty");
                                }else{
                                    $(this).removeClass("empty");
                                }
                            });
                </script>
';

include 'Template/MainTemplate.html';
?>