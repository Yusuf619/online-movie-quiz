<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link for stylesheet -->
    <link rel="stylesheet" href="css/quiz.css"> 
    <!--  -->
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <!-- Title tag -->
    <title>Quiz questionnaire</title>
</head>
<body >
    <!--Main Navigation-->
    <header>

    <nav class="navbar navbar-expand-lg navbar-dark black">
        <div class="container">
        <a class="navbar-brand" href="#"><strong>Movie Quiz</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#start"> Get started<span class="sr-only"></span></a>
            </li>
        
           
            </ul>
        </div>
        </div>
    </nav>

    <div class="view intro-2">
        <div >
        <div class="mask rgba-black-strong flex-center">
            <div class="container">
            <div class="white-text text-center wow fadeInUp">
                <h2>The Wizard unite quiz</h2>
                <h5>Awakening Your Inner genius</h5>
                <br>
                <p>May The Force Be With You.</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class=" my-5">

    <div class="container">
        <div class="row">
        <div class="col-md-12">
             <!--Initialization step -->
    <h2 id="start">Good Luck!</h2>
    <h4>The quiz is made of 20 qustions , 10 wildlife related questions and 10 historical questions.</p>Choose one answer from the four possible answers </p> <strong>GOOD LUCK!</strong></h4
<?php 
//Wildlife related questionnaires
//Multiple answers for Wildlife questions
$questionnaire = array(
    1 => array(
        'question' => 'Tony stark (Iron-man) "stars" in which movie ?',
        'quessTheAnswer' => array(
            'A' => 'Titanic',
            'B' => 'Start-Wars',
            'C' => 'Iron-man',
            'D' => 'Lion King'
        ),
        'correctAnswer' => 'C'
    ),

    2 => array(
        'question' => 'Which Avenger (besides Thor) is worthy enough to lift Thors hammer?',
        'quessTheAnswer' => array(
            'A' => 'Black Panther',
            'B' => 'Hulk',
            'C' => 'Ant-Man',
            'D' => 'Captain America'
        ),
        'correctAnswer' => 'D'
    ),

    3 => array(
        'question' => 'Which one of these is not an infinity stone?',
        'quessTheAnswer' => array(
            'A' => 'Speed',
            'B' => 'Time',
            'C' => 'Mind',
            'D' => 'Power'
        ),
        'correctAnswer' => 'A'
    ),

    4 => array(
        'question' => 'What is the Hulks real name ?',
        'quessTheAnswer' => array(
            'A' => 'Bruce Wayne',
            'B' => 'Bruce Banner',
            'C' => 'Bruce Lee',
            'D' => 'Bruce Willis'
        ),
        'correctAnswer' => 'B'
    ),

    5 => array(
        'question' => 'Who`s parents did Bucki (The winter shoulder) kill ?',
        'quessTheAnswer' => array(
            'A' => 'Captain America',
            'B' => 'Black-widow',
            'C' => 'Spider-man',
            'D' => 'Iron-man'
        ),
        'correctAnswer' => 'D'
    ),

       6 => array(
        'question' => 'How many kids do Shrek and Fiona have?',
        'quessTheAnswer' => array(
            'A' => 2,
            'B' => 5,
            'C' => 3,
            'D' => 7
        ),
        'correctAnswer' => 'C'
    ),

       7 => array(
        'question' => ' What is the only thing that can save Fiona from her curse?',
        'quessTheAnswer' => array(
            'A' => 'waiting for shrek',
            'B' => 'killing the dragon',
            'C' => 'destroying the castle',
            'D' => 'True loves kiss'
        ),
        'correctAnswer' => 'D'
    ),

       8 => array(
        'question' => 'Who voices Shrek?',
        'quessTheAnswer' => array(
            'A' => 'Mike Meyers',
            'B' => 'Jack Daniels',
            'C' => 'Johnny Depp',
            'D' => 'That guy from family guy'
        ),
        'correctAnswer' => 'A'
    ),

       9 => array(
        'question' => 'Where does the muffin man live?',
        'quessTheAnswer' => array(
            'A' => 'Baker street',
            'B' => 'Durry lane',
            'C' => 'Elm street',
            'D' => 'Wakanda'
        ),
        'correctAnswer' => 'A'
    ),

       10 => array(
        'question' => 'What vegetable are ogres like?',
        'quessTheAnswer' => array(
            'A)' => 'Tomatoes',
            'B)' => 'Potatoes',
            'C)' => "Carrots",
            'D)' => 'Onions'
        ),
        'correctAnswer' => 'D'
    ),
    //End of wildlife questions

    //History related questionnaires

        11 => array(
        'question' => 'Who directed "Back to the Future?',
        'quessTheAnswer' => array(
            'A)' => 'Robert Zemeckis',
            'B)' => 'Steven Spielberg',
            'C)' => "George Lucas",
            'D)' => "Larry King"
        ),
        'correctAnswer' => 'A'
    ),

           12 => array(
        'question' => 'Steven Spielberg did get a credit on the film, though. What was it?',
        'quessTheAnswer' => array(
            'A)' => 'writer',
            'B)' => 'Special Friend',
            'C)' => 'producer',
            'D)' => 'Team Captain'
        ),
        'correctAnswer' => 'C'
    ),

           13 => array(
        'question' => 'What Huey Lewis song is featured in the first film?',
        'quessTheAnswer' => array(
            'A)' => 'I Want a New Drug',
            'B)' => 'he Power of Love',
            'C)' => 'Hip to be Square',
            'D)' => 'I got questions'
        ),
        'correctAnswer' => 'A'
    ),

           14 => array(
        'question' => 'Who was originally cast as Marty McFly?',
        'quessTheAnswer' => array(
            'A)' => 'Ricky Schroeder',
            'B)' => 'Eric Stoltz',
            'C)' => 'Corey Feldman',
            'D)' => 'Bruce Willis'
        ),
        'correctAnswer' => 'A'
    ),

            15 => array(
        'question' => 'What is Doc Browns dogs name?',
        'quessTheAnswer' => array(
            'A)' => 'Edison',
            'B)' => 'Tesla',
            'C)' => 'Einstein',
            'D)' => 'Bobo'
        ),
        'correctAnswer' => 'C'
    ),

           16 => array(
        'question' => 'Which religion is referenced in The Matrix trilogy?',
        'quessTheAnswer' => array(
            'A)' => 'Buddhism',
            'B)' => 'Gnosticism',
            'C)' => 'Christianity',
            'D)' => 'All of the above'
        ),
        'correctAnswer' => 'D'
    ),

            17 => array(
        'question' => 'How does the Nebuchadnezzar initially contact Neo? ',
        'quessTheAnswer' => array(
            'A)' => 'Through the white rabbit',
            'B)' => 'Through his home computer',
            'C)' => 'Through a cell phone at work',
            'D)' => 'Through an analog phone booth'
        ),
        'correctAnswer' => 'B'
    ),

           18 => array(
        'question' => 'Who persistently refers to Neo as Mr. Anderson?',
        'quessTheAnswer' => array(
            'A)' => 'Agent Smith',
            'B)' => 'The Oracle',
            'C)' => 'Cypher',
            'D)' => 'Commander Lock'
        ),
        'correctAnswer' => 'A'
    ),

           19 => array(
        'question' => 'How does Trinity resurrect Neo, when he dies in The Matrix?',
        'quessTheAnswer' => array(
            'A)' => 'She enters the Matrix and defeats Agent Smith',
            'B)' => 'She kisses him',
            'C)' => 'She gives Neo CPR on the Nebuchadnezzar',
            'D)' => 'She gives laughs'
        ),
        'correctAnswer' => 'B'
    ),

           20 => array(
        'question' => 'Who makes a deal with Agent Smith to sell out Morpheus in The Matrix?',
        'quessTheAnswer' => array(
            'A)' => 'Agent Brown',
            'B)' => 'Mouse',
            'C)' => "The Oracle'",
            'D)' => 'Cypher'
        ),
        'correctAnswer' => 'D'
    ),
    
    
    //Multiple answers for Wildlife questions
    //End of history related questionnaires
);
    //getting user input
