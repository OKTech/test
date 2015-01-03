
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
        $photo = $_POST["upload"];
        
        
        function vlidateAll(){
            validateUsername($username);
            validatePassword($password);
            validateCountry($country);
            validateGrade($grade);
            validateSchoolName($schoolName);
            validateSchoolName($twitter);
            validateSchoolName($facebook);
            validateSchoolName($google);
            validatePhone($phone);
            validatePhone($fax);
            validatePhoto();
        }
        
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
        
        function validateCountry ($country){
            if ($country == 'Country') return false;
            return true;
        }
        
        function validateGrade ($grade){
            if ($grade == 'Grade') return false;
            return true;
        }
        
        function validateSchoolName ($schoolName){
            $len = strlen ($schoolName);
            for ($i = 0; $i<$len; $i++){
                if (!ctype_alpha ( $schoolName[$i] ) && $schoolName[$i] != ' '){
                    return false;
                }
            }
            return true;
        }
        
        function isNum ($digit){
            if ($digit >= '0' && $digit <= '9') return true;
            return false;
        }
        
        function validatePhone ($phone){
            $len = strlen($phone);
            if ($len < 8) return false;
            if (!isNum($phone[0]) && $phone[0] != '+') return false;
            for ($i=1; $i<$len; $i++){
                if (!isNum($phone[$i])) return false;
            }
            return true;
        }
        
        function validatePhoto (){
            if (!isset($_POST[$photo])) return false;
            return true;
        }
    
?>

