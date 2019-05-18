<?php

// 接收表单的数据
$username = $_POST['username'];
$password = $_POST['password'];
// 判断帐号是否正确
$account = file_get_contents('./data/account');//读取帐号

// 根据行转换成数组
$klbn = explode("\n",$account);
// 循环每一个帐号
foreach($klbn as $v){
    // 拼出帐号的格式
    $mp = $username.' '.md5($password);
        //判断是否有相同的帐名，有则说明登录成功
    if($mp==trim($v)){
 
    // 把用户名保存到session中
    $_SESSION['name']=$username;
    // 提示信息
        message('登录成功','');
        // exit;
     }else{
         message('密码有误','login');
     }
}
    