?>
    <!-- form to record user input -->
<form action="index.php" method="post">
    <?php 
        foreach ($questionnaire as $numbers => $values) {
     ?>
     
     <!-- Nesting Php in Html tags -->
    <p><?php echo "$numbers " . $values['question'] ?></p>

    <?php
        foreach ($values['quessTheAnswer'] as $key=> $value) {
            $new_key = str_replace(")","",$key);

            echo<<<END

            <input type="radio" name='$numbers' onclick="handleOnChange()" value="$new_key" />
            <span> $value</span><br>

END;
    ?>
        
           
        
    <?php
    }
    ?>
    <br>
     
    <?php
     
    }

    ?>
   
    
    <input type="submit" name="submit" value="Submit Quiz" >

</form>
<?php
    if (isset($_POST['submit'])){
        $total = 0;
        for($n=1;$n <= count($questionnaire);$n++){
            $correct_answer =($questionnaire[$n]['correctAnswer']);
            $name = "$n";
            $user_input = $_POST[$name];
           
        
            if($correct_answer == $user_input){

                $total++;
            }
            else{
                // echo 'wrong';
            }
        }
         echo "<p>"."Your score is ".$total. " / 20"."</p>";
         if($total <= 9 ){
             echo "Try again";
         } else {
             echo"Well Done!";
         }
        
    }

?>
<!-- End of form -->
        </div>
        </div>
    </div>

    </main>
    <!--Main Layout-->
</body>

</html>