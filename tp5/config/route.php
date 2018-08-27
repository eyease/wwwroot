<?php
// think\Route::rule('demo','index/index/demo');   
// think\Route::rule('demo/:user','index/index/demo','GET',['ext'=>'shtml'],['user'=>'\w{1,10}']);   //路由名称后面是传入的变量   字符类型、长度在1-10之间

return[
    'demo/:user'=>['index/index/demo',['method'=>'get','ext'=>'shtml'],['user'=>'\w{1,10}']],
    // 'test'=>'index/index/test',    //如果只有一个路由地址，可以简化
]; //数组方式