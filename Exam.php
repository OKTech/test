<?php

$header = "";
$title = "Exam";
$content_title = "";
$content = '
    <form action="ExamController.php" method="post">
        <div class="ExamPaper" >
            <div >
                <h1 class="capitalize" > Web 12th Exam </h3>
                <div style="text-align: left; padding-top: 20px;">
                        <h4> 1. Given 8 space-separated integers, find the sum of those in even places and the sum of those in odd places. Note: Even place means the 2nd, 4th, 6th or 8th numbers, while odd places are the 1st, 3rd, 5th and 7th numbers.</p></td> 
                </div>
            </div>
            <textarea placeholder="Write your answer here!" class="textarea" type="textarea" name="answer" id="answer" style="width:90%;height:100px;"/>
            </textarea>
            <div>
                <input value="Submit Answers" type="submit" class="button"/>
            </div>
        </div>
        
    </form>
    <link rel="stylesheet" href="css/exam.css" type="text/css"/>
   

    <script>
        var LINK = "homeLI";
    </script>
';


include 'Template/MainTemplate.html';