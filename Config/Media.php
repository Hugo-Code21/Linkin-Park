<?php

class Media
{
	// Replace these server-side filenames when you want to change the media.
	const IMAGE_PATH = "Assets/images/IMG/";
	const PROFILE_IMAGE_PATH = "Assets/images/IMG/";
	const AUDIO_PATH = "Assets/images/audio/";
	const HERO_IMAGE = "Universe of HD Wallpapers - WallpaperCat.jpg";
	const HERO_ART_IMAGE = "Linkin Park (2).jpg";
	const BACKGROUND_MUSIC = "Faint (Official Music Video) [4K UPGRADE] – Linkin Park - (320 Kbps).mp3";

	public static function albumImage($fileName)
	{
		return self::IMAGE_PATH . $fileName;
	}

	public static function memberImage($fileName)
	{
		return self::IMAGE_PATH . $fileName;
	}

	public static function profileImage($fileName)
	{
		return self::PROFILE_IMAGE_PATH . $fileName;
	}

	public static function heroArtImage($fileName)
	{
		return self::PROFILE_IMAGE_PATH . $fileName;
	}

	public static function backgroundMusic()
	{
		$relativePath = self::AUDIO_PATH . self::BACKGROUND_MUSIC;
		return file_exists(__DIR__ . "/../" . $relativePath) ? $relativePath : "";
	}
}