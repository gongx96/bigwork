<?php
require_once "../../Data/mysql/connect.php";
session_start();
$name=$_POST["username"];
$password=$_POST["password"];
$sql="select password,id from `user` where name='{$name}'";
$result=$conn->query($sql);
while($res=$result->fetch_row()){
    if($password==$res[0]){
        $_SESSION['username']=$name;
        $_SESSION['id']=$res[1];
        echo 1;
    }
    else {
        echo 0;
    }
}
?>