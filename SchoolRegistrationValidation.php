
<?php
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
        
        validateUsername($username);
        validatePassword($password);
        
        function validateUsername ($username){
            $len = strlen($username);
            if ($len == 0) return false;
            
            for ($i=0; $i< $len ; $i++){
                if(!ctype_alpha ( $username[$i] ) && !($username[$i] == '_') && !($username[$i] >= '1' && $username[$i] <= '9')){
                    return false;
                }
            }
            return true;
        }
        
        function validatePassword ($password){
            $len = strlen($password);
            if ($len == 0) return false;
            return true;
        }
    
?>

