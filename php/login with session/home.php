<?php
    session_start();

    if(isset($_SESSION['status']) !== true){
        header('location: login.html');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username'];?> </h1>
        <a href="logout.php"> logout</a>
</body>
</html>