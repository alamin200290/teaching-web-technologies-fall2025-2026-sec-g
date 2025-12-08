<?php
    session_start();
    //print_r($_POST);
    //var_dump($_POST);

    if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username == "" || $password == ""){
        echo "null username/password";
    }else{
        if($username == $password){
            //echo "Login Success!";
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            echo "invalid username/password";
        }
    }
    }else{
        header('location: login.html');
    }
?>