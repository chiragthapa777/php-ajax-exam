<?php session_start();
if(isset($_GET["submit"])){
    echo " Name is ".$_SESSION['name']." id is ".$_SESSION['pass'];
}

?>