<?php
     include "./conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="class.php" method="post">
        <h1>class form</h1>
        <input type="text" name="className" placeholder="name">
        <br>
        <button type="submit" name="class">sumbit</button>
    </form>
    <form action="student.php" method="post">
        <h1>student form</h1>
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="number" name="age" placeholder="age">
        <br>
        <label for="cou[]">Courses :</label>
        <br>
        <?php
            $sql="select * from Course";
            $res=mysqli_query($conn, $sql);
            if(!$res){
                die(mysqli_error($conn));
            }
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<input type='checkbox' id='cou[]' name='cou[]' value=".$row['id'].">".$row['courseName']."<br>";
                }
            }else{
                echo "no course yet";
            }
        ?>
        <br>
        <label for="class">Class :</label>
        <br>
        <?php
            $sql="select * from Class";
            $res=mysqli_query($conn, $sql);
            if(!$res){
                die(mysqli_error($conn));
            }
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<input type='radio' id='class' name='classId' value=".$row['id'].">".$row['className']."<br>";
                }
            }else{
                echo "no class yet";
            }
        ?>
        <br>
        <button type="submit" name="student">sumbit</button>
    </form>
    <form action="course.php" method="post">
        <h1>course form</h1>
        <input type="text" name="courseName" placeholder="name">
        <br>
        <button type="submit" name="course">sumbit</button>
    </form>
</body>
</html>