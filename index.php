<?php

// 这是所有的个入口文件
// 1.初始化：SESSION,加载函数库
// 2.加载相应的功能模快

define('IN','index.php');


// 引入函授库
include('function.php');

// 接收请求，默认是index页面。
$action = !empty($_GET['a']) ? $_GET['a'] : 'index';


include('./controller/index/'.$action.'.php');
  