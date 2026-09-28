<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0c0d0f">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($description) ?>">
<link rel="canonical" href="<?= e(SITE_ORIGIN . $path) ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($description) ?>">
<meta property="og:url" content="<?= e(SITE_ORIGIN . $path) ?>">
<meta property="og:image" content="<?= e(SITE_ORIGIN) ?>/assets/images/social.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="/assets/images/social.jpg" type="image/jpeg">
<link rel="preload" href="<?= e(asset('fonts/league-gothic.woff2')) ?>" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= e(asset('site.css')) ?>">
<script src="<?= e(asset('site.js')) ?>" defer></script>
</head>
<body id="home" class="<?= $is_home ? 'portfolio' : 'remix-page' ?>">
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header wrap">
<a class="wordmark" href="/" aria-label="Pawel Osmolski, home">PO<span aria-hidden="true">.</span></a>
<nav aria-label="Main navigation">
<?php foreach (['intro' => 'About', 'music' => 'Music', 'web-design' => 'Web', 'sound-design' => 'Sound', 'remix' => 'Remix'] as $id => $label): ?>
<a href="<?= $is_home ? '' : '/' ?>#<?= e($id) ?>"><?= e($label) ?></a>
<?php endforeach; ?>
</nav>
<a class="header-contact" href="<?= $is_home ? '' : '/' ?>#contact">Get in touch <span aria-hidden="true">↗</span></a>
</header>
