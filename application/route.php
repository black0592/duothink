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
    'topic/:id' => 'index/topic/lists',
    'topic' => 'index/topic/index',

    //模板
    'template/:id' => 'index/template/lists',
    'template' => 'index/template/index',

    //jquery
    'jquery/:id' => 'index/topic/lists',
    'jquery' => 'index/topic/index',

    //thinkphp
    'php/:id' => 'index/topic/lists',
    'php' => 'index/topic/index',

    //问答
    'question/:id' => 'index/question/lists',
    'question' => 'index/question/index',

    //工具箱
    'tools/:id' => 'index/tools/article',
    'tools' => 'index/tools/index',

    'page/:id'   => ['page/index', ['method' => 'get'], ['id' => '\d+']],
    'channel/:pid\d_:id\d'    => ['index/index/channel',['method' => 'get'], ['id' => '\d+']],

    //用户信息
    'api_user_user_login' => 'user/account/user_login',
    'api_user_user_register' => 'user/account/user_register',
    'api_user_user_login_do' => 'user/account/user_login_do',
    'api_user_user_register_do' => 'user/account/user_register_do',
];
