<?php

namespace Models;

class Order
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
