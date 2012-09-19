<?php
/**
 * 框架的核心类
 */
final class sun
{
	//系统配置
	public static $config = array();
	/**
	 * 启动系统
	 */
	public static function run()
	{
		//读取配置文件
		self::readConfig();
		//路由
		self::router();
	}
	/**
	 * 自动加载函数
	 * 希望后期可以实现可配置
	 */
	public static function autoLoad()
	{

	}
	/**
	 * 路由方法
	 */
	public static function router ()
	{
		if($_SERVER['PATH_INFO'])
		{
			var_dump($_SERVER['PATH_INFO']);
			$pathInfoArr = explode('/', $_SERVER['PATH_INFO']);
		}
	}
	/**
	 * 读取配置文件
	 */
	 private static function readConfig($appName)
	 {
	 	//设置引用文件夹
	 	set_include_path(dirname(__FILE__).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);
		//读取定义的一些常量
		require 'default.define.php';
		//读取默认配置
		$defaultConfig = require 'default.config.php';
		if(is_dir(APP_CONFIG_PATH)) 
		{
			if (is_file(APP_CONFIG_PATH."config.php")) {
				$appConfig = require APP_CONFIG_PATH."config.php";
				//项目配置覆盖掉默认配置
				self::$config[APP_NAME] = array_merge($defaultConfig,$appConfig);
			}
			if (is_file(APP_CONFIG_PATH."define.php")) {
				//读取定义文件
				require APP_CONFIG_PATH."define.php";
			}
		}
		//TODO 抛出错误，debug模式开启的时候提示APP配置文件不存在
	 }
}
