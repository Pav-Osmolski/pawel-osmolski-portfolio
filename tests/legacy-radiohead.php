<?php
declare(strict_types=1);
set_error_handler(static function (int $severity, string $message): never { throw new RuntimeException($message); });
$root = dirname(__DIR__);
ob_start();
require $root . '/public/radiohead-remixes/legacy.php';
$html = ob_get_clean();
foreach (['Radiohead Remixes', 'noindex, follow', 'href="/legacy.php"', 'Thom Yorke', 'Jonny Greenwood', 'Lana Chircop'] as $required) {
    if (!str_contains($html, $required)) throw new RuntimeException('Missing ' . $required);
}
preg_match_all('/(?:src|href|content)="(\/assets\/[^"]+)"/', $html, $assets);
foreach ($assets[1] as $asset) if (!is_file($root . '/public' . $asset)) throw new RuntimeException('Missing ' . $asset);
$css = file_get_contents($root . '/public/assets/legacy/radiohead-remixes/screen.css');
preg_match_all('/url\(([^)]+)\)/', $css, $assets);
foreach ($assets[1] as $asset) if (!is_file($root . '/public/assets/legacy/radiohead-remixes/' . $asset)) throw new RuntimeException('Missing ' . $asset);
foreach (['.swf', 'analytics.js', 'widgets.js', 'src="http:'] as $obsolete) {
    if (str_contains($html, $obsolete)) throw new RuntimeException('Obsolete dependency ' . $obsolete);
}
if (!str_contains(file_get_contents($root . '/src/legacy/remix.php'), 'href="/radiohead-remixes/legacy.php"')) throw new RuntimeException('Legacy link missing');
foreach (['public/index.php', 'src/header.php', 'src/footer.php', 'public/sitemap.xml'] as $file) {
    if (str_contains(file_get_contents($root . '/' . $file), '/radiohead-remixes/legacy.php')) throw new RuntimeException('Linked from modern site');
}
echo 'PASS: legacy Radiohead rendering, credits, artwork, fonts, legacy navigation and isolated entry point.' . PHP_EOL;
