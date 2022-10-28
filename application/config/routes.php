<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['dashboard'] = 'dashboard/index';
$route['user_login'] = 'login/login';
$route['signout'] = 'dashboard/signout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
