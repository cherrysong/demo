<?php
header("Content-Type: application/json; charset:utf-8");

$data=file_get_contents("./01.json");
// 转换成PHP数组
$data=json_decode($data);
//计算页数
$page=$_POST['page'];
// 每页的数据计算每页数据的"起点""
$offset=($page-1)*2;
//截取5条数据
$result=array_slice($data,$offset,2);
//翻页
$page++;
echo  json_encode(array('page'=>$page,'items'=>$result));
//延迟
sleep(1);

?>