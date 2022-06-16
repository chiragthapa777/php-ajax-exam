<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?php
        $_SESSION["name"]="chirag";
        $_SESSION["pass"]=session_id();
    ?>
    <form action="show.php" method="get">
        <button type="submit" name="submit">Show</button>
    </form>
    <form action="out.php" method="get">
        <button type="submit" name="submit">logout</button>
    </form>
</body>
</html>