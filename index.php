<?php
	// 入口文件
header("content-type:text/html;charset=utf-8");
	$c=$_GET['c']; //控制器

	//包含控制器
	include './controllers/'.$c.'Controller.php';

	//实例化对象
	$className=$c.'Controller';
	$controller=new $className();

	//方法名
	$a=$_GET['a'];
	//调用方法
	$controller->$a();