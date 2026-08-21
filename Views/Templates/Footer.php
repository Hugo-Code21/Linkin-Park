<?php
require_once __DIR__ . "/../../Config/Media.php";

$baseUrl = isset($baseUrl) ? $baseUrl : "";
$backgroundMusic = Media::backgroundMusic();
$backgroundMusicUrl = implode("/", array_map("rawurlencode", explode("/", $backgroundMusic)));
?>

</main>

<aside class="audio-dock" data-audio-player>
	<div class="audio-info">
		<span class="audio-status">ARCHIVE PLAYER</span>
		<strong data-audio-title><?= $backgroundMusic !== "" ? "Server soundtrack" : "Audio archive offline" ?></strong>
	</div>

		<button class="audio-button" type="button" data-audio-toggle aria-label="Play background music" <?= $backgroundMusic === "" ? "disabled" : "" ?>>
		<span aria-hidden="true">&#9654;</span> Play
	</button>

		<?php if ($backgroundMusic !== ""): ?>
			<audio data-audio-element preload="metadata" src="<?= $baseUrl ?>/<?= htmlspecialchars($backgroundMusicUrl, ENT_QUOTES, "UTF-8") ?>"></audio>
		<?php endif; ?>
</aside>

<footer class="site-footer">
	<p><strong>LP ARCHIVE</strong> / music, memory, motion <span>Built as a living index of the noise.</span></p>
</footer>

<script src="<?= $baseUrl ?>/Assets/js/main.js"></script>
<script src="<?= $baseUrl ?>/Assets/js/audio-player.js"></script>
</body>
</html>
