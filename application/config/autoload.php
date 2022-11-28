<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');
$autoload['packages']  	= array();
$autoload['libraries'] 	= array('email', 'session', 'database', 'user_agent', 'form_validation','base');
$autoload['drivers']   	= array();
$autoload['config']    	= array('custom_config');
$autoload['helper'] 	= array('url', 'file', 'directory');
$autoload['language']  	= array();
$autoload['model']     	= array( 
    'user_model',   
    'station_model',
    'substation_model',
    'user_role_model'
);