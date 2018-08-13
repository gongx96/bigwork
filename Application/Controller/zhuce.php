<?php
require_once "../../Data/mysql/connect.php";
session_start();

//else{
//    echo "ok";
//}
$result=[];
$result['success']  = true;
$result['code'] = 1;
$result['message'] = '注册成功';
$name=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST['phone'];
$email=$_POST["email"];
$confirm=$_POST["password2"];
if(empty($name))
{
    $result['success']  = false;
    $result['code'] = -1;
    $result['message'] = '姓名不能为空';
    echo json_encode($result);
    return;
}
if(empty($password))
{
    $result['success']  = false;
    $result['code'] = 0;
    $result['message'] = '密码不能为空';
    echo json_encode($result);
    return;
}
if($password!=$confirm)
{
    $result['success']  = false;
    $result['code'] = 2;
    $result['message'] = '两次密码不一致';
    echo json_encode($result);
    return;
}
//echo $name;
//header("Location://localhost/Application/view/index.html");
$sql="select name from `user` where name='{$name}'";
$res=$conn->query($sql);
if($res->fetch_row())
{
//       header("Location://localhost/Application/view/zhuceview.php?error=chongfu");
    $result['success']  = false;
    $result['code'] = 3;
    $result['message'] = '用户名已存在';
    echo json_encode($result);
    return;//用户名已存在
}
$sql_user = "insert into `user` (`name`,password,phone,email) values ('{$name}','{$password}','{$phone}','{$email}')";
$result1 = $conn->query($sql_user);
$sql_select = "select id from user where name='{$name}'";
$result2 = $conn->query($sql_select);
$id = $result2->fetch_assoc()['id'];

$sql_re = "insert into `resume` (userid) values ({$id})";
$result3 = $conn->query($sql_re);
$_SESSION['username'] = $name;
$_SESSION['id'] = $id;
if ($result1 && $result2 && $result3) {
    echo json_encode($result);//跳转到首页
}

?>