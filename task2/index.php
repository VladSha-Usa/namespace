<?php

include '../vendor/autoload.php';

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;
use Models\Order;
use Models\Product;
use Models\User;

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
