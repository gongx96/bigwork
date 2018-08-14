<?php
require_once "../../Data/mysql/connect.php";
session_start();
if(!isset($_SESSION["id"]))
{
    echo 0;
    return false;
}
$user_id=$_SESSION["id"];
$sql="select employ.* from store join employ on employ.id=store.resume_id where store.user_id={$user_id}";
//$sql_id="select resume_id from store where user_id={$user_id}";
//$res_id=$conn->query($sql_id);
//$resume_id=$res_id->fetch_assoc()['resume_id'];
//$sql="select id,`position`,salary,company,`count`,record,education from employ where id={$resume_id}";//`position`,salary
$res=$conn->query($sql);
//var_dump($res->fetch_row());
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