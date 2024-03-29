<?php
session_start();
spl_autoload_register();
$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new \Database\PDODatabase($pdo);
$userRepository = new \App\Repository\UserRepository($db);
$encryptionService = new \App\Services\Encryption\ArgonEncryptionService();
$userHttpHandler = new \App\Http\UserHttpHandler($template, $dataBinder);
$userService = new \App\Services\UserService($userRepository,$encryptionService);
