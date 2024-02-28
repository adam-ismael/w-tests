<?php

namespace App\ArrayFunction;

class ArrayFunction
{
    public function execute(array $array): array
    {
        // Your code below the line
        // ----------------------------------------
        return array_map(fn(string $w) => "|{$w}|", $array);
    }
}