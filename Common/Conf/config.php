<?php
define('URL_CALLBACK', 'http://www.szfyxhm.com/callback/type/');
return array(
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY'    => '101487234', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '640fa2c1d2c5266a6ddb02e1327980bc', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'qq',
    ),
    //载入自定义配置
    'LOAD_EXT_CONFIG'       => array('ADMIN'=>'admin_user'),
	'SHOW_PAGE_TRACR'       =>  true,
	//数据库配置
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'bdm272871582.my3w.com', // 服务器地址
    'DB_NAME'               =>  'bdm272871582_db',          // 数据库名
    'DB_USER'               =>  'bdm272871582',      // 用户名
    'DB_PWD'                =>  '13088829771',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    'DB_SQL_BUILD_CACHE'    =>  false, // 数据库查询的SQL创建缓存
    'DB_SQL_BUILD_QUEUE'    =>  'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
    'DB_SQL_BUILD_LENGTH'   =>  20, // SQL缓存的队列长度
    'DB_SQL_LOG'            =>  false, // SQL执行日志记录
    'DB_BIND_PARAM'         =>  false,
	//Action参数绑定
	'URL_PARAMS_BIND'       => true,
	//按照变量的顺序绑定
	//'URL_PARAMS_BIND_TYPE'  => 1,
	//'ACTION_SUFFIX'     => 'Action'
	'URL_PARAMS_BIND'       => false,
	'URL_HTML_SUFFIX'       => 'html|htm|shtml',
	'URL_MODEL'             =>  1,
	//路由规则
	'URL_ROUTER_ON'         => true,
	'URL_ROUTE_RULES'       => array(
	     '/^prosearch/p/(\d+)$/'=> 'Index?p=:1',//prosearch分页
		 '/^top_all/p/(\d+)\.html$/'  => 'Index?p=:1',//top_all分页
		 '/^newslist/p/(\d+)$/' => 'Index?p=:1',//newslist分页
		 '/^playlist/p/(\d+)$/' => 'Index?p=:1',//playlist分页  
		 '/^serlist/p/(\d+)$/'  => 'Index?p=:1',//serlist分页
		 '/^prolist/p/(\d+)$/'  => 'Index?p=:1',//prolist分页
		 '/^userlist/p/(\d+)$/' => 'Index?p=:1',//userlist分页
		 '/^playuserlist/p/(\d+)$/' => 'Index?p=:1',//playuserlist分页
		 '/^leavemes/p/(\d+)$/'    => 'Index?p=:1',//leavemes分页
		 '/^meslist/p/(\d+)$/'    => 'Index?p=:1',//meslist分页

	),
	'URL_MAP_RULES'         => array(
	               'site/welcome'  => 'Index/test2?from=seo'
	
	),
	'TMPL_PARSE_STRING'     => array(
	     '__PUBLIC__' => __ROOT__ . '/Public',
         '__JS__'     => __ROOT__ . '/Public/js',
         '__CSS__'    => __ROOT__ . '/Public/css',
         '__IMAGES__'  => __ROOT__ . '/Public/images',
		 '__VIDEOS__'  => __ROOT__ . '/Public/video'		 
	
	),
	'LAYOUT_ON'            => false,
    'LAYOUT_NAME'          => 'Layout/index',
	'TMPL_LAYOUT_ITEM'     => '{__REPLACE__}',
	
	//静态定义
	'HTML_CACHE_ON'          => false, // 开启静态缓存
    'HTML_CACHE_TIME'        => 60, // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX'       => '.shtml', // 设置静态缓存文件后缀
    'HTML_CACHE_RULES'       => array( // 定义静态缓存规则
                              // 定义格式1 数组方式
                              'Index:testnewsinfo'=>array('{id}','60'),
                               // 定义格式2 字符串方式
                                //'静态地址' => '静态规则',
                           ),
	 'MODULE_ALLOW_LIST'  => array('Home','Admin','User'),
     'DEFAULT_MODULE'     => 'Home',
	 'SHOW_ERROR_MSG'     => true
	
	
 );