<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'general';
$route['login'] = 'general/login';
$route['logout'] = 'general/logout';

$route['dashboard'] = 'general/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
