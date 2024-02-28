<?php

use App\ArrayFunction\ArrayFunction;

it('Adds a pipe before and after each entry in an array of words', function ($input, $expected) {
    $result = (new ArrayFunction())->execute($input);
    $this->assertEquals($expected, $result);
})->with([
    [['one', 'two', 'three'], ['|one|', '|two|', '|three|']],
    [['apple', 'banana', 'cherry'], ['|apple|', '|banana|', '|cherry|']],
    [['hello', 'world'], ['|hello|', '|world|']],
    [[''], ['||']],
    [[], []],
    [['123', '456', '789'], ['|123|', '|456|', '|789|']],
    [['a', 'b', 'c', 'd', 'e'], ['|a|', '|b|', '|c|', '|d|', '|e|']],
    [['This', 'is', 'a', 'test'], ['|This|', '|is|', '|a|', '|test|']],
]);