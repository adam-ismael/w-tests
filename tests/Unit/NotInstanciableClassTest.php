<?php

use App\NotInstanciableClass\NonInstanciable;

test('NotInstanciableClass is not instanciable (duh)', function () {
    new NonInstanciable();
})->throws(Error::class, 'Cannot instantiate');

