<?php
/**
 * User: atinosun@yeah.net
 * Date: 2018/11/23
 * Time: 10:08
 * Brief:入口文件
 */

define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();