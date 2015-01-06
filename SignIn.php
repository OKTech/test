
<?php
    session_start();
    $header = "";
    $tip = "";
    $error_message = "";
    $error_tip = "";
    if(isset($_SESSION['user_firstname']))
    {
	$_SESSION['error_tip'] = 'You cannot access this page, as you are already logged in!';
	header("Location: Home.php");
    }
    if(isset($_SESSION['error_message']) == 1) $error_message = $_SESSION['error_message'];
    $title = "Sign In";
    $content_title = "Sign In";
    $content = 
'
    <div align="Center">
	<form action="Controllers/UserController.php?functionName=LoginUser" method="post">
	    </br></br>
	    <input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" style="width:33%;" required />
	    </br>
	    <input value="" type="password" placeholder="Password" class="textbox empty" id="password" name="password" style="width:33%;" required/>
	    </br>
	    <label style="color:red; font-weight:bold; font-size:15px">'.$error_message.'</label>
	    </br></br>
	    <input value="Sign In" type="submit" class="button"/>
    </form>
    </div>
    
    <script src="js/Validation.js" type="text/javascript"></script>
    <script> var LINK = "signinLINK"; </script>
';

include 'Template/MainTemplate.php';
?>