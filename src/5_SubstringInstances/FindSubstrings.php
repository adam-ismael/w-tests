<?php

namespace App\SubstringInstances;

class FindSubstrings
{
    public function execute(string $string): array
    {
        $matches = [];
        // Your code below the line
        // ----------------------------------------

        preg_match_all('/sh(\w+?)sh/i', $string, $matches);
        return $matches[0];
    }
}