<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// error_reporting(1);

// Check Route
$route = $_SERVER['PATH_INFO'];
$route = trim($route, '/');
$route = explode('/', $route);

// Default View
$view = 'index';

if ($route[0] == 'post') {
	$view = 'post';
}

// Check Params or UID
if (!isset($route[1])) {
	return false;
	exit;
}

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/app/Conn.php');
require_once(__DIR__ . '/helper/Post.php');

$conn = new Conn();
$currentPost = $conn->get_post($route[1]);

Post::_set($conn->get_post($route[1]));

include_once(__DIR__ . '/themes/default/' . $view . '.php');