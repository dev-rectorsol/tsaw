<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//For pages those have a static name
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = 'authentication/logout';
$route['login'] = 'authentication/authentication/index';
$route['auth'] = 'authentication/authentication/index';
$route['join'] = 'authentication/register';
$route['forget'] = 'authentication/resetView';

// External
$route['autocities'] = 'external/auto_cities';
$route['autostates'] = 'external/auto_states';
$route['cities'] = 'external/get_cities';
$route['states'] = 'external/get_states';
$route['ifscdata'] = 'external/datayuge';
$route['file_upload'] = 'file_upload/index';
$route['gallery_upload'] = 'file_upload/add_gallery';





//  Admin Routing vai Admin

$route['admin'] = 'admin/dashboard';
$route['customer'] = 'admin/user';


//  product Routing

$route['product'] = 'product/index';
$route['product/kycform'] = 'product/notification/kycform';
$route['product/kycsubmit'] = 'product/documents/kycsubmit';
$route['documents/add'] = 'product/documents/add';

$route['cpending'] = 'product/notification/cpending';
$route['kycnotify'] = 'product/notification/kycnotify';
$route['customer'] = 'admin/user';
$route['file_upload'] = 'file_upload/index';
$route['gallery_upload'] = 'file_upload/add_gallery';



//  Executor Routing

$route['executor'] = 'executor/dashboard';



// Application Routing vie User

$route['api/login'] = 'api/log';
$route['api/join'] = 'api/users/user';
$route['api/gallery'] = 'api/gallery';
$route['api/contacts'] = 'api/settings/contacts';
$route['api/home_slider'] = 'api/settings/home_slider';
$route['api/prices'] = 'api/settings/metal_price';
$route['api/address'] = 'api/settings/address';
