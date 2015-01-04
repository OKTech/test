<?php

    require ("Entities/SchoolEntity.php");
    
    class SchoolModel {
        
        function InsertSchool(SchoolEntity $school){
            $query = sprintf("INSERT INTO school
		(user_id, name, country, grade, facebook, twitter, google, phone, fax, address)
		VALUES
		('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
		",1 , $school->schoolname, $school->country, $school->grade, $school->facebook, $school->twitter, $school->google, $school->phone, $school->fax, $school->address);
	
            $this->PerformQuery($query);
        }
	/*function SelectSchool($school)
	{
		require 'Models/Credentials_Copy.php';
		$connection=mysqli_connect($host,$username,$password, $database) or die (mysqli_error());
		$query  = 'select * from schoolsTBL';
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		while($row= mysqli_fetch_array($result))
		{
			/*echo $myrow["schoolName"];
			echo "</br>";
			echo $myrow["lastname"];
			echo "</br>";
			echo $myrow["email"];
			echo "</br>";
			echo $myrow["password"];*/
			//session.start();
			// 3awzeen ne7ot el first name wel last name fel session
			//return 1;
		//}
		//return 0;
	//}*/

	
	/*function UpdateSchool(UserEntity $school)
	{
            $query='update schoolsTBL set schoolName="'.$school->schoolName.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where schoolname="'.$school->schoolName.'"';
            $this->PerformQueryUpdate($query);
	}
	function PerformQueryUpdate($query)
        {
            require 'Models/Credentials_Copy.php';
            $connection = mysqli_connect($host, $username, $password, $database) or die(mysqli_error($connection));
            //mysqli_select_db();
            //echo $query;
            mysqli_query($connection, $query) or die(mysqli_error($connection));
            mysqli_close();
        }*/
        function PerformQuery($query){
            require 'Models/Credentials.php';
            $connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());

            mysqli_query($connection, $query) or die(mysqli_error($connection));
            mysqli_close($connection);
        }
        
        
    }



?>