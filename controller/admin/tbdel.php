<?php
// 批量删除的文件：

// 1.接收复选择框的数据
$title = $_POST['deltitle'];

// 2.循环每个文件后删除

foreach($title as $v){
    unlink('./data/artt/'.$v);
}
// 3.提示  跳转到列表
message('删除成功','list');