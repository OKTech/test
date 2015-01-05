<?php

    session_start();
    $header = "";
    $title = "Home";
    if(!isset($_SESSION['user_firstname']) && !isset($_SESSION['user_lastname']))
	header("Location: FrontPage.php");
    
    $content_title = "Welcome back ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."!";
    $content = "We have been waiting for you since you last visited! :)
	<script>
	    var LINK = 'homeLI';
	</script>
    ";


include 'Template/MainTemplate.html';