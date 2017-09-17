<?php
  //public ,private, protected
  class A {
      public $r = '1';
      private $t = '2';
      protected $g = '3';

      function pp()
      {
        echo "<br>". $this->r;
        echo "<br>". $this->t;
        echo '<br>'. $this->g;
      }
  }
  $test = new A();
  echo '<br>'. $test->pp();
?>