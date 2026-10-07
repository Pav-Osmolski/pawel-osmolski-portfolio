<?php
declare(strict_types=1);

const SITE_ORIGIN = 'https://www.pawel-osmolski.com';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function asset(string $path): string {
    $root = dirname(__DIR__);
    $publicDirectory = is_dir($root . '/public_html/assets') ? 'public_html' : 'public';
    $file = $root . '/' . $publicDirectory . '/assets/' . $path;
    return '/assets/' . $path . '?v=' . (is_file($file) ? substr(hash_file('sha256', $file), 0, 10) : '1');
}
function page_start(string $title, string $description, string $path = '/'): void {
    $is_home = $path === '/';
    require __DIR__ . '/header.php';
}
function page_end(): void { require __DIR__ . '/footer.php'; }
function player(string $title, string $src, string $fallback, string $image, bool $video = false): void {
?>
<div class="player <?= $video ? 'player--video' : '' ?>" data-player>
    <img src="<?= e(asset('images/' . $image)) ?>" alt="" loading="lazy" width="700" height="700">
    <div class="player__overlay"><span class="eyebrow"><?= $video ? 'Watch & listen' : 'Selected recordings' ?></span><h3><?= e($title) ?></h3>
        <button type="button" data-embed="<?= e($src) ?>" data-title="<?= e($title) ?>" hidden><span aria-hidden="true">▶</span> Load <?= $video ? 'video' : 'player' ?></button>
        <a href="<?= e($fallback) ?>">Open on <?= $video ? 'YouTube' : 'SoundCloud' ?> ↗</a>
        <small>Loading connects to <?= $video ? 'YouTube' : 'SoundCloud' ?>.</small>
    </div>
</div>
<?php }
