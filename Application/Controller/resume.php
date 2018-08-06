<?php
require_once "../../Data/mysql/connect.php";
session_start();
$username = $_SESSION['username'];
$id=$_SESSION['id'];
//echo $id;
//return;
$sql_id="select * from resume where user_id={$id}";
$res_id=$conn->query($sql_id);
$arr=[];
$array=[];
if(!$res_id->fetch_row())
{
    $sql_updateid="insert into resume (user_id) VALUE ($id)";
//    $sql_updateid="update resume set user_id='{$id}'";
    $result=$conn->query($sql_updateid);
    $sql1="select id,`name`,phone,email,sex from user where id={$id}";
    $res1=$conn->query($sql1);
    if($rows1=$res1->fetch_assoc())
    {
        echo  json_encode($rows1);
    }
}
else{
    $sql1="select id,`name`,phone,email,sex from user where id={$id}";
    $res1=$conn->query($sql1);
    if($rows1=$res1->fetch_assoc())
    {
        $arr=$rows1;
//        echo  json_encode($rows1);
    }
    $sql2="select * from resume where user_id={$id}";
    $res2=$conn->query($sql2);

    if($rows2=$res2->fetch_assoc())
    {
        if($rows2==null){
            $rows2=[];
        }
        $array=array_merge($arr,$rows2);
    }
//    else
//    {
//        $rows2=[];
//        $array=array_merge($arr,$rows2);
//    }
    echo  json_encode($array);
}
?>