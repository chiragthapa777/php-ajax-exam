<?php session_start();
if(isset($_GET["submit"])){
    unset($_SESSION['name']);
    echo " Name is ".$_SESSION['name']." id is ".$_SESSION['pass'];
}

?>