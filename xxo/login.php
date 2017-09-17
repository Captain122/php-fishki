<?php
    require "db.php";

    $data =$_POST;
    if (isset($data["do_login"]) )
    {
        $errors = array();
        $user =R::findOne('users','login = ?', array($data['login']));
        if ($user)
        {
            if(password_verify($data['password'], $user->password) )
             {
                $_SESSION['logged_user'] = $user;
               echo "index.php";
            }else{
                $errors[]="parol nepravilno vveden";
            }
        }else
        {
            $errors[] ="chka log";
        }

        if( ! empty($errors))
         {
             echo '<div>'.array_shift($errors).'</div>';    
        }
    }
?>
<form action="login.php" method="POST">
    <div>
        <a>welcome</a>
        <p><strong>Login</strong></p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </div>  
    <div>
        <p><strong>password</strong></p>
        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </div>  
    <p>
        <button type="submit" name="do_login">mtnel</button>
    </p>
</form>