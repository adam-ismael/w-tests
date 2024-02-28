- Implement the `execute` method of `FileToJson`
- `execute` accepts the path to a text file
- Convert the file to a JSON object, with a `content` key containing an array of each line in the file
- Return an empty string if the file is empty
- Throw an error with a "File not found" message if the file does not exist.
- Run the test:  `./vendor/bin/pest tests/Unit/FileToJsonTest.php`