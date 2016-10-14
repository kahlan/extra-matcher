# Kahlan DxMatchers

[![Build Status](https://travis-ci.org/kahlan/DxMatchers.svg)](https://travis-ci.org/kahlan/DxMatchers)

Installation
------------

```sh
composer install kahlan/dxmatchers
```

Bootstrap
---------

```php
use Kahlan\DxMatchers\ToBeOneOf;

Kahlan\Matcher::register('toBeOneOf', ToBeOneOf::class);
```