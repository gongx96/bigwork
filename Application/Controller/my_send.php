<?php
require_once "../../Data/mysql/connect.php";
session_start();
if(!isset($_SESSION["id"]))
{
    echo 0;
    return false;
}
$user_id=$_SESSION["id"];
$sql="select employ.*,resume_send.update_time from  resume_send join employ on employ.id=resume_send.employ_id where resume_send.userid={$user_id}";
$res=$conn->query($sql);
if(!$res)
{
    echo  -1;
    return;
}
$array=array();
while($rows=$res->fetch_assoc())
{
    array_push($array,$rows);
}
echo  json_encode($array);

?>