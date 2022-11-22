<?php
require __DIR__ . '/vendor/autoload.php';

use Linhtq\Package\Models\User;
use Linhtq\Package\Controllers\HomeController;

$user = new User();

$user->index();

$homeController = new HomeController();
$homeController->getAll();

