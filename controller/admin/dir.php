<?php


// 1.修改删除按钮，添加一个跳转地址
//    找到posts.html给删除按钮添加inlet.php?a=dir&title=<?=$v? >

// 2.在controller创建一个dir.php接收要删除的文件标题
$title = $_GET['title'];

// 3.删除文件
unlink('./data/artt/'.$title);
// 4.提示信息，跳转到列表页面。
message('删除成功','list');


// 添加功能：点击删除按钮后弹出一个确定要删除的框，然后提示确定要删除。

// 使用JS；
// 找到posts.html给删除按钮绑定一个点击click事件,使用confirm弹出一个框。

