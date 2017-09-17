<?php
 
    $conn = mysqli_connect("localhost","root","","test1");
    mysqli_set_charset($conn,'utf8');
    //check connection
    if (mysqli_connect_errno() ){
        echo 'connect problem' . mysqli_connect_error();
    }
    //insert
    $query = "INSERT INTO news_category VALUES (NULL, 'inchvor ban','opisanie',2,424 );";
    $insert_op = mysqli_query($conn,$query);
    //PDO -n heto
    //$delete
    $del = "DELETE FROM news_category WHERE id = 2";
    //var_dump($del);
    $delete_op = mysqli_query($conn, $del);
    //update
    $upt = "UPDATE news_category SET sort_order = 4";
    $uptd = mysqli_query($conn,$upt);
    //selsect
    $sel = "SELECT * FROM news_category";
    $result = mysqli_query($conn,$sel);
    $count = mysqli_num_rows($result);
    //echo $count;
    $row1 = mysqli_fetch_array($result);
    //echo "<pre>";
    //print_r($row1);
    if ($count){
        while ($row = mysqli_fetch_array($result)) {
            echo "<h4>";
            echo $row['name'];
            echo "</h4>";
        }
    }
    //qanaky hashvelu hamar SELECT COUNT (*) FROM
    // MAX ev MIN nuyn dzevov 
?>