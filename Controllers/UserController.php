<?php

require ("Models/UserModel.php");

class UserController {
    
    function InsertUser()
    {
	$firstname = $_POST["firstnameTXT"];
	$lastname = $_POST["lastnameTXT"];
	$email = $_POST["emailTXT"];
	$password = $_POST["passwordTXT"];
	$birthday = $_POST["birthdaySLCT"];
	$birthmonth = $_POST["birthmonthSLCT"];
	$birthyear = $_POST["birthyearSLCT"];
	$gender = $_POST["genderRB"];
	
	$user = new UserEntity(-1, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender);
	
	$userModel = new UserModel();
	$userModel->InsertUser($user);
    }
	function UpdateUser()
	{
		$firstname=$_POST['firstnameTXT'];
		$lastname=$_POST['lastnameTXT'];
		$email=$_POST['emailTXT'];
		$password=$_POST['passwordTXT1'];
		
		$user = new UserEntity(-1, $firstname, $lastname, $email, $password, "", "", "", "");
		
		$userModel = new UserModel();
		$userModel->UpdateUser($user);
	}
}
?>
