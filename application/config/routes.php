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
//////////////////////PUBLIC ROUTES/////////////////////////
$route['home'] = 'Home_Controller';


//////////////////////ADMIN  ROUTES//////////////////////////
$route['dashboard'] = 'Admin_Controller/dashboard';


///////////////////// UNIT ROUTES////////////////////////////
$route['unit-login'] = 'Unit_Controller/login';
$route['unit/logout'] = 'Unit_Controller/logout';
$route['unit-login/verify'] = 'Unit_Controller/verify';
$route['unit-admin'] = 'Unit_Controller/dashboard';
$route['(:any)/unit-home'] = 'Unit_Controller/dashboard';
$route['(:any)/unit-members'] = 'Unit_Controller/view_all_members';
$route['(:any)/unit-members/add'] = 'Unit_Controller/add_member';
$route['(:any)/unit-members/add/submit'] = 'Unit_Controller/add_member_submit';
$route['(:any)/unit-members/delete/(:num)'] = 'Unit_Controller/deleet_member/$1';

$route['(:any)/unit-products'] = 'Unit_Controller/view_products';
$route['(:any)/unit-products/add'] = 'Unit_Controller/add_products';
$route['(:any)/unit-products/add/submit'] = 'Unit_Controller/add_product_submit';
$route['(:any)/unit-products/delete/(:num)'] = 'Unit_Controller/delete_product/$1';

$route['(:any)/unit-loans'] = 'Unit_Controller/view_loan';

$route['(:any)/unit-events'] = 'Unit_Controller/view_event';
$route['(:any)/unit-events/add'] = 'Unit_Controller/add_event';
$route['(:any)/unit-events/add/submit'] = 'Unit_Controller/add_event_submit';
$route['(:any)/unit-events/delete/(:num)'] = 'Unit_Controller/delete_event/$1';


/*units*/
$route['dashboard/units/add'] = 'Admin_Controller/add_unit';
$route['dashboard/units'] = 'Unit_Controller/view_all';
$route['dashboard/units/add/submit'] = 'Unit_Controller/add_unit';
$route['dashboard/units/delete/(:num)'] = 'Unit_Controller/delete/$1';




/*loans*/
$route['dashboard/loans'] = 'Loan_Controller/view';
$route['dashboard/loans/add'] = 'Loan_Controller/add';


///////////////////////MEMBER ROUTES/////////////////////////
/*MEMBER LOGIN*/
$route['member/login'] = 'Member_Controller/login';
$route['member/logout'] = 'Member_Controller/logout';

$route['(:any)/home'] = 'Member_Controller/dashboard';
$route['(:any)/loan'] = 'Member_Controller/view_loans';
$route['(:any)/loan/apply/(:num)'] = 'Member_Controller/loan_registration/$1';
$route['(:any)/loan/apply/submit'] = 'Member_Controller/loan_submit';


/*member*/
$route['dashboard/members/add'] = 'Admin_Controller/add_member';
$route['dashboard/members/delete/(:num)'] = 'Member_Controller/delete/$1';
$route['dashboard/members/add/submit'] = 'Member_Controller/add_member';
$route['dashboard/members'] = 'Member_Controller/view_all';


/*events*/
$route['dashboard/events/add'] = 'Admin_Controller/add_event';
//$route['dashboard/events/delete'] = 'Event_Controller/delete';
$route['dashboard/events'] = 'Event_Controller/index';
$route['dashboard/events/add/submit'] = 'Event_Controller/add';
$route['dashboard/events/delete/(:num)'] = 'Event_Controller/delete/$1';


/*products*/
$route['dashboard/products/add'] = 'Admin_Controller/add';
$route['dashboard/products'] = 'Product_Controller/index';
$route['dashboard/products/delete/(:num)'] = 'Product_Controller/delete/$1';
$route['dashboard/products/add/submit'] = 'Product_Controller/add';



/*DEPOSIT*/
$route['dashboard/deposits/add'] = 'Admin_Controller/add';
$route['dashboard/deposits/'] = 'Deposit_Controller/add';
$route['dashboard/deposits/view'] = 'Admin_Controller/view';


/*user*/
$route['dashboard/'] = 'User_Controller/';

/*USER LOGIN*/
$route['dashboard/users/login'] = 'User_Controller/login';




/*Application routes*/
$route['default_controller'] = 'Home_Controller';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
