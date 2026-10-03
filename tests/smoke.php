<?php
declare(strict_types=1);
set_error_handler(static function (int $severity, string $message): never { throw new RuntimeException($message); });
$root = dirname(__DIR__);
foreach (['/index.php', '/radiohead-remixes/index.php'] as $page) {
    // Separate processes avoid declaring the shared helpers twice.
    $command = escapeshellarg(PHP_BINARY) . ' -n ' . escapeshellarg($root . '/public' . $page);
    exec($command, $lines, $status);
    $html = implode("\n", $lines);
    $lines = [];
    if ($status !== 0 || str_contains($html, 'Fatal error') || str_contains($html, 'Warning:')) throw new RuntimeException('Render failed: ' . $page);
    if (substr_count($html, '<h1 ') !== 1) throw new RuntimeException('Expected one H1');
    foreach (['<main ', '<nav ', 'rel="canonical"', 'name="description"', 'Skip to content'] as $required) {
        if (!str_contains($html, $required)) throw new RuntimeException('Missing ' . $required);
    }
    preg_match_all('/\b(?:src|href)="(\/assets\/[^"?]+)(?:\?[^"]*)?"/', $html, $matches);
    foreach ($matches[1] as $asset) if (!is_file($root . '/public' . $asset)) throw new RuntimeException('Missing asset ' . $asset);
    preg_match_all('/\bid="([^"]+)"/', $html, $ids);
    if (count($ids[1]) !== count(array_unique($ids[1]))) throw new RuntimeException('Duplicate IDs');
    preg_match_all('/href="#([^"]+)"/', $html, $anchors);
    foreach ($anchors[1] as $id) if (!in_array($id, $ids[1], true)) throw new RuntimeException('Broken anchor ' . $id);
    if (str_contains($html, '<iframe')) throw new RuntimeException('Media loaded without visitor action');
    echo 'PASS ' . $page . ': rendered, metadata, anchors, asset paths, deferred media' . PHP_EOL;
}
echo 'All checks passed.' . PHP_EOL;
