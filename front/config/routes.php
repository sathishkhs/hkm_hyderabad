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
$route['default_controller'] = "index";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

include_once("database.php");

$con = mysqli_connect($db['default']['hostname'], $db['default']['username'],$db['default']['password'], $db['default']['database'] ) or die("Some error occurred during connection " . mysqli_error($con));

$query_pages = mysqli_query($con, "SELECT page_slug from pages where status_ind=1");
while($result_page = mysqli_fetch_assoc($query_pages)){
  // print_r($result_page);

        if(!empty($result_page['page_slug'])){
           
                $route[$result_page['page_slug']] = "pages/index/".$result_page['page_slug'];
        } else {
                $route[$result_page['page_id']] = "pages/index/".$result_page['page_id'];
        }
}
$seva_pages =  mysqli_query($con, "SELECT page_slug from festivals where status_ind=1");
while($result_page = mysqli_fetch_assoc($seva_pages)){
// print_r($result_page);
        if(!empty($result_page['page_slug'])){
                $route[$result_page['page_slug']] = "festivals/index/".$result_page['page_slug'];
        } else {
                // $route[$result_page['page_id']] = "seva_page/index/".$result_page['page_id'];
        }
}
$charitable_programs =  mysqli_query($con, "SELECT page_slug from charitable_programs where status_ind=1");
while($result_page = mysqli_fetch_assoc($charitable_programs)){
// print_r($result_page);
        if(!empty($result_page['page_slug'])){
                $route[$result_page['page_slug']] = "charitable_programs/index/".$result_page['page_slug'];
        } else {
                $route[$result_page['page_id']] = "charitable_programs/index/".$result_page['page_id'];
        }
}

// print_r($route);exit;
$route['connect'] = "custom_page/index/connect";

$route['contact-us'] = "custom_page/index/contact-us";

$route['cultural-education-for-children'] = "custom_page/index/cultural-education-for-children";
$route['gaushala'] = "custom_page/index/gaushala";
$route['image-gallery'] = "gallery";
$route['offer-sevas'] = "custom_page/index/offer-sevas";
$route['terms-condition'] = "custom_page/index/terms-condition";
// $route['privacy-policy'] = "custom_page/index/privacy-policy";
$route['donation-cancellation-and-refund-policy'] = "custom_page/index/donation-cancellation-and-refund-policy";

$route['festivals'] = 'custom_page/index/festivals';
$route['gallery'] = 'gallery';




// Custom Page Routes
$route['about-us'] = "custom_page/index/about-us";
$route['hare-krishna-gokul-dham'] = "custom_page/index/hare-krishna-gokul-dham";
$route['temple-construction'] = "custom_page/index/temple-construction";
$route['harinama-sanikirtana'] = "custom_page/index/harinama-sanikirtana";
$route['sumedhasa'] = "custom_page/index/sumedhasa";
$route['folk'] = "custom_page/index/folk";
$route['gifts'] = "custom_page/index/gifts";
$route['iing'] = "custom_page/index/iing";
$route['village-preaching'] = "custom_page/index/village-preaching";
$route['how-can-i-participate'] = "custom_page/index/how-can-i-participate";
$route['be-a-monk'] = "custom_page/index/be-a-monk";

