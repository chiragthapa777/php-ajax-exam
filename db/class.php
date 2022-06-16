<?php
     include "./conn.php";

     if(isset($_POST['class'])){
        $className=$_POST['className'];
        $sql="INSERT INTO Class (className) VALUES('$className')";
        if(mysqli_query($conn,$sql)){
            echo "id of last inserted class is ".mysqli_insert_id($conn);
            header("Location: index.php");
        }else{
            echo "error while inserting class: ".mysqli_error($conn)."<br>";
        }
    }
?>