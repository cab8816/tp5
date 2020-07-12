<?php
//配置文件
return [
    'template'               => [
        // 模板后缀
        'view_suffix'  => 'htm',
    ],
  // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__PUBLIC__'=>'/public/',
        '__ROOT__' => '/',
        '__INDEX__' => '/tp5/public/static/index',
    ],

  
];
