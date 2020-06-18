<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/abc']='posts/abc';

$route['users/profile']='users/profile';

$route['posts/add_commercial']='posts/add_commercial';
$route['posts/update']='posts/update';
$route['posts/view_all_commercial']='posts/view_all_commercial';
$route['posts/view_all_commercial_for_user']='posts/view_all_commercial_for_user';
$route['posts/all_commercial_list']='posts/all_commercial_list';
$route['posts/get_post']='posts/get_post';
$route['posts/get_post_by_city']='posts/get_post_by_city';
$route['posts/get_post_by_area']='posts/get_post_by_area';
$route['posts/get_post_by_size']='posts/get_post_by_size';
$route['posts/get_post_by_rooms']='posts/get_post_by_rooms';
$route['posts/get_post_by_rent']='posts/get_post_by_rent';
$route['posts/get_post_by_high_rent']='posts/get_post_by_high_rent';
$route['posts/get_post_by_low_rent']='posts/get_post_by_low_rent';
$route['posts/get_post_by_dhanmondi']='posts/get_post_by_dhanmondi';
$route['posts/get_post_by_banani']='posts/get_post_by_banani';
$route['posts/get_post_by_baridhara']='posts/get_post_by_baridhara';
$route['posts/get_post_by_basundhara']='posts/get_post_by_basundhara';
$route['posts/get_post_by_gulshan1']='posts/get_post_by_gulshan1';
$route['posts/get_post_by_gulshan2']='posts/get_post_by_gulshan2';
$route['posts/get_all_filtered']='posts/get_all_filtered';


$route['posts/view_commercial']='pages/list';
$route['posts/(:any)'] = 'posts/view_single/$1';


$route['residentials/add_residential']='residentials/add_residential';
$route['residentials/update_residential']='residentials/update_residential';
$route['residentials/view_all_residential']='residentials/view_all_residential';
$route['residentials/view_all_residential_for_user']='residentials/view_all_residential_for_user';
$route['residentials/all_residential_list']='residentials/all_residential_list';
$route['residentials/get_post']='residentials/get_post';
$route['residentials/get_post_by_city']='residentials/get_post_by_city';
$route['residentials/get_post_by_area']='residentials/get_post_by_area';
$route['residentials/get_post_by_size']='residentials/get_post_by_size';
$route['residentials/get_post_by_rooms']='residentials/get_post_by_rooms';
$route['residentials/get_post_by_rent']='residentials/get_post_by_rent';
$route['residentials/get_post_by_high_rent']='residentials/get_post_by_high_rent';
$route['residentials/get_post_by_low_rent']='residentials/get_post_by_low_rent';
$route['residentials/get_post_by_dhanmondi']='residentials/get_post_by_dhanmondi';
$route['residentials/get_post_by_banani']='residentials/get_post_by_banani';
$route['residentials/get_post_by_baridhara']='residentials/get_post_by_baridhara';
$route['residentials/get_post_by_basundhara']='residentials/get_post_by_basundhara';
$route['residentials/get_post_by_gulshan1']='residentials/get_post_by_gulshan1';
$route['residentials/get_post_by_gulshan2']='residentials/get_post_by_gulshan2';
$route['residentials/get_all_filtered']='residentials/get_all_filtered';





$route['residentials/view_residential']='pages/list';
$route['residentials/(:any)'] = 'residentials/view_single_residential/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

  