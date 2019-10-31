
# How to reproduce

```bash
$ composer install
$ ./vendor/bin/phpunit Test\FooTest test-src/FooTest.php
PHPUnit 8.4.2 by Sebastian Bergmann and contributors.

F                                                                   1 / 1 (100%)

Time: 29 ms, Memory: 4.00 MB

There was 1 failure:

1) Test\Sub\BarTest::testBaz
Failed asserting that false is true.

.../test-src/Sub/BarTest.php:11

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```
