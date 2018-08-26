<?php
namespace app\user\controller;
class MangerUser   //类名和控制器名字必须完全一样，访问控制器时使用manger_user方式
{
    public function add($n=0,$m=0)
    {
        return '$n+$m ='.($n+$m);
    }
}