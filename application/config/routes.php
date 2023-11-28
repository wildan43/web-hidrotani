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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['panduan'] = 'index/panduan';
$route['artikel'] = 'index/artikel';
$route['maps2'] = 'index/maps2';
$route['Login'] = 'index/Login';
$route['SignUp'] = 'index/SignUp';
$route['Adminprofile'] = 'index/Adminprofile';
$route['profile'] = 'index/profile';
$route['signin'] = 'index/signin';
$route['Admin_update_profile'] = 'index/Admin_update_profile';
$route['saveupdate'] = 'index/saveupdate';
$route['register'] = 'index/register';
$route['Adminprofile'] = 'index/Adminprofile';
$route['adminbasic-table'] = 'index/adminbasic-table';
$route['dataArticle'] = 'index/dataArticle';
$route['AdminHidropeta'] = 'index/AdminHidropeta';
$route['adminbasic_table'] = 'index/adminbasic_table';
$route['InsertArticle'] = 'index/InsertArticle';
$route['deletearticle'] = 'index/deletearticle';
$route['sumbitarticle'] = 'index/sumbitarticle';
$route['edit_article'] = 'index/edit_article';
$route['SumbitHidropeta'] = 'index/SumbitHidropeta';
$route['article1'] = 'index/article1';




?>