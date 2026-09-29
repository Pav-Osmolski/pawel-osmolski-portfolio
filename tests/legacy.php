<?php
declare(strict_types=1);
set_error_handler(static function (int $severity, string $message): never { throw new RuntimeException($message); });
$root = dirname(__DIR__);
ob_start();
require $root . '/public/legacy.php';
$html = ob_get_clean();
foreach (['intro', 'music', 'web-design', 'sound-design', 'remix'] as $id) {
    if (substr_count($html, 'id="' . $id . '"') !== 1) throw new RuntimeException('Missing/duplicate section: ' . $id);
}
preg_match_all('/(?:src|href|srcset)="(\/assets\/[^" ]+)/', $html, $assets);
foreach ($assets[1] as $asset) if (!is_file($root . '/public' . $asset)) throw new RuntimeException('Missing asset ' . $asset);
$css = file_get_contents($root . '/public/assets/legacy/legacy.css');
preg_match_all('/url\(([^)]+)\)/', $css, $assets);
foreach ($assets[1] as $asset) if (!is_file($root . '/public/assets/legacy/' . $asset)) throw new RuntimeException('Missing CSS asset ' . $asset);
preg_match_all('/\bid="([^"]+)"/', $html, $ids);
if (count($ids[1]) !== count(array_unique($ids[1]))) throw new RuntimeException('Duplicate IDs');
preg_match_all('/href="#([^"]+)"/', $html, $anchors);
foreach ($anchors[1] as $id) if (!in_array($id, $ids[1], true)) throw new RuntimeException('Broken anchor ' . $id);
foreach (['jquery', 'onclick=', 'analytics.js', '.swf', 'filemtime(', 'src="http:'] as $obsolete) {
    if (str_contains($html, $obsolete)) throw new RuntimeException('Obsolete dependency: ' . $obsolete);
}
if (!str_contains($html, 'noindex, follow')) throw new RuntimeException('Missing noindex');
foreach (['public/index.php', 'src/header.php', 'src/footer.php', 'public/sitemap.xml'] as $file) {
    if (str_contains(file_get_contents($root . '/' . $file), 'legacy.php')) throw new RuntimeException('Legacy page linked publicly');
}
echo 'PASS: legacy rendering, five sections, assets, anchors, IDs, modern dependencies and unlinked entry point.' . PHP_EOL;
