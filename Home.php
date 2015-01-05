<?php

    session_start();
    $header = "";
    $title = "Home";
    $content = "";
    $tip = "";
    if(!isset($_SESSION['user_firstname']) && !isset($_SESSION['user_lastname']))
	header("Location: FrontPage.php");
    if(isset($_SESSION['error_message']))
	$_SESSION['error_tip'] = '<div style="text-align: center; width:1070px; padding: 10px 10px 10px 10px; margin-left: 100px; margin-right: 100px; margin-top: 20px; margin-bottom:20px;"  class="radioGroup"><label>You cannot access this page, as you are already logged in!</label></div></br></br>';
    
    $content_title = "Welcome back ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."!";
    $content = $content."We have been waiting for you since you last visited! :)
	<script>
	    var LINK = 'homeLI';
	</script>
    ";


include 'Template/MainTemplate.html';