<?php

use App\ModifyFileLines\UppercaseEveryWords;

beforeEach(function () {
    $this->uppercaseEveryWords = new UppercaseEveryWords();

    copy(__DIR__ . '/../../static/poem.txt', __DIR__ . '/../../src/6_ModifyFileLines/poem.txt');
});

afterAll(function () {
    copy(__DIR__ . '/../../static/poem.txt', __DIR__ . '/../../src/6_ModifyFileLines/poem.txt');
});

it('Updates the content of the poem file', function () {
    $this->uppercaseEveryWords->execute('poem.txt');
    $this->assertEquals(
        "Les Amoureux Fervents Et Les Savants Austeres\nAiment Egalement, Dans Leur Mure Saison,\nLes Chats Puissants Et Doux, Orgueil De La Maison,\nQui Comme Eux Sont Frileux Et Comme Eux Sedentaires.",
        file_get_contents(__DIR__ . '/../../src/6_ModifyFileLines/poem.txt')
    );
});

it('returns the uppercased version of the poem file as an array', function () {
    $this->assertEquals(
        [
            "Les Amoureux Fervents Et Les Savants Austeres\n",
            "Aiment Egalement, Dans Leur Mure Saison,\n",
            "Les Chats Puissants Et Doux, Orgueil De La Maison,\n",
            "Qui Comme Eux Sont Frileux Et Comme Eux Sedentaires."
        ],
        $this->uppercaseEveryWords->execute('poem.txt')
    );
});

it('Throws an exception if the file does not exist', function () {
    $this->uppercaseEveryWords->execute('nonexistent.txt');
})->throws(Exception::class, 'File not found');