<?php
/**
 * 入口文件
 * @author 孙立杰
 * 2012-9-11
 */
require dirname(__FILE__).'/system/sun.php';
//开启系统
define('APP_NAME', 'home');
sun::run();