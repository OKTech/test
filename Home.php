<?php
    
    session_start();
    $header = "";
    $title = "Home";
    $content = "";
    $error_tip="";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(!isset($_SESSION['user_firstname']) && !isset($_SESSION['user_lastname']))
	header("Location: FrontPage.php");
    
    $content_title = "Welcome back ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."!";
    $content = $content."We have been waiting for you since you last visited! :)
	<script>
	    var LINK = 'homeLI';
	</script>
    ";
    
    if(isset($_SESSION['error_tip']) == 1) $_SESSION['error_tip'] = "";

include 'Template/MainTemplate.html';