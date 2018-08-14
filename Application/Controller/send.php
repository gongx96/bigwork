<?php
require_once "../../Data/mysql/connect.php";
header("Content-type: text/html;charset=utf-8");
session_start();
$result=[];
$result['success']  = true;
$result['code'] = -1;
$result['message'] = '简历投递成功';
if(!isset($_SESSION["id"]))
{
    echo 0;
    return false;

}
$user_id=$_SESSION["id"];
$resume_id=$_POST["resume_id"];
$sql="insert into resume_send(userid,employ_id) values ({$user_id},{$resume_id})";
$res=$conn->query($sql);
if($res)
{
//    $result['send']=1;
    echo json_encode($result);
}
?>