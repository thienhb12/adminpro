<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Dev by Mr Phuc - nguyenvanphuc0626@gmail.com
 */

$route['default_controller']             = 'home';
$route['gioi-thieu']                     = 'about';
$route['lien-he']                        = 'contact';
$route['dang-nhap']                      = 'member';
$route['dang-ky']                        = 'member/registered';
$route['so-sanh']                        = 'compare';
$route['hang-moi-ve']                    = 'product/new_products_go';
$route['hang-moi-ve/(:num)']             = 'product/new_products_go/$1';
$route['gio-hang']                       = 'product/order';	
$route['thanh-toan']                     = 'product/checkout';
$route['xem-nhieu']                      = 'product/top_view_product';
$route['xem-nhieu/(:num)']               = 'product/top_view_product/(:num)';
$route['ban-chay']                       = 'product/sell_product';
$route['ban-chay/(:num)']                = 'product/sell_product/(:num)';
$route['([a-zA-Z0-9-_]+)p(:num)']        = 'product/detail/(:num)';
$route['([a-zA-Z0-9-_]+)n(:num)']        = 'news/detail/(:num)';
$route['category/(:any)']                = 'product/category/$1';
$route['([a-zA-Z0-9-_]+)c(:num)/(:num)'] = 'product/category/(:num)/(:num)';
$route['tin-tuc']                        = 'news';
$route['404_override']                   = '';
//$route['news/(:any)'] 	          = "news/index/$1";