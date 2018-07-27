<?php 
/*cookie 就是建立在客户端在变量
1 为什么要用cookie
Http叫协议，是无联接的，访问完就断开联接。现在已经进入了新时代，需要长时间联接。
cookie可以做到让服务器知道“我是谁”，还能实现数据在多个页面之间的共享。
2 cookie由谁来创建
浏览器创建UID，服务器可以创建，修改cookie*/

setcookie('siteName','PHP中文网 cn');//cookie名是siteName,值是PHP中文网    不写过期时间，关闭浏览器时自动注销
echo $_COOKIE['siteName'];