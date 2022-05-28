<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'DashboardController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'ArticleController/index/$1';
$route['dapur/login'] = 'dapur/LoginController/index';
