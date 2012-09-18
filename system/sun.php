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
	public static function run($appName)
	{
		//读取配置文件
		self::readConfig($appName);
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
		if (MORE_APP_ROUTE==TRUE)
		{
			var_dump($home);
		}
		else 
		{
			
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
		if(is_dir(APP_CONFIG_FLODER)) 
		{
			foreach ($appName as $name) {
				if (is_file(APP_CONFIG_FLODER."{$name}.config.php")) {
					${$name} = require APP_CONFIG_FLODER."{$name}.config.php";
					//项目配置覆盖掉默认配置
					self::$config[$name] = array_merge($defaultConfig,${$name});
				}
				if (is_file(APP_CONFIG_FLODER."{$name}.define.php")) {
					//引用定义文件
					require APP_CONFIG_FLODER."{$name}.define.php";
				}
			}
		}
		//TODO 抛出错误，debug模式开启的时候提示APP配置文件不存在
	 }
}
