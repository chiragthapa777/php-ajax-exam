<?php
     include "./conn.php";

     if(isset($_POST['student'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $classId=$_POST['classId'];
        if(!is_integer($age) && !is_integer($classId)){
            settype($age,"integer");
            settype($classId,"integer");
        }
        function Stu_Cou($studentId, $courseId,$conn){
            settype($studentId,"integer");
            settype($courseId,"integer");
            $sql="INSERT INTO Stu_Cou (studentId, courseId) VALUES($studentId,$courseId)";
            if(mysqli_query($conn,$sql)){
                echo "id of last inserted course is ".mysqli_insert_id($conn);
                header("Location: index.php");
            }else{
                echo "error while inserting stu_cou: ".mysqli_error($conn)."<br>";
            }
        }
        $courses=$_POST['cou'];
        $sql="INSERT INTO Student (name, age, classId) VALUES('$name',$age,$classId)";
        foreach($courses as $courseId){
            echo $courseId;
        }
        if(is_array($courses)){
        if(mysqli_query($conn,$sql)){
            echo "id of last inserted course is ".mysqli_insert_id($conn);
            if(count($courses)>0){
                foreach($courses as $courseId){
                    Stu_Cou(mysqli_insert_id($conn),$courseId,$conn);
                }
            }
                // header("Location: index.php");
            }else{
                echo "error while inserting student: ".mysqli_error($conn)."<br>";
            }
        }else{
            echo "courses no array";
        }
    }
?>