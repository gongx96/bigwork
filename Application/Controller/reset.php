<?php
require_once "../../Data/mysql/connect.php";
header("Content-type: text/html;charset=utf-8");
session_start();
$result=[];
$result['success']  = true;
$result['code'] = -1;
$result['message'] = '已取消收藏';
$resume_id=$_POST["resume_id"];
$sql_query="delete from store where resume_id='{$resume_id}'";
$res_query=$conn->query($sql_query);
if($res_query)
{
    $result['collect']=0;
    echo json_encode($result);
}
?>