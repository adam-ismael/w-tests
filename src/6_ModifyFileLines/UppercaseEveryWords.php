<?php

namespace App\ModifyFileLines;

class UppercaseEveryWords
{
    public function execute(string $filePath): array
    {
        $file = @fopen(__DIR__ . "/{$filePath}", 'r+');

        if (!$file) {
            throw new \Exception('File not found');
        }

        $lines = [];

        while (($buffer = fgets($file, 4096)) !== false) {
            $uppercaseLine =  ucwords($buffer);

            fseek($file, -strlen($buffer), 1);
            fwrite($file, $uppercaseLine);

            $lines[] = $uppercaseLine;
        }
        if (!feof($file)) {
            echo "Error: unexpected fgets() fail\n";
        }

        fclose($file);


        return $lines;
    }
}