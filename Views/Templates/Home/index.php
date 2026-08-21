<?php require __DIR__ . "/../Header.php"; ?>

<section class="landing-hero reveal">
	<div class="hero-kicker"><span class="live-dot"></span> LP / FIELD NOTES 001</div>
	<div class="hero-layout">
		<div class="hero-copy-wrap">
			<p class="hero-index">A — 2000 / NOW</p>
			<h1>Turn the<br><em>volume up.</em></h1>
			<p class="hero-copy">A visual index of the records, people, and restless energy that made Linkin Park impossible to ignore.</p>
			<div class="hero-actions"><a class="button" href="<?= $baseUrl ?>/albums">Explore the records <span aria-hidden="true">&#8599;</span></a><a class="text-link scroll-link" href="#signal">Read the signal &#8595;</a></div>
		</div>
		<div class="hero-art">
			<img src="<?= $baseUrl ?>/<?= htmlspecialchars($heroArtImage, ENT_QUOTES, "UTF-8") ?>" alt="Linkin Park archive artwork">
		</div>
	</div>
	<div class="hero-marquee" aria-hidden="true"><span>HYBRID THEORY / METEORA / MINUTES TO MIDNIGHT / A THOUSAND SUNS / LIVING THINGS / THE HUNTING PARTY / </span></div>
</section>

<section class="media-import reveal">
	<div><p class="eyebrow">THE COLLECTION</p><h2>Six records.<br><em>Infinite aftershock.</em></h2><p>Start with the albums, then trace the people and ideas behind the sound.</p></div>

	<div class="media-tools">
		<div
			class="upload-tile server-artwork"
			style="background-image: url('<?= $baseUrl ?>/<?= htmlspecialchars($heroImage, ENT_QUOTES, "UTF-8") ?>');"
		>
			<strong>Archive / 2000—2014</strong><small>Six studio records</small>
		</div>
	</div>
</section>

<section id="signal" class="signal-strip reveal">
		<div><strong>06</strong><span>STUDIO<br>ALBUMS</span></div>
	<div><strong>25+</strong><span>YEARS OF<br>IMPACT</span></div>
	<div><strong>01</strong><span>UNMISTAKABLE<br>FREQUENCY</span></div>
</section>

<section class="manifesto reveal">
	<p class="eyebrow">WHY THIS ARCHIVE EXISTS</p>
	<h2>Some music does more<br>than fill the room.</h2>
	<p>It gives shape to the feeling you could not name. It turns the volume up on everything. Start anywhere and follow the signal.</p>
</section>

<section class="section-block reveal">
	<div class="section-heading">
		<div>
			<p class="eyebrow">A PLACE TO START</p><h2>Essential records</h2>
		</div>
		<a class="text-link" href="<?= $baseUrl ?>/albums">View all -&gt;</a>
	</div>

	<div class="album-grid">
		<?php foreach ($albums as $album): ?>
			<a
				class="album-card"
				href="<?= $baseUrl ?>/albums/<?= $album["id"] ?>"
				style="background-image: url('<?= $baseUrl ?>/<?= htmlspecialchars($album["image"], ENT_QUOTES, "UTF-8") ?>');"
			>
				<span class="album-number">0<?= $album["id"] ?></span>
				<span class="album-year"><?= htmlspecialchars($album["year"], ENT_QUOTES, "UTF-8") ?></span>
				<h3><?= htmlspecialchars($album["title"], ENT_QUOTES, "UTF-8") ?></h3>
				<span class="card-arrow" aria-hidden="true">-&gt;</span>
			</a>
		<?php endforeach; ?>
	</div>
</section>

<section class="closing-cta reveal">
	<p class="eyebrow">KEEP GOING</p>
	<h2>Find the record<br>that finds you.</h2>
	<a class="button button-light" href="<?= $baseUrl ?>/members">
		Meet the band <span aria-hidden="true">-&gt;</span>
	</a>
</section>

<?php require __DIR__ . "/../Footer.php"; ?>
