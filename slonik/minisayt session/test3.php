<?php
  session_start();
  $answer2 = $_POST['answer2'];
  $_SESSION['answer2'] = $answer2;
  //echo $answer2;
?>
<h2>vopros n3</h2>
<p>4 -1 = ?</p>
<form action = 'result.php' method='post'>
    <input type='text' name='answer3'/>
    <<input type='submit'/>
</form>