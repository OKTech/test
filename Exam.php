<?php
require './Controllers/ExamController.php';
$examController = new ExamController();

$header = "";
$title = "Exam";
$content_title = "";
$content = '
    <form action="ExamController.php" method="post">
        <div class="ExamPaper" >'
            .$examController ->GetExamProblems().
        '
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