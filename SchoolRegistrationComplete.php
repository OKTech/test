<?php

    require './Controllers/UserController.php';
    $userController = new UserController();
    
    $header = "";
    $title = "Home Page";
    $error_tip="";
    $content_title = "</br></br></br></br></br>You Have Successfuly Registered Your School!";
    
    $content = "</br></br></br></br></br></br></br></br></br></br>";
    
    
	
    include 'Template/MainTemplate.html';
    
    
    

?>