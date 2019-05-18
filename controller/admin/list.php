<?php

// 读取artt目录中所有的文件名
$data = scandir('./data/artt');

// 删除数组中的两个文件名..,./
unset($data[0]);
unset($data[1]);

view('posts');
