<?php
require_once "../../Data/mysql/connect.php";
session_start();
$id=$_SESSION['id'];
$result=[];
$result['success']  = true;
$result['code'] = -1;
$result['message'] = '保存成功';
$name = $_POST["name"];
$sex = $_POST["sex"];
$birth = $_POST["birth"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$worktime = $_POST["worktime"];
$salary = $_POST["salary"];
$introduce = $_POST["introduce"];
$work_experience = $_POST["work_experience"];
$edu_experience = $_POST["edu_experience"];
//$sql_update1=update user set name=,
//$sql_update2=update user set sex=,birthday=,
//var_dump($res->fetch_row());
if (empty($name)) {
    $result['success']  = false;
    $result['code'] = 4;
    $result['message'] = '姓名不能为空';
    echo json_encode($result);
    return;
}
if (empty($sex)) {
    $result['success']  = false;
    $result['code'] = 3;
    $result['message'] = '性别不能为空';
    echo json_encode($result);
    return;
}
if (empty($phone)) {
    $result['success']  = false;
    $result['code'] = 2;
    $result['message'] = '手机号不能为空';
    echo json_encode($result);
    return;
}
if (empty($email)) {
    $result['success']  = false;
    $result['code'] = 1;
    $result['message'] = '邮箱不能为空';
    echo json_encode($result);
    return;
}
if (empty($salary)) {
    $result['success']  = false;
    $result['code'] = 0;
    $result['message'] = '薪资不能为空';
    echo json_encode($result);
    return;
}
$sql1 = "update `user` set name='{$name}',phone='{$phone}',email='{$email}' where id={$id}";
$result1 = $conn->query($sql1);
$sql2 = "update `resume` set sex={$sex},birthday='{$birth}',salary=$salary,introduce='{$introduce}',work_time='{$worktime}' where userid='{$id}'";
$result2 = $conn->query($sql2);
echo json_encode($result);
//$array=array();
//while($rows=$res->fetch_assoc())
//{
//    array_push($array,$rows);
//}
//echo  json_encode($array);//更新保存用户信息
?>
