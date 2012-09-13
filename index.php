<?php
/**
 * 入口文件
 * @author 孙立杰
 * 2012-9-11
 */
require dirname(__FILE__).'/system/sun.php';
require dirname(__FILE__).'/config/config.php';
router::run($config);