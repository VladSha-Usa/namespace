<?php

namespace App\Models;

class Product
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
