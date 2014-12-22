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
		", mysql_real_escape_string($user->firstname), mysql_real_escape_string($user->lastname), mysql_real_escape_string($user->email), mysql_real_escape_string($user->password), mysql_real_escape_string($user->birthday), mysql_real_escape_string($user->birthmonth), mysql_real_escape_string($user->birthyear), mysql_real_escape_string($user->gender));
	
	$this->PerformQuery($query);
    }
    function PerformQuery($query)
    {
	require 'Models/Credentials.php';
	mysql_connect($host, $username, $password) or die(mysql_error());
	mysql_select_db($database);
	
	mysql_query($query) or die(mysql_error());
	mysql_close();
    }
}

?>
