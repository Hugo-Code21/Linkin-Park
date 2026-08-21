<?php require __DIR__ . "/../../Header.php"; ?>

<section class="page-intro reveal">
	<p class="eyebrow">DISCOGRAPHY / 2000 - 2017</p>
	<h1>Every era leaves<br><em>a different mark.</em></h1>
	<p class="intro-copy">Six studio albums. One restless instinct: keep moving forward.</p>
</section>
<section class="section-block album-list reveal">
	<?php foreach ($albums as $album): ?>
		<a class="album-row" href="<?= $baseUrl ?>/albums/<?= $album["id"] ?>">
			<span class="album-number">0<?= $album["id"] ?></span>
			<span class="album-thumb album-thumb-<?= $album["id"] ?>" aria-hidden="true">LP</span>
			<span class="album-row-title">
				<strong><?= htmlspecialchars($album["title"], ENT_QUOTES, "UTF-8") ?></strong>
				<small><?= htmlspecialchars($album["description"], ENT_QUOTES, "UTF-8") ?></small>
			</span>
			<span class="album-year"><?= htmlspecialchars($album["year"], ENT_QUOTES, "UTF-8") ?></span>
			<span class="card-arrow" aria-hidden="true">-&gt;</span>
		</a>
	<?php endforeach; ?>
</section>
<?php require __DIR__ . "/../../Footer.php"; ?>
