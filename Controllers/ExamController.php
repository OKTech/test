<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require ("Models/ExamModel.php");
    class ExamController {

        function GetExamProblems(){
            
            $examModel = new ExamModel();
	    $problemTXT = array();
            $problemTXT = $examModel -> GetProblems();
        }
        
    }
?>
