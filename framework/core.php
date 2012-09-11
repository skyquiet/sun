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
			$controller = $pathInfoArr[0];
			$action = $pathInfoArr[1];
			$controllerFile = dirname(dirname(__FILE__))."\controllers\\{$controller}.controller.php";
			if(file_exists($controllerFile))
			{
				require dirname(dirname(__FILE__))."\controllers\\{$controller}.controller.php";
				$controller = new $controller();
				$controller->$action();
			}
			else
			{
				exit('File is not exists!');
			}
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

