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
		", mysqli_real_escape_string($user->firstname), mysqli_real_escape_string($user->lastname), mysqli_real_escape_string($user->email), mysqli_real_escape_string($user->password), mysqli_real_escape_string($user->birthday), mysqli_real_escape_string($user->birthmonth), mysqli_real_escape_string($user->birthyear), mysqli_real_escape_string($user->gender));
	
	$this->PerformQuery($query);
    }
	function LoginUser($user)
	{
		return SelectUser($user);
	}
	function SelectUser($user)
	{
		require 'Models/Credentials_Copy.php';
		$connection=mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
		$query  = 'select * from usertab';
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		while($row= mysqli_fetch_array($result))
		{
			session.start();
			// 3awzeen ne7ot el first name wel last name fel session
			return 1;
		}
		return 0;
	}
	function UpdateUser(UserEntity $user)
	{
		$query='update usertab set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
		$this->PerformQueryUpdate($query);
	}
	function PerformQueryUpdate($query)
    {
		require 'Models/Credentials_Copy.php';
		$connection = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
		//mysqli_select_db();
		//echo $query;
		mysqli_query($connection, $query) or die(mysqli_error($connection));
		mysqli_close();
    }
    function PerformQuery($query)
    {
		require 'Models/Credentials.php';
		mysqli_connect($host, $username, $password) or die(mysqli_error());
		mysqli_select_db($database);
		
		mysqli_query($query) or die(mysqli_error());
		mysqli_close();
    }
}

?>
