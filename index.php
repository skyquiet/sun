<?php
/**
 * 入口文件
 * @author 孙立杰
 * 2012-9-11
 */
require dirname(__FILE__).'/system/sun.php';
//应用名称
$appName = array('home','manage');
//开启系统
sun::run($appName);