<?php


// 接收标题
$title = $_GET['title'];

// 读取出这遍文章的内容
$content = file_get_contents('./data/artt/'.$title);

// 显示修改的表单
view('post-add1');
