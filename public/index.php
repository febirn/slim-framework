<?php

require __DIR__ . '/../vendor/autoload.php';

$setting = include __DIR__ . '/../app/setting.php';

$app = new \Slim\App($setting);

include __DIR__ . '/../app/container.php';
include __DIR__ . '/../app/routing.php';

$app->run();