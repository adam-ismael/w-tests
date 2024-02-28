<?php

use App\NotClonableClass\NonClonable;

test('NonClonable cannot be cloned (duh)', function () {
    $original = new NonClonable();
    $cloned = clone $original;
})->throws(Error::class);

