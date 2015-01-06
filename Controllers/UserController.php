<?php

require ("Models/UserModel.php");

class UserController {
    
    function InsertUser($user)
    {
	$userModel = new UserModel();
	$userModel->InsertUser($user);
    }
    function UpdateUser($user)
    {
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
