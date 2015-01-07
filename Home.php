<?php
    
    session_start();
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    if(!isset($_SESSION['user_id']))
	header("Location: FrontPage.php");
    
    $title = "Home";
    $content_title = "Welcome back ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."!";
    $content = 'We have been waiting for you since you last visited! :)
	
    <script>var LINK = "homeLINK";</script>
    ';
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";

    include 'Template/MainTemplate.html';