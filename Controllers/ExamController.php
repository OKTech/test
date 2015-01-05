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
            $htmlCode = '<div >
                    <h1 class="capitalize" > Web 12th Exam </h1>
                </div>';
            
            for ($i = 0; $i < sizeof($problemTXT); $i++) {
                
                $htmlCode = $htmlCode.
                '
                
                <div style="text-align: left; padding-top: 20px;">
                    <h4> '.($i+1).'.'.$problemTXT[$i].'</h4> 
                </div>
                <textarea placeholder="Write your answer here!" class="textarea" type="textarea" name="answerN'.$i.'" id="answer'.$i.'" style="width:90%;height:100px;"/>
                </textarea>
                ';
                                     
                echo '<script type="text/javascript"> alert("here2 '.$i.'"); </script>';
            } 
            
            
            return $htmlCode;
        }
        
    }
?>
