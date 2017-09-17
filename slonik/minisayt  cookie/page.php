<?php 
  if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name ='GHOST';
}

?>
<h1>PaGE PHP</h1>
<p><?php echo $name; ?></p>
<a href='index.php'>stranica php index</a>