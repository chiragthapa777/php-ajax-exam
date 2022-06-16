<?php
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $servername="localhost";
        $username="root";
        $password="";
        $database="ajaxphp";
    
        // create connection
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Connection failed:".mysqli_connect_error());
        }

        if($requestMethod=="GET"){
            $response="<table border='1'> <tr> <th>id</th> <th>id</th> </tr>";
            $sql="select * from user";
            $res=mysqli_query($conn,$sql);
            if(!$res){
                die(mysqli_error($conn));
            }else{
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $response.="<tr>";
                        $response.="<td>".$row['id']."</td>";
                        $response.="<td>".$row['name']."</td>";
                        $response.="</tr>";
                    }
                }
                $response.="</table>";
            }
            echo $response;
        }
        if($requestMethod=="POST"){
            $name=$_POST['name'];
            $sql="INSERTs INTO user (name) VALUES ('$name')";
            if(mysqli_query($conn,$sql)){
                echo "good";
            }else{
                die("bad");
            }
        }

?>