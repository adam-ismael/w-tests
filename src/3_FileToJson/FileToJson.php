<?php

namespace App\FileToJson;

class FileToJson
{
    public function execute(string $filePath): string
    {
        // Your code below the line
        // ----------------------------------------

        if (!file_exists(__DIR__ . "/{$filePath}")) {
            throw new \Exception("File not found");
        }

        $file = file_get_contents(__DIR__ . "/{$filePath}");
        $lines = array_filter(explode("\n", $file));

        if (!count($lines)) {
            return '';
        }

        $json = json_encode(['content' => $lines]);

        return $json;
    }
}