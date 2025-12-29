<?php

//sleep(4);
    $data = $_POST['data'];
    $user = json_decode($data);
    //$user = ['id'=>1, 'name'=>'alamin', 'email'=>'test@aiub.edu'];
    echo $user->name;
?>