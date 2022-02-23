<?php

namespace App\Http\Controllers\Admin;

class DashboardController
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
