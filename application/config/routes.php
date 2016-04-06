<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'dashboard/home';

$route['login'] = 'dashboard/login';
$route['ajax_login'] = 'dashboard/ajaxLogin';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['edit_user']    =  'user/edit_user';
$route['add_user']     =  'user/add_user';
$route['detail_user']  =  'user/detail_user';


