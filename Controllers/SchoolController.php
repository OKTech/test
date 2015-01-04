<?php

require ("Models/SchoolModel.php");
session_start();
class SchoolController {
    
    function InsertSchool()
    {
        $username = $_POST["usernameTXT"];
        $password =  $_POST["passwordTXT"];
	$schoolName = $_POST["schoolnameTXT"];
	$twitter = $_POST["twitterTXT"];
	$facebook = $_POST["facebookTXT"];
	$google = $_POST["googleTXT"];
	$phone = $_POST["phoneTXT"];
	$fax = $_POST["faxTXT"];
	$address = $_POST["addressTXT"];
	$country = $_POST["country"];
        $grade = $_POST["grade"];
        $user_id = $_SESSION['user_id'];
	
	$school = new SchoolEntity (-1,$user_id, $username, $schoolName, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address);
	
	$schoolModel = new SchoolModel();
	$schoolModel->InsertSchool($school);
    }
}
?>
