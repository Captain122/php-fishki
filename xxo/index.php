<?php
    require "db.php";
?>

<?php if (isset($_SESSION['logged_user'])): ?>
  avtorizovan</br>
  privet lox <?php echo $_SESSION['logged_user']->login; ?>
  <hr>
  <a href="logout.php">durs helnel</a>
<?php  else : ?>
    <a href="/login.php">avtorizacia</a></br>
    <a href="/signup.php">registracia</a>
<?php endif?>