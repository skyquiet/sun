<?php
/**
 * 路由类
 */
class router
{
	public static function run()
	{
		if (isset($_SERVER['PATH_INFO'])) {
			// var_dump($_SERVER['PATH_INFO']);
			$pathInfo = $_SERVER['PATH_INFO'];
			$pathInfo = ltrim($pathInfo,'/');
			$pathInfoArr = explode('/', $pathInfo);
			// var_dump($pathInfoArr);
			

		}
		else
		{
			//显示默认页面。希望可以配置默认全局常量DOCUMENT_ROOT
			//并且默认APP。Controller、Action 都要可以配置
			require dirname(dirname(__FILE__)).'\controllers\main.controller.php';
			$controller = new main();
			$controller->index();
		}
		
	}
}

