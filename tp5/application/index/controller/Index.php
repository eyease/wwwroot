<?php
namespace app\index\controller;
use think\Controller;
use think\Config;//这样可以简化后面的Config类使用繁琐度
class Index extends Controller
{
    // public function index()
    // {
    //     \think\config::load(APP_PATH.'../config/newconf/conf.php');
    //     // dump(\think\config::get());
    //     // dump(config());//config()助手函数和get()方法一样使用,建议先引用类，再使用类方法
    //     dump(config('trace.type'));
    //     dump(\think\config::has('trace.type'));//判断配置项是否存在
    //     dump(config('?trace.type'));
    //     $conf='app_debug';
    //     // $isExist =\think\config::has($conf);
    //     $isExist =config::has($conf);
       
    //     if ($isExist) {
    //         dump(config($conf));
    //     }else{
    //         return $conf.'配置项不存在';
    //     }
    // }
    //////////////////////////////////////////////////////////////////////
    public function index(){
        //逐个配置
        Config::set('site_domain','www.tp5.com');
        //批量配置
        $config=[
            'site_domain'=>'tp5.com',
            'site_name'=>'qiye',
            'site_tools'=>'tools',
        ];
        config::set($config);
        //二级配置
        config::set('site_info',$config);

        dump(Config::get('site_domain'));//单独查看
        dump(Config::get());//全部查看

        //用助手函数config()也是相同的用法，建议使用？？
    }
    
}
