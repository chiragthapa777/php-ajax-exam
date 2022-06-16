<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','ajaxphp');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user ";
$result = mysqli_query($con,$sql);

echo "good";
// echo "<table>
// <tr>
// <th>id</th>
// <th>name</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['id'] . "</td>";
//   echo "<td>" . $row['name'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
mysqli_close($con);
?>
</body>
</html>