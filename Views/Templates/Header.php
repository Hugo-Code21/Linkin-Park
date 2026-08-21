<?php
$baseUrl = rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
$baseUrl = $baseUrl === "/" ? "" : $baseUrl;
$pageTitle = isset($title) ? $title . " | LP Archive" : "LP Archive";
$currentPath = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
$currentPath = preg_replace("#^" . preg_quote(trim($baseUrl, "/"), "#") . "#", "", $currentPath);
$currentPath = trim($currentPath, "/");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8") ?></title>
	<link rel="stylesheet" href="<?= $baseUrl ?>/Assets/css/Style.css">
</head>
<body>
<header class="site-header">
	<a class="brand" href="<?= $baseUrl ?>/" aria-label="LP Archive home"><span class="brand-mark">LP</span><span class="brand-name">ARCHIVE</span></a>

	<nav class="site-nav" aria-label="Main navigation">
		<a class="<?= $currentPath === "" ? "is-active" : "" ?>" href="<?= $baseUrl ?>/">Index</a>
		<a class="<?= $currentPath === "albums" || strpos($currentPath, "albums/") === 0 ? "is-active" : "" ?>" href="<?= $baseUrl ?>/albums">Discography</a>
		<a class="<?= $currentPath === "members" ? "is-active" : "" ?>" href="<?= $baseUrl ?>/members">The band</a>
		<a class="<?= $currentPath === "about" ? "is-active" : "" ?>" href="<?= $baseUrl ?>/about">About me</a>
	</nav>
	<span class="header-status"><i></i> ONLINE / 2026</span>
</header>

<main class="site-main">
