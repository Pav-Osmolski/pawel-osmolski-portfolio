<?php
declare(strict_types=1);
$root = dirname(__DIR__);
if (isset($argv[1])) {
    $_GET = json_decode(base64_decode($argv[1]), true, 512, JSON_THROW_ON_ERROR);
    set_error_handler(static function (int $severity, string $message): never { throw new RuntimeException($message); });
    require $root . '/public/retro.php';
    echo "\nSTATUS:" . (http_response_code() ?: 200);
    exit;
}
$cases = [[], ...array_map(static fn($page) => ['page' => $page], ['home', 'biography', 'compositions', 'remixescovers', 'videoproduction', 'socialmedia', 'furtherlinks', 'twitter'])];
foreach ([['page'=>'../../src/bootstrap'], ['page'=>['home']], ['page'=>'missing'], ['page'=>'']] as $invalid) $cases[] = $invalid;
foreach ($cases as $index => $query) {
    $command = escapeshellarg(PHP_BINARY) . ' -n ' . escapeshellarg(__FILE__) . ' ' . escapeshellarg(base64_encode(json_encode($query)));
    exec($command, $lines, $status);
    $html = implode("\n", $lines);
    $lines = [];
    if ($status !== 0 || str_contains($html, 'Warning:') || str_contains($html, 'Fatal error')) throw new RuntimeException('Render failed');
    if (!str_contains($html, 'STATUS:' . ($index < 9 ? 200 : 404))) throw new RuntimeException('Incorrect response status');
    preg_match_all('/(?:src|href)="(\/assets\/[^"]+)"/', $html, $matches);
    foreach ($matches[1] as $asset) if (!is_file($root . '/public' . $asset)) throw new RuntimeException('Missing ' . $asset);
    foreach (['swfobject', 'hs.expand', 'hs.htmlExpand', 'ScrollLoad', 'google-analytics.com', 'src="http:'] as $obsolete) {
        if (str_contains($html, $obsolete)) throw new RuntimeException('Obsolete dependency: ' . $obsolete);
    }
}
$css = file_get_contents($root . '/public/assets/retro/retro.css');
preg_match_all('/url\(([^)]+)\)/', $css, $matches);
foreach ($matches[1] as $asset) if (!is_file($root . '/public/assets/retro/' . $asset)) throw new RuntimeException('Missing artwork ' . $asset);
echo 'PASS: nine retro routes, four invalid inputs, local assets and original artwork; no obsolete executable dependencies.' . PHP_EOL;
