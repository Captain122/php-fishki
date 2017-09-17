<?php
  session_start();
  $answer3 = $_POST['answer3'];
  $answer1 = $_SESSION['answer1'];
  $answer2 = $_SESSION['answer2'];

  if(($answer1 == 35) && ($answer3 == 3) && ($answer2 == 2)){
      echo 'GOOD!!!!!!!!';
  }else {
      echo'lox';
  }
?>


<p>your results</p>
