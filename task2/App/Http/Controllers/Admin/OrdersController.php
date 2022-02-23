<?php

namespace App\Http\Controllers\Admin;

class OrdersController
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
