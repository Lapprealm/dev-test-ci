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

$route['hmif'] = "hmif/index";
$route['hmif/(:num)'] = "hmif/show/$1";
$route['hmifCreate']['post'] = "hmif/store";
$route['hmifEdit/(:any)'] = "hmif/edit/$1";
$route['hmifUpdate/(:any)']['put'] = "hmif/update/$1";
$route['hmifDelete/(:any)']['delete'] = "hmif/delete/$1";