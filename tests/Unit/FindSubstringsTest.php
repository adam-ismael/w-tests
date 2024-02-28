<?php

use App\SubstringInstances\FindSubstrings;

it('find substrings', function () {
    $test = <<<MULTI
        xx xx sh1sh xx xx
        xx sh2sh xx xx xx
        xx sh**sh xx xx x
        xx xx sh3xxxsh xx
        xx sh4shsh5sh xxx
    MULTI;


    $findSubstrings = new FindSubstrings();
    $result = $findSubstrings->execute($test);

    expect($result)->toEqual([
        'sh1sh',
        'sh2sh',
        'sh3xxxsh',
        'sh4sh',
        'sh5sh'
    ]);
});

it('find substrings in a more complex multiline text', function () {
    $test = <<<MULTI
        sh1sh blah sh2sh shno.notsh
        sh3sh other sh4sH not
        SH5sh this is a string sh6sh but
        this line contains no matches
        this one sheeow7sh does
    MULTI;

    $findSubstrings = new FindSubstrings();
    $result = $findSubstrings->execute($test);

    expect($result)->toEqual([
        'sh1sh',
        'sh2sh',
        'sh3sh',
        'sh4sH',
        'SH5sh',
        'sh6sh',
        'sheeow7sh'
    ]);
});