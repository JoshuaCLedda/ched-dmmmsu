<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//Authentication
$route['login'] = 'Login';
$route['register'] = 'Register';


// Admin
$route['admin/dashboard'] = 'Dashboard';
