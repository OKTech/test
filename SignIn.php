
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
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
    $content_title = "";
    $content = 
'
    <h1 style="font-family:\'Ubuntu\', sans-serif; color: #2d2d2d; font-size: 36px; font-weight: bold;">Sign In</h1>
    </br></br>
    <form action="SignInValidation.php" method="post">
	<div align="Center">
	    <input value="" placeholder="Email" class="textbox" type="text" name="email" id="email" style="width:33%;"/>
	    </br>
	    <input value="" type="password" placeholder="Password" class="textbox" id="password" name="password" style="width:33%;"/>
	    </br><pre style="color:red; font-family:\'Ubuntu\', sans-serif; color: #2d2d2d; font-size: 16px;">'.$error_message.'</pre></br>
	    <input value="Sign In" type="submit" class="button"/>
	</div>
    </form>
    <script>
	var LINK = "sininLI";
    </script>
';

include 'Template/MainTemplate.html';
?>