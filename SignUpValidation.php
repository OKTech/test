<?php

    require './Controllers/UserController.php';
    $userController = new UserController();
    
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

    if(!isset($_POST["firstnameTXT"])){$firstname_flag = $EMPTY;}
    if(!isset($_POST["lastnameTXT"])){$lastname_flag = $EMPTY;}
    if(!isset($_POST["emailTXT"])){$email_flag = $EMPTY;}
    if(!isset($_POST["passwordTXT"])){$password_flag = $EMPTY;}
    if(!isset($_POST["birthdaySLCT"])){$birthday_flag = $EMPTY;}
    if(!isset($_POST["birthmonthSLCT"])){$birthmonth_flag = $EMPTY;}
    if(!isset($_POST["birthyearSLCT"])){$birthyear_flag = $EMPTY;}
    if(!isset($_POST["genderRB"])){$gender_flag = $EMPTY;}


    if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK && $birthday_flag == $OK && $birthmonth_flag == $OK && $birthyear_flag == $OK && $gender_flag == $OK)
    {
	$userController->InsertUser();
	//header("Location: RegistrationComplete.php");
    }
    else
    {
	//echo("<script type='text/javascript'> alert('Invalid data! It seems you are trying to hack our javascript validation, and we got you! Hehehehe'); </script>");
	header("Location: FrontPage.php");
    }
	
    include 'Template/MainTemplate.html';
    
    
    

?>