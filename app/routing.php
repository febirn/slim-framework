<?php

$app->get('/', 'Shop\Controllers\HomeController:index');

$app->get('/users', 'Shop\Controllers\UserController:getAll');

$app->get('/profile/{id}', 'Shop\Controllers\UserController:findById');
