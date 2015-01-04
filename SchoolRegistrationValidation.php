
<?php
        $username=""; $password=""; $schoolname=""; $twitter=""; $facebook=""; $google=""; $phone=""; $fax=""; $address=""; $country=""; $grade=""; $photo="";
	
        if (isset($_POST["usernameTXT"]))
            $username = $_POST["usernameTXT"];
        if (isset($_POST["passwordTXT"]))
            $password =  $_POST["passwordTXT"];
        if (isset($_POST["schoolnameTXT"]))
            $schoolName = $_POST["schoolnameTXT"];
        if (isset($_POST["twitterTXT"]))
            $twitter = $_POST["twitterTXT"];
        if (isset($_POST["facebookTXT"]))
            $facebook = $_POST["facebookTXT"];
        if (isset($_POST["googleTXT"]))
            $google = $_POST["googleTXT"];
        if (isset($_POST["phoneTXT"]))
            $phone = $_POST["phoneTXT"];
        if (isset($_POST["faxTXT"]))
            $fax = $_POST["faxTXT"];
        if (isset($_POST["addressTXT"]))
            $address = $_POST["addressTXT"];
        if (isset($_POST["country"]))
            $country = $_POST["country"];
        if (isset($_POST["grade"]))
            $grade = $_POST["grade"];
        if (isset($_POST["upload"]))
            $photo = $_POST["upload"];
        validateAll($username,$password,$schoolName,$twitter,$facebook,$google,$phone,$fax,$address,$country,$grade,$photo);
        
        function validateAll($username,$password,$schoolName,$twitter,$facebook,$google,$phone,$fax,$address,$country,$grade,$photo){
            $res1 = validateUsername($username);
            $res2 = validatePassword($password);
            $res3 = validateCountry($country);
            $res4 = validateGrade($grade);
            $res5 = validateSchoolName($schoolName);
            $res6 = validateSchoolName($twitter);
            $res7 = validateSchoolName($facebook);
            $res8 = validateSchoolName($google);
            $res9 = validatePhone($phone);
            $res10 = validatePhone($fax);
            $res11 = validatePhoto($photo);
            if (!$res1 || !$res2 || !$res3 || !$res4 || !$res5 || !$res6 || !$res7 || !$res8 || !$res9 || !$res10 || !$res11){   
                header("Location: SchoolRegistration.php");   
            }
            
            /*echo $res1;
            echo $res2;
            echo $res3;
            echo $res4;
            echo $res5;
            echo $res6;
            echo $res7;
            echo $res8;
            echo $res9;
            echo $res10;
            echo $res11;*/
 
        }
        
        function validateUsername ($username){
            
            $len = strlen($username);
            if ($len == 0) return false;
            
            for ($i=0; $i< $len ; $i++){
                if(!ctype_alpha ( $username[$i] ) && !($username[$i] == '_') && !($username[$i] >= '1' && $username[$i] <= '9')){
                    return false;
                }
            }
            echo "Username true\n";
            return true;
        }
        
        function validatePassword ($password){
            $len = strlen($password);
            if ($len == 0) return false;
            echo "password true\n";
            return true;
        }
        
        function validateCountry ($country){
            if ($country == 'Country') return false;
            echo "Country true\n";
            return true;
        }
        
        function validateGrade ($grade){
            if ($grade == 'Grade') return false;
            echo "Grade true\n";
            return true;
        }
        
        function validateSchoolName ($schoolName){
            $len = strlen ($schoolName);
            if ($len == 0) return false;
            for ($i = 0; $i<$len; $i++){
                if (!ctype_alpha ( $schoolName[$i] ) && $schoolName[$i] != ' '){
                    return false;
                }
            }
            echo "School Name true\n";
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
            echo "Phone true\n";
            return true;
        }
        
        function validatePhoto ($photo){
            if (isset($_POST["upload"])) return true;
            return false;
        }
    
?>

