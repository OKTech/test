<?php

require ("Models/UserModel.php");

class UserController {
    
    function InsertUser()
    {
	/*$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$birthday = $_POST["birthday"];
	$birthmonth = $_POST["birthmonth"];
	$birthyear = $_POST["birthyear"];
	$gender = $_POST["gender"];*/
	var_dump($_POST);
	
	$user = new UserEntity(-1, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender);
	
	$userModel = new UserModel();
	$userModel->InsertUser($user);
    }
	function UpdateUser()
	{
	    /*
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
*/
	    var_dump($_POST);
		$user = new UserEntity(-1, $firstname, $lastname, $email, $password, "", "", "", "");
		
		$userModel = new UserModel();
		return $userModel -> UpdateUser($user);
	}
	function LoginUser()
	{
		/*$email = $_POST['email'];
		$password = $_POST['password'];
		*/
		var_dump($_POST);
		$user = new UserEntity(-1, "", "", $email, $password, "", "", "", "");
		$userModel = new UserModel();
		return $userModel -> SelectUser($user);
	}
}
?>
