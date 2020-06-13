<?php
session_start();
include('inc/quiz.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <?php
            if($toast){
                echo "<p class='animate__animated animate__fadeOut animate__delay-2s'>" . $toast . "</p>";
            }
            if($show_score == false){
                echo "<p class='breadcrumbs'>Question "
                . count($_SESSION[used_indexes]) 
                . " of " 
                . $totalQuestions
                . "</p>";
                echo "<p class='quiz'>What is "
                . $question['leftAdder'] 
                . " + " 
                . $question['rightAdder']
                . "?</p>";
                echo '<form action="index.php" method="post">';
                echo '<input type="hidden" name="index" value="'
                . $index 
                .'" />';
                echo '<input type="submit" class="btn" name="answer" value="'
                . $answers[0]
                . '" /> ';
                echo '<input type="submit" class="btn" name="answer" value="'
                . $answers[1]
                . '" /> ';
                echo '<input type="submit" class="btn" name="answer" value="'
                . $answers[2]
                . '" /></form>';
            }
            if($show_score == true){
                echo "<p>You got $_SESSION[totalCorrect] out of $totalQuestions correct!</p>";
            }
            
            ?>


            
            
            
            
            
            

        </div>
    </div>
</body>
</html>