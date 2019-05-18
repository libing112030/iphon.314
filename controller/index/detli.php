<?php

// 接收标题参数
$title = $_GET['title'];

// 根据标题读取出文章中的内容
$content = file_get_contents('./data/artt/'.$title);

// 加载页面
template('detail');


