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
      $timestamp=mktime(11, 14, 54, 8, 12, 2014)."</br>";
      echo $timestamp;
      $timestamp=date("Y/m/d h:i:s A");
      echo $timestamp."</br>";
    ?>
    <?php
$a = "32"; // string 
echo $a."</br>";
settype($a, "integer"); // $a is now integer
echo $a."</br>";


$b = 32; // integer 
settype($b, "string"); // $b is now string

$c = true; // boolean 
settype($c, "integer"); // $c is now integer (1)
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars)."</br>";
$nums=array(1,2,3);
echo count($nums)."</br>";
?>
<?php
$person=array("name"=>"chirag","age"=>21);
echo "name is ".$person["name"]." age is ".$person["age"]."</br>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $cars[0][0];
?>


</body>

</html>