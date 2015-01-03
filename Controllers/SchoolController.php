<?php

require ("Models/UserModel.php");

class SchoolController {
    
    function InsertSchool()
    {
        $username = $_POST["usenameTXT"];
        $password =  $_POST["passwordTXT"];
	$schoolName = $_POST["schoolnameTXT"];
	$twitter = $_POST["twitterTXT"];
	$facebook = $_POST["facebookTXT"];
	$google = $_POST["googleTXT"];
	$phone = $_POST["phoneTXT"];
	$fax = $_POST["facTXT"];
	$address = $_POST["addressTXT"];
	$country = $_POST["country"];
        $grade = $_POST["grade"]
	
	$school = new SchoolEntity(-1, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender);
	
	$userModel = new UserModel();
	$userModel->InsertUser($user);
    }
}
?>
