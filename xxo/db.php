<?php

require "libs/rb.php";

  R::setup( 'mysql:host=localhost;dbname=anon',
        'root', '' );;

        session_start();
?>