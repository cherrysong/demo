<?php

	// 指定一个响应头
	header('Content-Type: application/json; charset=utf-8');


	// 读取JSON数据
	$result = file_get_contents('./01.json');

	echo $result;

?>