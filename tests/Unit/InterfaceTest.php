<?php

use App\Interface\MyInterface;
use App\Interface\MyInterfaceImpl;

it('implements myInterface', function () {
    $myInterfaceImpl = new MyInterfaceImpl();

    expect($myInterfaceImpl)->toBeInstanceOf(MyInterface::class);
});

it('implements execute method', function () {
    $myInterfaceImpl = new MyInterfaceImpl();

    expect(method_exists($myInterfaceImpl, 'execute'))->toBeTrue();
    expect((new ReflectionMethod($myInterfaceImpl, 'execute'))->getNumberOfParameters())->toBe(1);
    expect((new ReflectionMethod($myInterfaceImpl, 'execute'))->getParameters()[0]->getType()->getName())->toBe('array');
});