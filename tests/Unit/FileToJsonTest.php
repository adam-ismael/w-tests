<?php

use App\FileToJson\FileToJson;

it('converts the limmerick to json', function () {
    $fileToJson = new FileToJson();
    $json = $fileToJson->execute('limerick.txt');
    expect($json)->toBeJson();
    expect($json)->toBe('{"content":["There was an Old Man with a beard,","Who said, \"It is just as I feared!","Two Owls and a Hen,","Four Larks and a Wren,","Have all built their nests in my beard!"]}');
});

it('Returns an empty array if the file is empty', function () {
    $fileToJson = new FileToJson();
    $json = $fileToJson->execute('empty.txt');
    expect($json)->toBe('');
});

it('Throws an exception if the file does not exist', function () {
    $fileToJson = new FileToJson();
    $fileToJson->execute('nonexistent.txt');
})->throws(Exception::class, 'File not found');