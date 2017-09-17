<?php
 require "db.php";

$data =$_POST;
 if (isset($data["do_signup"]))
 $errors = array();
 {
   if(trim($data["login"]) == "")
   {
    $errors[] ="login please";
   }
   if(trim($data["email"]) == "")
   {
    $errors[] ="email please";
   }
   if($data["password"]=="")
   {
    $errors[] ="password please";
   }
   if($data["password_2"] != $data["password"])
   {
    $errors[] ="sxal ka";
   }
 if( R::count('users','login = ?',array($data['login'])) > 0 )
   {
    echo("senc login ka");
   }
   if(R::count('users','email = ?',array($data['email'])) > 0 )
   {
    echo("senc email  ka");
   }
   if(empty($errors))
   {
    // ok
    $user = R::dispense('users');
    $user->login = $data['login'];
    $user->email = $data['email'];
    $user->password =password_hash($data["password"],PASSWORD_DEFAULT);
    
    R::store($user);
    echo 'exav';
   }else
   {
    echo '<div>'.array_shift($errors).'</div>';    
   }
 }

?>
<form action="/signup.php" method="POST">
    <div>
        <p><strong>your login</strong></p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </div>   
     <div>
        <p><strong>your email</strong></p>
        <input type="email" name="email" value="<?php echo @$data['email']; ?>">
    </div> 
     <div>
        <p><strong>your password</strong></p>
        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </div>    
    <div>
        <p><strong>repeate your password </strong></p>
        <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
    </div>    
    <p>
        <button type="submit" name="do_signup">registration</button>
    </p>
</form>