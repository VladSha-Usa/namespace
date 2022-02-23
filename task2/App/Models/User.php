<?php

namespace Models;

class User
{
    public function __construct()
    {
        $className = get_class();
        echo $className;
    }
}
