# Kahlan Additionnal Matchers

[![Build Status](https://travis-ci.org/kahlan/extra-matcher.svg?branch=master)](https://travis-ci.org/kahlan/extra-matcher)
[![Code Coverage](https://scrutinizer-ci.com/g/kahlan/extra-matcher/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kahlan/extra-matcher/?branch=master)

**Warning some of these matchers are experimentals and may be changed at any time**

## Installation

### via Composer

```bash
$ composer require --dev kahlan/extra-matcher
```

> make sure you have "minimum-stability": "dev" in your composer.json

## Registration

```php
// kahlan-config.php
require_once 'vendor/kahlan/extra-matcher/kahlan-config.php';
```

## Documentation

**toBeOneOf($expected)**

```php
it("passes if $actual is present in $expected", function() {
    expect(3)->toBeOneOf([1, 2, 3]);
});
```
