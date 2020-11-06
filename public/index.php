<?php

require __DIR__ . '/../vendor/autoload.php';

use Spatie\Ssr\Renderer;
use Spatie\Ssr\Engines\Node;

$engine = new Node(
    '/usr/bin/node', // replace with your node installation path
    '/tmp'
);

$renderer = new Renderer($engine);

// could be from a database, json file, etc.
$people = [
    ['id' => 1, 'name' => 'Adam'],
    ['id' => 2, 'name' => 'Eve'],
];

$app = $renderer
    ->entry(__DIR__ . '/js/entry-server.js')

    // Sharing data to hydrate entry-server.js
    ->context('people', $people)

    // If SSR fails, render this container
    ->fallback('<div id="app"></div>')
    ->render();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SSR</title>
    <script src="/js/entry-client.js" defer></script>
</head>
<body>
<?php echo $app; ?>
<script>
// Sharing data to hydrate entry-client.js
window.people = <?php echo \json_encode($people, JSON_FORCE_OBJECT); ?>;
</script>
</body>
</html>
