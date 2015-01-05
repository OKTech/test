
<?php
    require './Controllers/UserController.php';
    $userController = new UserController();
    
    session_start();
    $header = "";
    $tip = "";
    $error_message = "";
    $error_tip = "";
    $title = "Sign In";
    $content_title = "";
    $content = "";
    if(isset($_SESSION['user_firstname']))
    {
	session_destroy();
	session_start();
	$_SESSION['error_tip'] = 'Bye bye! :)';
	header("Location: FrontPage.php");
    }
    else
    {
	$_SESSION['error_tip'] = 'You are not signed in!';
	header("Location: FrontPage.php");
    }
    
include 'Template/MainTemplate.html';
?>