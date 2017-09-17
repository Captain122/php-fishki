<?php
  $name1 = 111;
  $name2 = 2222222;

  function test() {
    $name3 = 333333;
    echo $name3;
    
    //var_dump($GLOBALS);
    echo  $GLOBALS[name1];
  }
  test();
?>