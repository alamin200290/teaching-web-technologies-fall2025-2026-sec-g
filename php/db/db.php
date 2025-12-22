<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    $sql2 = "insert into users values(null, 'xyz', 'xyz123', 'xyz@aiub.edu')";
    if(mysqli_query($con, $sql2)){
        echo "Success!<br>";
    }else{
        echo "Error!";
    }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
 
    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
?>