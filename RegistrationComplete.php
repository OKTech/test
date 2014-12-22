<?php

    require './Controllers/UserController.php';
    $userController = new UserController();

    $title = "Home Page";
    $content_title = "Registration Completed Successfully!";
    
    $content = "Just blank for now.";
    
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
    }
    else
    {
	header("Location: Home.php");
    }
	
    include 'Template/Template.php';
    
    
    

    