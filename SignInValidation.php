<?php
// zabbato ba2a .. yo3tabar php validation and execution for the update
    require './Controllers/UserController.php';
    $userController = new UserController();
    
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
	else header("Location: SignIn.php");
    }
    else
    {
	header("Location: SignIn.php");
	echo ' <script type="text/javascript"> alert("The username or password you entered is incorrect! Please enter again");  </script>';
    }
    include 'Template/MainTemplate.html';
?>