<?php
     include "./conn.php";

     if(isset($_POST['course'])){
        $courseName=$_POST['courseName'];
        $sql="INSERT INTO Course (courseName) VALUES('$courseName')";
        if(mysqli_query($conn,$sql)){
            echo "id of last inserted course is ".mysqli_insert_id($conn);
            header("Location: index.php");
        }else{
            echo "error while inserting class: ".mysqli_error($conn)."<br>";
        }
    }
?>
