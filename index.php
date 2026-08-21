<?php

require_once __DIR__ . "/Controllers/HomeController.php";
require_once __DIR__ . "/Controllers/AlbumController.php";
require_once __DIR__ . "/Controllers/MemberController.php";
require_once __DIR__ . "/Controllers/AboutController.php";

$requestPath = parse_url($_SERVER["REQUEST_URI"] ?? "/", PHP_URL_PATH) ?: "/";
$basePath = rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

if ($basePath !== "" && $basePath !== "/" && strpos($requestPath, $basePath) === 0) {
	$requestPath = substr($requestPath, strlen($basePath));
}

$requestPath = trim($requestPath, "/");
$segments = $requestPath === "" ? array() : explode("/", $requestPath);

if (count($segments) === 0) {
	(new HomeController())->index();
	exit;
}

switch ($segments[0]) {
	case "albums":
		if (isset($segments[1]) && ctype_digit($segments[1])) {
			(new AlbumController())->detail((int) $segments[1]);
		} elseif (!isset($segments[1])) {
			(new AlbumController())->index();
		} else {
			http_response_code(404);
			echo "Album tidak ditemukan.";
		}
		break;
	case "members":
		(new MemberController())->index();
		break;
	case "about":
		(new AboutController())->index();
		break;
	default:
		http_response_code(404);
		echo "Halaman tidak ditemukan.";
}