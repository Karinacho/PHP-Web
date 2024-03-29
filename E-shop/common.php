<?php
session_start();
spl_autoload_register();

$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new \Database\PDODatabase($pdo);
$userRepository = new \app\Repository\UserRepository($db);
$httpHandler = new \app\Http\UserHttpHandler($template,$dataBinder);
$userService = new \app\Service\UserService($userRepository);
$productRepository= new \app\Repository\ProductRepository($db);
$productHttpHandler = new \app\Http\ProductHttpHandler($template,$dataBinder);
$productService = new \app\Service\ProductService($productRepository);
$categoryRepository = new \app\Repository\CategoryRepository($db);
$categoryService = new \app\Service\CategoryService($categoryRepository);