<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//制作调试函数
function show_bug($msg){
    echo "<pre>";
    var_dump($msg);
    echo "</pre>";
}


//定义前台css/images/js常量
define('SITE_URL', 'http://localhost/ProJ/ccblog/');

define("CSS_URL", SITE_URL."Application/Public/Home/css/");
define("IMG_URL", SITE_URL."Application/Public/Home/images/");
define("JS_URL", SITE_URL."Application/Public/Home/js/");
define("FONTS_URL", SITE_URL."Application/Public/Home/Fonts/");
define("UPLOAD_URL", SITE_URL."Application/Public/");

define('INDEX_URL',SITE_URL."index.php/Home/Index/");
define('MESSAGE_URL',SITE_URL."index.php/Home/Message/");
// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单