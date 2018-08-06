<?php
require_once "../../Data/mysql/connect.php";
session_start();

//else{
//    echo "ok";
//}
$name=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$confirm=$_POST["password2"];
//echo $name;
//header("Location://localhost/Application/view/index.html");
$sql="select name from `user` where name='{$name}'";
$res=$conn->query($sql);
if($res->fetch_row())
{
//       header("Location://localhost/Application/view/zhuceview.php?error=chongfu");
      echo 2;//用户名已存在
}
else
{
    if(!empty($name))
    {
        if(!empty($password))
        {
            if($password==$confirm)
            {
                $sql="insert into `user` (`name`,password,phone,email) values ('{$name}','{$password}','{$phone}','{$email}')";
                $result=$conn->query($sql);
                $_SESSION['username']=$name;
//                if($result)
//                {
                   echo 1;//跳转到首页
//                }
            }
            else
                echo -2;//密码不一致
        }
        else
        echo 0;//密码为空
    }
    else
        echo -1;//用户名为空
}
?>