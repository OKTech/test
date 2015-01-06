<?php

require ("../Models/UserModel.php");
    
function InsertUser($user)
{
    $userModel->InsertUser($user);
}
function UpdateUser($user)
{
    $userModel = new UserModel();
    return $userModel -> UpdateUser($user);
}
function LoginUser()
{
    session_start();

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
	extract($_POST);
	$user = new UserEntity(-1, "", "", $email, $password, "", "", "", "");

	if(UserModel::SelectUser($user) == 1)
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
}

if(isset($_GET['functionName']))
{
    $functionName = $_GET['functionName'];
    $functionName();
}
else
{
    $_POST['error_tip'] = 'Sorry something went wrong.';
    if(isset($_POST['user_id']))
	header("Location: Home.php");
    else header("Location: FrontPage.php");
}


?>
