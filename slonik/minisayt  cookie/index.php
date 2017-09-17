<?php 
   if(isset($_POST['name']) && (!empty($_POST['name']))){
    $name = $_POST['name'];
    setcookie('name',$name);
} elseif(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name ='GHOST';
}

?>
<h1>php cookie index</h1>
<p>hi <?php echo $name; ?></p>
<a href='page.php'>stranica php</a>
<form method='post'>
    <input type='text' name='name' />
    <input type='submit' />
</form>