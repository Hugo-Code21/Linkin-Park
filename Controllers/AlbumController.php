<?php

require_once __DIR__ . "/../Models/AlbumModels.php";

class AlbumController
{
	public function index()
	{
		$this->render("Home/Albums/index.php", array(
			"title" => "Albums",
			"albums" => AlbumModels::all(),
		));
	}

	public function detail($id)
	{
		$album = AlbumModels::find($id);
		if ($album === null) {
			http_response_code(404);
			$this->render("Home/Albums/detail.php", array(
				"title" => "Album tidak ditemukan",
				"album" => null,
			));
			return;
		}

		$this->render("Home/Albums/detail.php", array(
			"title" => $album["title"],
			"album" => $album,
		));
	}

	private function render($view, $data = array())
	{
		extract($data);
		require __DIR__ . "/../Views/Templates/" . $view;
	}
}
