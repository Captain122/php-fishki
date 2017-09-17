<?php
  session_start();
  $answer1 = $_POST['answer1'];
  $_SESSION['answer1'] = $answer1;
  //echo $answer1;
?>
<h2>vopros N2</h2>
<p>1 + 1 =?</p>
<form action = 'test3.php' method='post'>
    <input type='text' name='answer2'/>
    <input type='submit'/>
</form>