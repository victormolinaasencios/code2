<?php 
$system_path='system'.DIRECTORY_SEPARATOR;
$system_path='system/';
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH',$system_path);
define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('APPPATH', 'application/');
define('ENVIRONMENT', 'development');
define('VIEWPATH', "application/views/");
require_once 'system/core/CodeIgniter.php';
