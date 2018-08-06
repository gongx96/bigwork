<?php
session_start();
if(isset($_SESSION["username"]))
{
    unset($_SESSION["username"]);
}
if(isset($_SESSION["id"]))
{
    unset($_SESSION["id"]);
}
header("Location: ../view/login.html");
?>