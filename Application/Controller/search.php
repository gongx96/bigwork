<?php
require_once "../../Data/mysql/connect.php";
$searchText=$_POST["search"];
//$searchText="java";
$searchAddSql = "company like '%".$searchText."%' 
    or position like '%".$searchText."%'
    or salary like '%".$searchText."%'";
$sql="select `position`,salary,company,`count`,record,education from employee where $searchAddSql";//`position`,salary
$res=$conn->query($sql);
//var_dump($res->fetch_row());
$array=array();
while($rows=$res->fetch_assoc())
{
    array_push($array,$rows);
}
echo  json_encode($array);
?>