<?php
require_once "../../Data/mysql/connect.php";
$searchText=$_POST["search"];
//$searchText="java";
$searchAddSql = "company like '%".$searchText."%' 
    or position like '%".$searchText."%'
    or salary like '%".$searchText."%'";
$sql="select id,`position`,salary,company,`count`,record,education from employ where $searchAddSql";//`position`,salary
$res=$conn->query($sql);
//var_dump($res->fetch_row());
$array=array();
//if($res->fetch_assoc()){
    while($rows=$res->fetch_assoc())
    {
        array_push($array,$rows);
    }
    echo  json_encode($array);
//}
//else
//    echo 0;

?>