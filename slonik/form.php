
<?php
    //print_r($_GET);
    if(isset($_GET['submit'])){
        echo 'form send!';
    }
    //$q = $_GET['q'];
    echo $q; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ='utf-8'>
    </head>
    <body>
        <div>
            <form action = 'form.php' method = 'get'>
                q:<input type ='text' name = 'q'> <br>
                b:<input type ='text' name = 'b'> <br>   
                v:<input type ='text' name ='v'> <br>
                <input type ='submit' value = 'Submit' name ='submit'> 
            </form>
        </div>
    </body>
</html>