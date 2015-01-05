
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
	header("Location: FrontPage.php");
    }
    else
    {
	header("Location: FrontPage.php");
    }
    
include 'Template/MainTemplate.html';
?>