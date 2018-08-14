<?php
require_once "../../Data/mysql/connect.php";
header("Content-type: text/html;charset=utf-8");
session_start();
$result=[];
$result['success']  = true;
$result['code'] = -1;
$result['message'] = '收藏成功';
if(!isset($_SESSION["id"]))
{
    echo 0;
    return false;

}
$user_id=$_SESSION["id"];
$resume_id=$_POST["resume_id"];
$sql_query="select `position`,`salary`,`company` from employ where id='{$resume_id}'";
$res_query=$conn->query($sql_query)->fetch_assoc();
$position=$res_query['position'];
$company=$res_query['company'];
$salary=$res_query['salary'];
$sql="insert into store(user_id,resume_id,`position`,salary,company) values ({$user_id},{$resume_id},'{$position}',{$salary},'{$company}')";
$res=$conn->query($sql);
if($res)
{
    $result['collect']=1;
    echo json_encode($result);
}
?>
