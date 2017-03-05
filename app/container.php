<?php

$container = new \Slim\Container;

$container = $app->getContainer();

//Mempersiapkan Service Untuk Connect Ke database
$container['db'] = function ($c) {
	$setting = $c->get('settings')['db'];
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array (
		'dbname'	=>	$setting['name'],
		'user'		=>	$setting['user'],
		'password'	=>	$setting['pass'],
		'host'		=>	$setting['host'],
		'driver'	=>	'pdo_mysql',
	);

	$connection = \Doctrine\DBAL\DriverManager::getConnection(
		$connectionParams, $config);

	return $connection->createQueryBuilder();
};

$container['view'] = function ($c) {
	$setting = $c->get('settings')['view'];

	$path = $setting['path'];
	$path_view = $setting['path_view'];
	$path_asset = $setting['path_asset'];
	$templates = $setting['templates'];
	$partial = $setting['partial'];

	$plates = new League\Plates\Engine($path_view);
	$plates->addFolder('templates', $path_view . $templates);
	$plates->addFolder('partial', $path_view . $templates . $partial);
	$plates->loadExtension(new League\Plates\Extension\Asset($path_asset));
	$plates->loadExtension(new League\Plates\Extension\URI($path));

	return $plates;
};
