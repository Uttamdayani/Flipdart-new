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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['single-category/(:any)'] = 'home/single_category/$1';
$route['single-products/(:any)'] = 'home/single_products/$1';
$route['address'] = 'home/add_to_address';
$route['category-products/(:any)'] = 'home/category_products/$1';

$route['order-summary'] = 'home/add_to_cart';
$route['address'] = 'home/add_to_address';
$route['payment'] = 'home/payment_page';


$route['expresslogin'] = 'auth/login';


$route['web-setting'] = 'admin/web_setting';
$route['insert_web_setting_segement_count'] = 'admin/insert_web_setting_segement_count';

$route['categories'] = 'admin/categories';
$route['add-categories'] = 'admin/add_categories';
$route['add-categories/(:any)'] = 'admin/add_categories/$1';

$route['products'] = 'admin/products';
$route['add-products'] = 'admin/add_products';
$route['add-products/(:any)'] = 'admin/add_products/$1';
$route['home/get-data'] = 'home/getData';


$route['terms'] = 'home/terms';
$route['policy'] = 'home/policy';
$route['refund'] = 'home/refund';
$route['contact'] = 'home/contact';
$route['about'] = 'home/about';
