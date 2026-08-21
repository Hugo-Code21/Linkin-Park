<?php require __DIR__ . "/../../../Header.php"; ?>

<section class="page-intro reveal">
	<p class="eyebrow">THE PEOPLE BEHIND THE SOUND</p>
	<h1>Six voices.<br><em>One frequency.</em></h1>
	<p class="intro-copy">Meet the musicians who shaped Linkin Park's unmistakable world.</p>
</section>

<section class="member-grid section-block reveal">
	<?php foreach ($members as $index => $member): ?>
		<article class="member-card">
			<span class="member-index">0<?= $index + 1 ?></span>
			<div class="member-avatar member-avatar-<?= $index + 1 ?>" role="img" aria-label="<?= htmlspecialchars($member["name"], ENT_QUOTES, "UTF-8") ?>">
				<span aria-hidden="true"><?= htmlspecialchars(substr($member["name"], 0, 1), ENT_QUOTES, "UTF-8") ?></span>
			</div>
			<h2><?= htmlspecialchars($member["name"], ENT_QUOTES, "UTF-8") ?></h2>
			<p><?= htmlspecialchars($member["role"], ENT_QUOTES, "UTF-8") ?></p>
		</article>
	<?php endforeach; ?>
</section>
<?php require __DIR__ . "/../../../Footer.php"; ?>
