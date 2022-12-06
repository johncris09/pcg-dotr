<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['dashboard'] = 'dashboard/index';
$route['user_login'] = 'login/login';
$route['signout'] = 'dashboard/signout';

// marep 
$route['add_marep'] = 'marep/add';
$route['insert_marep'] = 'marep/insert';


// marsaf 
$route['add_marsaf'] = 'marsaf/add';
$route['insert_marsaf'] = 'marsaf/insert';

// marsar
$route['add_marsar'] = 'marsar/add';
$route['insert_marsar'] = 'marsar/insert'; 

// marslec
$route['add_marslec'] = 'marslec/add';
$route['insert_marslec'] = 'marslec/insert';

// urban_marsar
$route['add_urban_marsar'] = 'urban_marsar/add';
$route['insert_urban_marsar'] = 'urban_marsar/insert';

//station
$route['add_station'] = 'station/save';
$route['update_station'] = 'station/update';
$route['station/delete/(:num)'] = 'station/delete/$1';

//sub_station
$route['add_sub_station'] = 'substation/save';
$route['update_sub_station'] = 'substation/update';
$route['substation/delete/(:num)'] = 'substation/delete/$1';

//user
$route['add_user'] = 'user/save';
$route['update_user'] = 'user/update';
$route['change_password'] = 'user/change_password';
$route['user/delete/(:num)'] = 'user/delete/$1'; 

//user roles
$route['add_user_role'] = 'user_role/save';
$route['update_user_role'] = 'user_role/update';
$route['user_role/delete/(:num)'] = 'user_role/delete/$1'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;