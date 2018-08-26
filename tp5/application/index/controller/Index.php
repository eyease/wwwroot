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
    // public function index(){
    //     //逐个配置
    //     Config::set('site_domain','www.tp5.com');
    //     //批量配置   都是动态配置
    //     $config=[
    //         'site_domain'=>'tp5.com',
    //         'site_name'=>'Secret System',
    //         'site_tools'=>'tools',
    //     ];
    //     config::set($config);
    //     // config($config);
    //     //二级配置
    //     config::set('site_info',$config);

    //     \think\Config::load(APP_PATH.'../config/newconf/conf.php');   //这是动态加载 前面是绝对路径，后面是相对
    //     dump(Config::get('site_domain'));//单独查看
    //     dump(Config::get());//全部查看
    //     // dump(config('my_base'));//用助手函数访问
    //     // dump(config('my_base.my_age'));//用助手函数访问二级配置项  和LOAD方法一样用 . 号来连接
    //     //用助手函数config()也是相同的用法，建议使用类方法，主要是表达更为清晰  
    //     //THINKPHP5 最多只支持二级配置  
    // }
    

    public function index(){
        $config=[
            'site_domain'=>'www.tp5.com',
            'site_name'=>'Secret System',
            'site_tools'=>'tools',
        ];
        config::set($config,'site');
        //输出全部配置项，作用域相当于二级配置项的名称
        dump(Config::get());
        //用数组的方式，来配置作用域的值
        config::set('site.site_name','神秘系统');
        dump(Config::get('site.site_name'));
        //切换作用域
        Config::range('_sys_');
        dump(Config::get());
    }
}
