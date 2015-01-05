<?php

    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $header = "";
    $title = "Home Page";
    $content_title = "Registration Completed Successfully!";
    $error_tip="";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    $content = "We have sent you an email to verify your account. Please check your email inbox, and maybe the spam box too.";
    
    include 'Template/MainTemplate.html';
    
    if(isset($_SESSION['error_tip']) == 1)$error_tip = "";
    
    
    

?>