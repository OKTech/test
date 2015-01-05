<?php

require ("Entities/ExamEntity.php");
    
    class ExamModel {
        
        function GetProblems(){
            $userID = $_SESSION['userid'];
            $query  = 'select examid from exampaper where userid="'.$userID;
            $examID = $this->PerformQuery($query);
            if($examID == null) return "";
            
            $query  = 'select text from problem where examid="'.$examID;
            
            $problemTXT = array();
            while($row = mysql_fetch_assoc($query)){
              $array[] = $row['text'];
            }
            
            return $problemTXT;
        }
        
        function PerformQuery($query){
            require 'Models/Credentials.php';
            $connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            mysqli_close($connection);
            return $result;
        }
    }

?>

