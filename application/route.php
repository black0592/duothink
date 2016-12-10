<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    //博客
    'topic/:id' => 'index/blog/article',
    'topic' => 'index/blog/index',

    //模板
    'template/:id' => 'index/template/article',
    'template' => 'index/template/index',

    //jquery
    'jquery/:id' => 'index/jquery/article',
    'jquery' => 'index/jquery/index',

    //thinkphp
    'php/:id' => 'index/thinkphp/article',
    'php' => 'index/thinkphp/index',

    //问答
    'wenda/:id' => 'index/wenda/article',
    'wenda' => 'index/wenda/index',

    //工具箱
    'tools/:id' => 'index/tools/article',
    'tools' => 'index/tools/index',

    'page/:id'   => ['page/index', ['method' => 'get'], ['id' => '\d+']],
    'ta/:id'    => ['index/index/ta',['method' => 'get'], ['id' => '\d+']],

    //用户信息
    'api_user_user_login' => 'user/account/user_login',
    'api_user_user_register' => 'user/account/user_register',
    'api_user_user_login_do' => 'user/account/user_login_do',
    'api_user_user_register_do' => 'user/account/user_register_do',
];
