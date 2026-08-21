<?php

require_once __DIR__ . "/../Config/Media.php";

class AboutController
{
	public function index()
	{
		$this->render("About/index.php", array(
			"title" => "About me",
			"profileImage" => Media::profileImage("profile.jpg"),
			"profile" => array(
				"name" => "Hugo Delvian Maheswara",
				"school" => "SMK MAHARDHIKA BATUJAJAR",
				"class" => "XII RPL 2",
				"summary" => "Love Coding, Music, and Design. I am a student who is passionate about web development and design. I enjoy creating beautiful and functional websites that provide a great user experience.",
			),
		));
	}

	private function render($view, $data = array())
	{
		extract($data);
		require __DIR__ . "/../Views/Templates/" . $view;
	}
}
