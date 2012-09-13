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
			// 判断$pathInfoArr[0]有这个文件夹的话，就当作app路径，没有的话默认等于配置的默认app
			// if (is_dir())
			$controller = $pathInfoArr[0];
			$action = $pathInfoArr[1];
			$controllerFile = dirname(dirname(__FILE__))."\controllers\\{$controller}.controller.php";
			if(file_exists($controllerFile))
			{
				require $controllerFile;
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

