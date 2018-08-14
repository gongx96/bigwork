<?php
require_once "../../Data/mysql/connect.php";
//require_once "index.php";
$resume_id=$_POST["resume_id"];

//$user_id=$_SESSION["id"];

$sql="select `position`,salary,company,`count`,record,education,express from employ where id='{$resume_id}'";//`position`,salary
$res=$conn->query($sql);
//var_dump($res->fetch_row());
$array=[];
if($rows=$res->fetch_assoc())
{
   $array=$rows;
}
$sql_collect="select * from  store where resume_id={$resume_id}";
$res_collect=$conn->query($sql_collect);
if($res_collect->fetch_assoc())
{
    $array['collect']=1;
}
$sql_send="select * from  resume_send where employ_id={$resume_id}";
$res_send=$conn->query($sql_send);
if($res_send->fetch_assoc())
{
    $array['send']=1;
}
$sql_company="select address,phone,email,employee,introduce from company_news where companyname='{$array['company']}'";
$res_company=$conn->query($sql_company);
//var_dump($res_company);
if( $rows_company=$res_company->fetch_assoc())
{
//    $rows_company=$res_company->fetch_assoc();
    echo  json_encode(array_merge($array,$rows_company));
}
//echo  json_encode($array);
?>