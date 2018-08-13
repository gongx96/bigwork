<?php
require_once "../../Data/mysql/connect.php";
$sql="select id,`position`,salary,company,`count`,record,education from employ";//`position`,salary
$res=$conn->query($sql);
//var_dump($res->fetch_row());
$array=array();
while($rows=$res->fetch_assoc())
{
    array_push($array,$rows);
}
echo  json_encode($array);

?>