<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

//oi

require __DIR__ . '/../resources/config/prod.php';

require __DIR__ . '/../src/app.php';

$app['http_cache']->run();
