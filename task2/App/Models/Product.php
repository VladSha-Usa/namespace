<?php

namespace Models;

class Product
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
