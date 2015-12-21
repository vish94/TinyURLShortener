<?php
if ($_SERVER['HTTP_HOST']=="localhost") {
	$dir_root = $_SERVER['DOCUMENT_ROOT'].'/tinyurl/';
	$dir_site = 'http://localhost/tinyurl/';
	$baseUrl = 'http://localhost/tinyurl/';
} else {
	$dir_root = '/home/ubuntu/workspace/';
	$dir_site = 'https://tinyurl-vish94.c9users.io/';
	$baseUrl = 'https://tinyurl-vish94.c9users.io/';
} 

$cdn = $dir_site.'assets/';
$dir_uploads = $dir_root.'assets/uploads/';

$dir_app = $dir_root.'application/';
$dir_scripts = $dir_root.'scripts/';
$dir_db = $dir_root.'db/';
$dir_library = $dir_root.'library/';


//models directory
$dir_models = $dir_app.'models/';
$dir_config = $dir_root.'config/';
$dir_class = $dir_models;
$dir_functions = $dir_scripts.'functions/';

//controllers directory
$controllers = $dir_root.'controllers/';
$public = $controllers.'public/';

//assets
$dir_assets = $dir_site.'assets/';
$dir_assets_css = $cdn.'css/';
$dir_assets_js = $cdn.'js/';
$dir_assets_img = $cdn.'img/';


//views directory
$dir_views = $dir_app.'views/';
$dir_public = $dir_views.'public/';
$dir_public_requires = $dir_public.'requires/';


$title = 'TinyURL';
$description = 'TinyURL';

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//$meta_keywords = "DTU, Delhi, Delhi Technological University, Society, Society of Robotics, Robotics, Student, Robots, Electronics, Electrical, Mechanical";

$time = strftime("%Y-%m-%d %H:%M:%S", time()+1800);
?>