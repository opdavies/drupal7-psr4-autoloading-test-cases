# Drupal 7 Test Case Autoloading

An example module for Drupal 7 that uses PSR-4 autoloading for including and loading its test cases. No additional modules required!

## Running the Tests

The tests can be run using the `run-tests.sh` script or the Simpletest UI as normal.

If you want to run a specific test class using `run-tests.sh` then you need to use the fully qualified class name (including the namespace):

```
php scripts/run-tests.sh --class Drupal\\opdavies\\Tests\\Unit\\PsrAutoloadTest
```