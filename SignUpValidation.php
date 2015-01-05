<?php

    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $error_tip = "";
    $header = "";
    $title = "Home Page";
    $content_title = "Registration Completed Successfully!";
    
    $content = "We have sent you an email to verify your account. Please check your email inbox, and maybe the spam box too.";
    
    $EMPTY = 1;
    $WRONG = 2;
    $USED = 3;
    $OK = 4;

    $firstname_flag = $OK;
    $lastname_flag = $OK;
    $email_flag = $OK;
    $password_flag = $OK;
    $birthday_flag = $OK;
    $birthmonth_flag = $OK;
    $birthyear_flag = $OK;
    $gender_flag = $OK;

    if(!isset($_POST["firstname"])){$firstname_flag = $EMPTY;}
    if(!isset($_POST["lastname"])){$lastname_flag = $EMPTY;}
    if(!isset($_POST["email"])){$email_flag = $EMPTY;}
    if(!isset($_POST["password"])){$password_flag = $EMPTY;}
    if(!isset($_POST["birthday"])){$birthday_flag = $EMPTY;}
    if(!isset($_POST["birthmonth"])){$birthmonth_flag = $EMPTY;}
    if(!isset($_POST["birthyear"])){$birthyear_flag = $EMPTY;}
    if(!isset($_POST["gender"])){$gender_flag = $EMPTY;}


    if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK && $birthday_flag == $OK && $birthmonth_flag == $OK && $birthyear_flag == $OK && $gender_flag == $OK)
    {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$birthday = $_POST["birthday"];
	$birthmonth = $_POST["birthmonth"];
	$birthyear = $_POST["birthyear"];
	$gender = $_POST["gender"];
	
	
	$user = new UserEntity(-1, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender);
	
	
	
	if($userController->InsertUser($user) == null)
	{
	    header("Location: RegistrationComplete.php");
	}
	else
	{
	    $_SESSION['error_message'] = $error_tip = "Something went wrong!";
	    header("Location: FrontPage.php");
	}
    }
    else
    {
	$_SESSION['error_message'] = "You must fill all fields.";
	//echo("<script type='text/javascript'> alert('Invalid data! It seems you are trying to hack our javascript validation, and we got you! Hehehehe'); </script>");
	header("Location: FrontPage.php");
    }
	
    include 'Template/MainTemplate.html';
    
    
    

?>