<?php

namespace App\Interface;

use App\Interface\MyInterface;

class MyInterfaceImpl implements MyInterface
{
    public function execute(array $array): array
    {
        return $array;
    }
}
