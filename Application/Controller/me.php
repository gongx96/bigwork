<?php
require_once "../../Data/mysql/connect.php";
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $sql="select name from `user` where name='{$username}'";
    $result=$conn->query($sql);
    if($rows=$result->fetch_assoc())
    {
        echo  json_encode($rows);
    }
}
else
    echo 0;
?>