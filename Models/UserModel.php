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
	
	;
    }
    function isExist($email,$password){
        $query  = 'select * from user';
        $result = $this->PerformQuery($query);
        while($row= mysqli_fetch_array($result)) {
            echo '<script type="text/javascript">alert("' .$row["email"]. '")</script>';
            echo '<script type="text/javascript">alert("")</script>';
            if ($row['email'] == $email && $row['password'] == $password){               
                echo '<script type="text/javascript">alert("FOUND");</script>';
                return true;
            }
        }
        echo '<script type="text/javascript">alert("NOT FOUND");</script>';
        return false;
    }

    function SelectUser($email)
    {
            $query  = 'select * from user where email="'.$email.'";';
            $result = $this->PerformQuery($query);
            while($row= mysqli_fetch_array($result))
            {
                    session.start();
		    $_SESSION['user_id'] = $row['id'];
		    $_SESSION['user_firstname'] = $row['firstname'];
		    $_SESSION['user_lastname'] = $row['lastname'];
		    $_SESSION['user_email'] = $row['email'];
		    $_SESSION['user_gender'] = $row['gender'];
		    $_SESSION['user_birthday'] = $row['birthday'];
		    $_SESSION['user_birthday'] = $row['birthmonth'];
		    $_SESSION['user_birthday'] = $row['birthyear'];
                    return 1;
            }
            return 0;
    }
    function UpdateUser(UserEntity $user){
            $query='update user set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
            $this->PerformQuery($query);
    }
    function PerformQuery($query){
		require 'Models/Credentials.php';
		$connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
		
		mysqli_query($connection, $query) or die(mysqli_error($connection));
		mysqli_close($connection);
    }
}

?>
