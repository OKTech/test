<?php

$user= "root";
$pass= "";
$hostname= "localhost";
$db = @mysql_connect($hostname,$user,$pass) or die ("could not connect to database");
$select = mysql_select_db("",$db);

$username=$_POST['name'];
$useremail=$_POST['email_name'];
$userpassword=$_POST['name_password'];
$usergenter=$_POST['genter'];

#$id, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender

#$username=stripslashes($username);
#$userpassword=stripslashes($userpassword);


#$query="select * from abdo where name='$username' and password='$userpassword'";
//$query="insert into sign_personal values('$username','$userday','$usermonth','$useryear','$useremail','$userpassword','$usergenter')";
$query="update userTBl set $db_username=$username,$db_useremail=$useremail ,........ ";
$result=mysql_query($query);
#$count=mysql_num_rows($result);

  if($result){
    header("location:login_muisc_sucess.php");
  }
  else
  { 
     echo 'there is Error!';
  } 

?>