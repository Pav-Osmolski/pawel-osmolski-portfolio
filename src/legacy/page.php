<?php
declare(strict_types=1);
// Fixed templates only; query parameters never select files.
foreach (['header', 'intro', 'music', 'web-design', 'sound-design', 'remix', 'footer'] as $template) {
    require __DIR__ . '/' . $template . '.php';
}
