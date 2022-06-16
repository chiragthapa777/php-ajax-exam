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
    $database="newDB";

    // create connection
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    //creating table

    $sql='CREATE TABLE Class ( id int NOT NULL AUTO_INCREMENT, className varchar(255) NOT NULL, PRIMARY KEY (id) )';
    if(mysqli_query($conn,$sql)){
        echo "class table created";
    }else{
        echo mysqli_error($conn);
    }

    $sql='CREATE TABLE Student ( id int NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL, age int, classId int , PRIMARY KEY (id) , FOREIGN KEY (classId) REFERENCES Class(id) ON DELETE CASCADE )';
    if(mysqli_query($conn,$sql)){
        echo "student table created";
    }else{
        echo mysqli_error($conn);
    }

    $sql='CREATE TABLE Course ( id int NOT NULL AUTO_INCREMENT, courseName varchar(255) NOT NULL, PRIMARY KEY (id) )';
    if(mysqli_query($conn,$sql)){
        echo "student table created";
    }else{
        echo mysqli_error($conn);
    }

    $sql='CREATE TABLE Stu_Cou ( id int NOT NULL AUTO_INCREMENT, courseId int, studentId int , PRIMARY KEY (id) , FOREIGN KEY (courseId) REFERENCES Course(id) ON DELETE CASCADE, FOREIGN KEY (studentId) REFERENCES Student(id) ON DELETE CASCADE )';
    if(mysqli_query($conn,$sql)){
        echo "student table created";
    }else{
        die(mysqli_error($conn));
    }


    
    ?>
</body>
</html>