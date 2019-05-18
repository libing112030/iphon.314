<?php

// 1.接收数据
// var_dump($_POST);
// 2.生成文件名
file_put_contents('./data/artt/'.$_POST['title'],$_POST['content']);
// 提示信息后跳转到列表页
message('添加成功', 'list');
