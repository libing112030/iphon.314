<?php
// 提示信息的函数
function message($mee,$url){
    // 在地址加上入口文件
    $url= IN.'?a='.$url;
        echo <<<JS
<script>
    alert('{$mee}');
    location.href='{$url}'
</script>
JS;
exit;
}

function check_login(){
// isset:判断一个变量是否存在
// 判断$_SESSION中有没一个叫做了name 的键。
if(!isset($_SESSION['name'])){

    message('必须先登录','login');
    exit;
    }
 }

// 前 封装一个加载页面
function view($name){
    //引入静态页面
    include('./view/admin/'.$name.'.html');
}

// 后 封装一个加载页面
function template($name){
    //引入静态页面
    include('./view/index/'.$name.'.html');
}