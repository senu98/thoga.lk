<?php 

$dir_name  = dirname($_SERVER['SCRIPT_NAME']);

$path = substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name));

//echo __DIR__;
// echo file_exists(__DIR__ . "/app/views/buyer/selectDriver.php");
// die();

$routes = [
    'buyer/select-driver' => 'BuyerController@selectDriver',
    'buyer/home' => 'BuyerController@index',
    'buyer/booksuccess' => 'BuyerController@book',
    'buyer/home/organic' => 'BuyerController@organic',
    'buyer/cart' => 'BuyerController@cart',
    'buyer/checkout' => 'BuyerController@checkout',
    'buyer/summery' => 'BuyerController@summery',
    'buyer/logout' => 'BuyerController@logout',
    'buyer/profile' => 'BuyerController@profile',
    'buyer/orders' => 'BuyerController@orders',
    'buyer/viewmore' => 'BuyerController@viewmore',
    'buyer/about_us' => 'BuyerController@aboutus',
    'farmer/dash' => 'FarmerController@upcoming',
    'farmer/add_item' => 'FarmerController@add_item',
    'farmer/listed' => 'FarmerController@listed_items',
    'farmer/insert' => 'FarmerController@insert_items',
    'farmer/view_price' => 'FarmerController@view_price',
    'farmer/profile' => 'FarmerController@profile',
    'mentor/add_item' => 'mentorController@add_item',
    'mentor/insert' => 'mentorController@insert_items',
    'mentor/dash' => 'mentorController@upcoming',
    'mentor/listed' => 'mentorController@listed_items',
    'mentor/view_price' => 'mentorController@view_price',
    'signup' => 'SignUpController@show',
    'signup/buyer' => 'SignUpController@addbuyer',
    'signup/farmer' => 'SignUpController@addfarmer',
    'signup/driver'=> 'SignUpController@adddriver',
    'signup/mentor'=> 'SignUpController@addmentor',
    '' => 'LoginController@view',
    'login'=> 'LoginController@login',
    'forum' => 'ForumController@forum',
    'forum/postForum' => 'ForumController@postForum',
    'forum/fullview' => 'ForumController@viewfull',
    'driver/dashboard' => 'DriverController@driverdashboard',
    'driver/viewmore' => 'DriverController@viewmore',
    'driver/profile' => 'DriverController@viewprofile',
    'admin'=> 'AdminController@index',
    'admin/vieworders' => 'AdminController@vieworders'
    
 ];


foreach($routes as $route => $controller_route) {
    if ($route == $path) {
        $split = explode("@", $controller_route);
        $name = $split[0];
        $method = $split[1];

        require_once __DIR__ . "/app/controller/" . $name . ".php";

        $cont = new $name();
        call_user_func([$cont, $method]);
        


    }
}

die();


