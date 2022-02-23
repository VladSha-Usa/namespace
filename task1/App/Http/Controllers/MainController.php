<?php

namespace App\Http\Controllers;

class MainController
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
