<?php

require_once __DIR__ . "/../Config/Media.php";

class AlbumModels
{
	const HYBRID_THEORY_IMAGE = "Linkin Park (1).jpg";
	const METEORA_IMAGE = "LINKIN PARK (2).jpg";
	const MINUTES_TO_MIDNIGHT_IMAGE = "linkin park _minutes to midnight_ header.jpg";
	const A_THOUSAND_SUNS_IMAGE = "linkin park (3).jpg";
	const LIVING_THINGS_IMAGE = "Linkin Park.jpg";
	const THE_HUNTING_PARTY_IMAGE = "Universe of HD Wallpapers - WallpaperCat.jpg";

	public static function all()
	{
		return array(
			array(
				"id" => 1,
				"year" => "2000",
				"title" => "Hybrid Theory",
				"description" => "The debut record that introduced Linkin Park's collision of rock, hip-hop, and electronic sound.",
				"image" => Media::albumImage(self::HYBRID_THEORY_IMAGE),
			),
			array(
				"id" => 2,
				"year" => "2003",
				"title" => "Meteora",
				"description" => "A focused, atmospheric evolution of the band's signature intensity.",
				"image" => Media::albumImage(self::METEORA_IMAGE),
			),
			array(
				"id" => 3,
				"year" => "2007",
				"title" => "Minutes to Midnight",
				"description" => "A wider palette and more direct songwriting from a band refusing to stand still.",
				"image" => Media::albumImage(self::MINUTES_TO_MIDNIGHT_IMAGE),
			),
			array(
				"id" => 4,
				"year" => "2010",
				"title" => "A Thousand Suns",
				"description" => "A cinematic concept album about conflict, fear, and the human cost of power.",
				"image" => Media::albumImage(self::A_THOUSAND_SUNS_IMAGE),
			),
			array(
				"id" => 5,
				"year" => "2012",
				"title" => "Living Things",
				"description" => "Personal lyrics and electronic textures meet the band's strongest pop instincts.",
				"image" => Media::albumImage(self::LIVING_THINGS_IMAGE),
			),
			array(
				"id" => 6,
				"year" => "2014",
				"title" => "The Hunting Party",
				"description" => "A raw, guitar-forward return to the energy of alternative rock.",
				"image" => Media::albumImage(self::THE_HUNTING_PARTY_IMAGE),
			),
		);
	}

	public static function find($id)
	{
		foreach (self::all() as $album) {
			if ($album["id"] === $id) {
				return $album;
			}
		}

		return null;
	}
}
