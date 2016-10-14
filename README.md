# Kahlan ExtraMatcher

[![Build Status](https://travis-ci.org/kahlan/extra-matcher.svg)](https://travis-ci.org/kahlan/extra-matcher)

Installation
------------

```sh
composer install kahlan/extra-matcher
```

Bootstrap
---------

```php
use Kahlan\ExtraMatcher\ToBeOneOf;

Kahlan\Matcher::register('toBeOneOf', ToBeOneOf::class);
```