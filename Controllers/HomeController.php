<?php

require_once __DIR__ . "/../Models/AlbumModels.php";
require_once __DIR__ . "/../Config/Media.php";

class HomeController
{
	public function index()
	{
		$this->render("Home/index.php", array(
			"title" => "Linkin Park",
			"albums" => array_slice(AlbumModels::all(), 0, 3),
			"heroImage" => Media::IMAGE_PATH . Media::HERO_IMAGE,
			"heroArtImage" => Media::heroArtImage(Media::HERO_ART_IMAGE),
		));
	}

	private function render($view, $data = array())
	{
		extract($data);
		require __DIR__ . "/../Views/Templates/" . $view;
	}
}
