<?php
// zabbato ba2a .. yo3tabar php validation and execution for the update
    require './Controllers/UserController.php';
    $userController = new UserController();

    $title = "Log in Profile";
    $content_title = "Log in Successfully!";
    $content = "Just blank for now.";
    
    $EMPTY = 1;
    $WRONG = 2;
    $USED = 3;
    $OK = 4;

    $email_flag = $OK;
    $password_flag = $OK;

    if(!isset($_POST["useremailTXT"])){$email_flag = $EMPTY;}
    if(!isset($_POST["passwordTXT"])){$password_flag = $EMPTY;}
	
    if($email_flag == $OK && $password_flag == $OK )
    {
	$userController->LoginUser();
	header("Location: Home.php");
    }
    else
    {
		header("Location: Login.php");
		echo ' <script type="text/javascript"> alert("The username or password you entered is incorrect! Please enter again");  </script>';
    }
    include 'Template/Template.php';
?>