<?php
// 读取data/artt 目中的所有文件
$data = scandir('./data/artt');
// 删除前两个特殊文件（.和..)
unset($data[0]);
unset($data[1]); 

// 循环每个文件，取出每个文章的前一百个字
foreach($data as &$v){
    // 以读取的方式打开文件
    $mp = fopen('./data/artt/'.$v, 'r');
    // 读出文件的内容
    $v = [
        'title'=>$v,
        'content'=>fread($mp,100),
    ];
    // 关闭一个打开的文件。
    fclose($mp);
   
   
}
// 加载首页
template('index');

