<?php

require __DIR__ . '/../vendor/autoload.php';

use Spatie\Ssr\Renderer;
use Spatie\Ssr\Engines\Node;

$engine = new Node(
    '/usr/bin/node', // replace with your node installation path
    '/tmp'
);

$renderer = new Renderer($engine);

$app = $renderer
    ->entry(__DIR__ . '/js/entry-server.js')
    ->render();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SSR</title>
</head>
<body>
<?= $app ?>
<script src="/js/entry-client.js"></script>
</body>
</html>
