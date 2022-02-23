<?php

spl_autoload_register(function ($className) {
    try {
        $path = str_replace('\\', '/', $className);
        include $path . '.php';

        if (!class_exists($className, false)) {
            throw new LogicException("Class doesn't exist: $className");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
});

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

$user = new User;
echo '</br>';
$dashboardController = new DashboardController();
echo '</br>';
$ordersController = new OrdersController();
echo '</br>';
$mainController = new MainController();
echo '</br>';
$imageHelper = new ImageHelper();
echo '</br>';
$order = new Order();
echo '</br>';
$product = new Product();
echo '</br>';
$user = new User();
