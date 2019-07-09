<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
//GENERAL AREA
$route['login'] = 'general/login';
$route['profile'] = 'general/profile';
$route['logout'] = 'general/logout';


//ADMIN AREA
$route['webConf'] = 'admin/webConf';
$route['category'] = 'admin/category';
$route['dashboard'] = 'general/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
