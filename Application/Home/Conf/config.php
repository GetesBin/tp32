<?php
return array(
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'qdm114438419.my3w.com', // 服务器地址
	'DB_NAME'               =>  'qdm114438419_db',          // 数据库名
	'DB_USER'               =>  'qdm114438419',      // 用户名
	'DB_PWD'                =>  'root123456',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
	'DB_PARAMS'          =>  array(), // 数据库连接参数
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'DB_LITE'             =>  false,    // 使用数据库Lite模式
	'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
	'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
	'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
	//PDO连接方式 无法加载数据库驱动: Think\Db\Driver\Pdo
	// 'DB_TYPE'   => 'pdo', // 数据库类型
	// 'DB_USER'   => 'root', // 用户名
	// 'DB_PWD'    => 'root', // 密码
	// 'DB_PREFIX' => 'tp_', // 数据库表前缀 
	// 'DB_DSN'    => 'mysql:host=localhost;dbname=tp323;charset=utf8',


	// 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.qq.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'GatesBin@qq.com',//你的邮箱名
    'MAIL_FROM' =>'GatesBin@qq.com',//发件人地址
    'MAIL_FROMNAME'=>'GatesBin',//发件人姓名
    'MAIL_PASSWORD' =>'wrwhbmoizyscbehi',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);