<?php require __DIR__ . "/../../Header.php"; ?>

<?php if ($album === null): ?>
	<section class="page-intro reveal">
		<p class="eyebrow">404 / ARCHIVE</p>
		<h1>That record<br><em>is missing.</em></h1>
		<a class="button" href="<?= $baseUrl ?>/albums">
			Back to albums <span aria-hidden="true">-&gt;</span>
		</a>
	</section>
<?php else: ?>
	<section class="detail-hero reveal">
		<div>
			<p class="eyebrow">ALBUM 0<?= $album["id"] ?> / <?= htmlspecialchars($album["year"], ENT_QUOTES, "UTF-8") ?></p>
			<h1><?= htmlspecialchars($album["title"], ENT_QUOTES, "UTF-8") ?></h1>
			<p class="hero-copy"><?= htmlspecialchars($album["description"], ENT_QUOTES, "UTF-8") ?></p>
		</div>
		<div class="record-art record-art-<?= $album["id"] ?>" aria-label="<?= htmlspecialchars($album["title"], ENT_QUOTES, "UTF-8") ?> artwork">
			<span aria-hidden="true">LP</span>
			<b>0<?= $album["id"] ?></b>
		</div>
	</section>
	<section class="detail-facts reveal">
		<div>
			<span>RELEASE</span>
			<strong><?= htmlspecialchars($album["year"], ENT_QUOTES, "UTF-8") ?></strong>
		</div>
		<div>
			<span>FORMAT</span>
			<strong>Studio album</strong>
		</div>
		<div>
			<span>STATUS</span>
			<strong>Essential</strong>
		</div>
	</section>
	<a class="text-link" href="<?= $baseUrl ?>/albums">&lt;- Back to discography</a>
<?php endif; ?>
<?php require __DIR__ . "/../../Footer.php"; ?>
