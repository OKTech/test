<?php

require ("Entities/UserEntity.php");

class UserModel
{
    function InsertUser(UserEntity $user)
    {
	$query = sprintf("INSERT INTO usersTBL
		(firstname, lastname, email, password, birthday, birthmonth, birthyear, gender)
		VALUES
		('%s', '%s', '%s', '%s', '%d', '%d', '%d', '%d')
		", $user->firstname, $user->lastname, $user->email, $user->password, $user->birthday, $user->birthmonth, $user->birthyear, $user->gender);
	
	$this->PerformQuery($query);
    }
    function isExist($email,$password){
        require 'Models/Credentials_Copy.php';
        $connection=mysqli_connect($host,$username,$password, $database) or die (mysqli_error());
        $query  = 'select * from user';
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        while($row= mysqli_fetch_assoc($result)) {
            if ($row['email'] == $email && $row['password'] == $password) return true;
        }
        return false;
    }

    function SelectUser($email)
    {
            require 'Models/Credentials_Copy.php';
            $connection=mysqli_connect($host,$username,$password, $database) or die (mysqli_error());
            $query  = 'select * from user';
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            while($row= mysqli_fetch_array($result))
            {

                    /*echo $myrow["firstname"];
                    echo "</br>";
                    echo $myrow["lastname"];
                    echo "</br>";
                    echo $myrow["email"];
                    echo "</br>";
                    echo $myrow["password"];*/
                    session.start();
                    // 3awzeen ne7ot el first name wel last name fel session
                    return 1;
            }
            return 0;
    }
    function LoginUser($user){
            return SelectUser($user);
    }

    function UpdateUser(UserEntity $user){
            $query='update usertab set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
            $this->PerformQueryUpdate($query);
    }
    function PerformQueryUpdate($query){
		require 'Models/Credentials_Copy.php';
		$connection = mysqli_connect($host, $username, $password, $database) or die(mysqli_error($connection));
		//mysqli_select_db();
		//echo $query;
		mysqli_query($connection, $query) or die(mysqli_error($connection));
		mysqli_close();
    }
    function PerformQuery($query){
		require 'Models/Credentials.php';
		$connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
		
		mysqli_query($connection, $query) or die(mysqli_error($connection));
		mysqli_close($connection);
    }
}

?>
