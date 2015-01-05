<?php

require ("Models/UserModel.php");

class UserController {
    
    function InsertUser($user)
    {
	$userModel = new UserModel();
	$userModel->InsertUser($user);
    }
    function UpdateUser()
    {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$user = new UserEntity(-1, $firstname, $lastname, $email, $password, "", "", "", "");

	$userModel = new UserModel();
	return $userModel -> UpdateUser($user);
    }
    function LoginUser($user)
    {
	    $userModel = new UserModel($user);
	    return $userModel -> LoginUser($user);
    }
}
?>
