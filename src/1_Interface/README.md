
- Create an interface called `MyInterface`, in the `\App\Interface` namespace.
  - `MyInterface` contains a single method, `execute` that accepts and returns an array.
- Create a class called `MyInterfaceImpl` that implements `MyInterface`.
- Run the test suite ` ./vendor/bin/pest tests/Unit/InterfaceTest.php`