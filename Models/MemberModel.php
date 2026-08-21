<?php

require_once __DIR__ . "/../Config/Media.php";

class MemberModel
{
	public static function all()
	{
		return array(
			array(
				"name" => "Mike Shinoda",
				"role" => "Vocals, guitar, keys",
				"image" => Media::memberImage("mike-shinoda.png"),
			),
			array(
				"name" => "Brad Delson",
				"role" => "Lead guitar",
				"image" => Media::memberImage("brad-delson.png"),
			),
			array(
				"name" => "Dave Farrell",
				"role" => "Bass",
				"image" => Media::memberImage("dave-farrell.png"),
			),
			array(
				"name" => "Joe Hahn",
				"role" => "Turntables, samples",
				"image" => Media::memberImage("joe-hahn.png"),
			),
			array(
				"name" => "Rob Bourdon",
				"role" => "Drums",
				"image" => Media::memberImage("rob-bourdon.png"),
			),
			array(
				"name" => "Chester Bennington",
				"role" => "Vocals",
				"image" => Media::memberImage("chester-bennington.png"),
			),
		);
	}
}
