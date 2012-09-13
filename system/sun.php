<?php
/**
 * 框架的核心类
 */
define('SYSTEM_PATH', dirname(__FILE__));
define('ROOT_PATH',  substr(SYSTEM_PATH, 0,-7));
define('SYS_LIB_PATH', SYSTEM_PATH.'/lib');
define('APP_LIB_PATH', ROOT_PATH.'/lib');
define('SYS_CORE_PATH', SYSTEM_PATH.'/core');
define('CONTROLLER_PATH', ROOT_PATH.'/controller');
define('MODEL_PATH', ROOT_PATH.'/model');
define('VIEW_PATH', ROOT_PATH.'/view');
define('LOG_PATH', ROOT_PATH.'/error/');
class core
{
	public $a = 'test';
	public $b;
}
