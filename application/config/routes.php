<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['ta'] = "ta/index";
$route['ta/(:num)'] = "ta/show/$1";
$route['taCreate']['post'] = "ta/store";
$route['taEdit/(:any)'] = "ta/edit/$1";
$route['taUpdate/(:any)']['put'] = "ta/update/$1";
$route['taDelete/(:any)']['delete'] = "ta/delete/$1";