<?php

// 接收修改后的文件；
// 1.接收
$After = $_POST['After222'];  //原文件名
$title = $_POST['title'];   //新文件名
$content =$_POST['content'];  //新内容
// 2.把新的内容写入原文件中
file_put_contents('./data/artt/'.$After,$content);
// 3.修改原文件名为新文件名
rename('./data/artt/'.$After,'./data/artt/'.$title);

// 4.提示信息然后跳转到列表页
message('修改成功','list');