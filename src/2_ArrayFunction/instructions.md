
- Implement the `execute` method of `ArrayFunction`
- `execute` accepts an array of words and must return another array where each word is preceded and followed by a pipe (`|`) symbol.
  - Example: `['one', 'two', 'three']` would become `['|one|, '|two|', '|three|']`.
- Run the test:  `./vendor/bin/pest tests/Unit/ArrayFunctionTest.php`