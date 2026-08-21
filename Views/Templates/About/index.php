<?php require __DIR__ . "/../Header.php"; ?>

<section class="about-hero reveal">
	<div>
		<p class="eyebrow">ABOUT THE MAKER</p>
		<h1>Meet<br><em>the builder.</em></h1>
		<p class="hero-copy"><?= htmlspecialchars($profile["summary"], ENT_QUOTES, "UTF-8") ?></p>
	</div>
	<div class="about-badge">
		<img src="<?= $baseUrl ?>/<?= htmlspecialchars($profileImage, ENT_QUOTES, "UTF-8") ?>" alt="Profile portrait">
	</div>
</section>

<section class="about-layout section-block reveal">
	<div>
		<p class="eyebrow">QUICK FACTS</p>
		<h2>A little<br><em>context.</em></h2>
	</div>

	<div class="profile-facts">
		<div class="profile-fact">
			<span>Name</span>
			<strong><?= htmlspecialchars($profile["name"], ENT_QUOTES, "UTF-8") ?></strong>
		</div>
		<div class="profile-fact">
			<span>School</span>
			<strong><?= htmlspecialchars($profile["school"], ENT_QUOTES, "UTF-8") ?></strong>
		</div>
		<div class="profile-fact">
			<span>Class</span>
			<strong><?= htmlspecialchars($profile["class"], ENT_QUOTES, "UTF-8") ?></strong>
		</div>
	</div>
</section>

<section class="resume-section reveal" id="resume">
	<div class="resume-heading">
		<div>
			<p class="eyebrow">THE SHORT VERSION</p>
			<h2>My resume</h2>
		</div>
		<button class="button resume-toggle" type="button" data-resume-toggle aria-expanded="false" aria-controls="resume-content">
			<span data-resume-label>Open resume</span>
			<span aria-hidden="true">&#8599;</span>
		</button>
	</div>

	<div class="resume-content" id="resume-content" data-resume-content hidden>
		<div class="resume-item">
			<span>01 / PROFILE</span>
			<p><?= htmlspecialchars($profile["summary"], ENT_QUOTES, "UTF-8") ?></p>
		</div>
		<div class="resume-item">
			<span>02 / EDUCATION</span>
			<p><?= htmlspecialchars($profile["school"], ENT_QUOTES, "UTF-8") ?><br><?= htmlspecialchars($profile["class"], ENT_QUOTES, "UTF-8") ?></p>
		</div>
		<div class="resume-item">
			<span>03 / INTERESTS</span>
			<p>Web design, music archives, visual storytelling, and thoughtful digital experiences.</p>
		</div>
		<button class="text-link print-resume" type="button" data-print-resume>Print this resume &#8599;</button>
	</div>
</section>

<?php require __DIR__ . "/../Footer.php"; ?>
