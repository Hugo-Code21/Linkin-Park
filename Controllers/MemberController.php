<?php

require_once __DIR__ . "/../Models/MemberModel.php";

class MemberController
{
	public function index()
	{
		$this->render("Home/Albums/Member/index.php", array(
			"title" => "Members",
			"members" => MemberModel::all(),
		));
	}

	private function render($view, $data = array())
	{
		extract($data);
		require __DIR__ . "/../Views/Templates/" . $view;
	}
}
