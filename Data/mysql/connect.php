<?php
header('Content-Type: text/html;charset=utf-8');
$servername="localhost:3307";
$username="root";
$password="root";
$dbname="bigwork";
$conn= new mysqli($servername,$username,$password,$dbname);
//$mysqli->set_charset("utf8");
if($conn->connect_error)
{
    die("连接失败：". $conn->connect_error);
}
?>