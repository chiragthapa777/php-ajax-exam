<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";

    // create connection
    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    //creating database
    $sql='CREATE DATABASE newDB';
    if(mysqli_query($conn,$sql)){
        echo "Database created!";
    }else{
        die(mysqli_error($conn));
    }
    ?>
</body>
</html>