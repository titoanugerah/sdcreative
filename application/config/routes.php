<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
//GENERAL AREA
$route['login'] = 'general/login';
$route['profile'] = 'general/profile';
$route['logout'] = 'general/logout';


//ADMIN AREA
$route['webConf'] = 'admin/webConf';
$route['account'] = 'admin/account';
$route['detailAccount/(:any)'] = 'admin/detailAccount/$1';
$route['category'] = 'admin/category';
$route['detailCategory/(:any)'] = 'admin/detailCategory/$1';
$route['dashboard'] = 'general/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//CLIENT AREA
$route['newOrder'] = 'client/newOrder';
$route['createOrder/(:any)'] = 'client/createOrder/$1';
$route['placeOrder/(:any)'] = 'client/placeOrder/$1';
$route['deleteDetailOrder/(:any)/(:any)'] = 'client/deleteDetailOrder/$1/$2';
$route['orderHistory'] = 'client/orderHistory';
