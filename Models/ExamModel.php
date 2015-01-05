<?php

require ("Entities/ExamEntity.php");

    class ExamModel {
        
        function GetProblems(){
            session_start();
            $userID = $_SESSION['user_id'];
            
            $query1  = 'select * from exampaper where studentid='.$userID; 
            
            $result = $this->PerformQuery($query1);

            if($result == null) return "";
            
            $problemTXT = array();
            
            while ($row1= mysqli_fetch_array($result)){
                $query  = 'select * from problem where examid='.$row1['examid'];
                $result2 = $this->PerformQuery($query);

                if($result2 == null) return "";
                $problemTXT;
                $i = 0;
                while($row = mysqli_fetch_array($result2)){
                    
                    $problemTXT[$i] = $row['text'];
                    echo '<script type="text/javascript"> alert("here5 '.$problemTXT[$i].'"); </script>';
                    $i ++;
                }
                
                return $problemTXT;
            }
            
            return "";
        }
        
        function PerformQuery($query){
            require("Models/Credentials.php");
            $connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            mysqli_close($connection);
            return $result;
        }
    }

?>

