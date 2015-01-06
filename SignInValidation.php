<?php
    
    $userController = new UserController();
    
    session_start();
    $header = "";
    $title = "Sign In Validation";
    $content_title = "You are signed in successfully!";
    $content = "";
    
    $EMPTY = 1;
    $WRONG = 2;
    $USED = 3;
    $OK = 4;

    $email_flag = $OK;
    $password_flag = $OK;

    if(!isset($_POST["email"])){$email_flag = $EMPTY;}
    if(!isset($_POST["password"])){$password_flag = $EMPTY;}
    
    
    if($email_flag == $OK && $password_flag == $OK)
    {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new UserEntity(-1, "", "", $email, $password, "", "", "", "");
	
	if($userController->LoginUser($user) == 1)
	    header("Location: Home.php");
	else
	{
	    $_SESSION['error_message'] = "Wrong email or password.";
	    header("Location: SignIn.php");
	}
    }
    else
    {
	$_SESSION['error_tip'] = "You must enter the email and password fields.";
	header("Location: SignIn.php");
    }
    include 'Template/MainTemplate.php';
?>