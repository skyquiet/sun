<?php
define('SYSTEM_PATH', dirname(dirname(__FILE__)));
define('ROOT_PATH',  dirname(SYSTEM_PATH));
//定义路径分隔符
define('DS', DIRECTORY_SEPARATOR);
define('APP_CONFIG_FLODER', ROOT_PATH.DS.'config'.DS);
// define('SYS_LIB_PATH', SYSTEM_PATH.'/lib');
// define('SYS_CORE_PATH', SYSTEM_PATH.'/core');
// define('CONTROLLER_PATH', SYSTEM_PATH.'/controller');
// define('MODEL_PATH', SYSTEM_PATH.'/model');
// define('VIEW_PATH', SYSTEM_PATH.'/view');
// define('LOG_PATH', SYSTEM_PATH.'/error/');
//多APP模式，默认开启
defined('MORE_APP_ROUTE') or define('MORE_APP_ROUTE', TRUE);
