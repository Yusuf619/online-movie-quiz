
<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8" />
    	
    <link rel="stylesheet" href="./style.css">
	
	<title>PHP Quiz</title>

</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Your Result</h1>
		
  
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            ?>
            
        
        <!-- //    $answer1 = $_POST['question-1-answers'];
        //    $answer2 = $_POST['question-2-answers'];
        //    $answer3 = $_POST['question-3-answers'];
        //    $answer4 = $_POST['question-4-answers'];
        //    $answer5 = $_POST['question-5-answers'];
        //    $answer6 = $_POST['question-6-answers'];
        //    $answer7 = $_POST['question-7-answers'];
        //    $answer8 = $_POST['question-8-answers'];
        //    $answer9 = $_POST['question-9-answers'];
        //    $answer10 = $_POST['question-10-answers'];
        //    $answer11 = $_POST['question-11-answers'];
        //    $answer12 = $_POST['question-12-answers'];
        //    $answer13 = $_POST['question-13-answers'];
        //    $answer14 = $_POST['question-14-answers'];
        //    $answer15 = $_POST['question-15-answers'];
        //    $answer16 = $_POST['question-16-answers'];
        //    $answer17 = $_POST['question-17-answers'];
        //    $answer18 = $_POST['question-18-answers'];
        //    $answer19 = $_POST['question-19-answers'];
        //    $answer20 = $_POST['question-20-answers'];
        //    $totalCorrect = 0;
        //    if ($answer1 == "A") { $totalCorrect++; }
        //    if ($answer2 == "A") { $totalCorrect++; }
        //    if ($answer3 == "A") { $totalCorrect++; }
        //    if ($answer4 == "A") { $totalCorrect++; }
        //    if ($answer5 == "C") { $totalCorrect++; }
        //    if ($answer6 == "D") { $totalCorrect++; }
        //    if ($answer7 == "D") { $totalCorrect++; }
        //    if ($answer8 == "D") { $totalCorrect++; }
        //    if ($answer9 == "A") { $totalCorrect++; }
        //    if ($answer10 == "D") { $totalCorrect++; }
        //    if ($answer11 == "D") { $totalCorrect++; }
        //    if ($answer12 == "B") { $totalCorrect++; }
        //    if ($answer13 == "D") { $totalCorrect++; }
        //    if ($answer14== "C") { $totalCorrect++; }
        //    if ($answer15 == "B") { $totalCorrect++; }
        //    if ($answer16 == "D") { $totalCorrect++; }
        //    if ($answer17 == "C") { $totalCorrect++; }
        //    if ($answer18 == "D") { $totalCorrect++; }
        //    if ($answer19 == "A") { $totalCorrect++; }
        //    if ($answer20 == "B") { $totalCorrect++; }
           echo "<div id='results'>$totalCorrect / 20 correct</div>";
           if ($totalCorrect< "10") {
               echo "Try harder!";
           } elseif ($totalCorrect == "20") {
               echo "Great Job! , You should go out more lol";
           } else {
               echo "Have a good night!";
           }
             -->
        
	
	</div>
 
</body>
 
</html>