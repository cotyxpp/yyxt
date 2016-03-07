<?php
return array(
    // 关闭多模块访问
    'MULTI_MODULE'   => false,
    'DEFAULT_MODULE' => 'Home',

    //URL设置
    'URL_HTML_SUFFIX'=>'',

    //数据库配置信息
    'DB_TYPE'        => 'mysql', // 数据库类型
    'DB_HOST'        => '127.0.0.1', // 服务器地址
    'DB_NAME'        => 'yyxt', // 数据库名
    'DB_USER'        => 'root', // 用户名
    'DB_PWD'         => 'root', // 密码
    'DB_PORT'        => 8889, // 端口
    'DB_PREFIX'      => 'xm_', // 数据库表前缀
    'DB_CHARSET'     => 'utf8', // 字符集
    'DB_DEBUG'       => true, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);