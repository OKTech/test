<?php
// zabbato ba2a .. yo3tabar php validation and execution for the update
    require './Controllers/UserController.php';
    $userController = new UserController();

    $title = "Update Profile";
    $content_title = "User Updated Successfully!";
    $content = "Just blank for now.";
    
    $EMPTY = 1;
    $WRONG = 2;
    $USED = 3;
    $OK = 4;

    $firstname_flag = $OK;
    $lastname_flag = $OK;
    $email_flag = $OK;
    $password_flag = $OK;

    if(!isset($_POST["firstname"])){$firstname_flag = $EMPTY;}
    if(!isset($_POST["lastname"])){$lastname_flag = $EMPTY;}
    if(!isset($_POST["email"])){$email_flag = $EMPTY;}
    if(!isset($_POST["passwordnew"])){$password_flag = $EMPTY;}
	
    if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK )
    {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	
	$email = $_POST["email"];
	$password = $_POST["passwordnew"];

	$user = new UserEntity(-1, $firstname, $lastname, $email, $password, "", "", "", "");

	$userController->UpdateUser($user);
	header("Location: Home.php");
    }
    else
    {
		header("Location: UserSettings.php");
    }
    include 'Template/Template.php';
?>