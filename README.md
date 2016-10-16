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

To manualy register the matchers you want, add them in your `kahlan-config.php` config file like in the following example:

```php
// kahlan-config.php
use Kahlan\Matcher;

Matcher::register('toBeOneOf', 'Kahlan\Extra\Matcher\ToBeOneOf');
Matcher::register('toEqualOneOf', 'Kahlan\Extra\Matcher\ToEqualOneOf');
Matcher::register('toImplement', 'Kahlan\Matcher\ToBeAnInstanceOf'); // Alias
```

Or in case you want to register all matchers, you can write:

```php
require_once 'vendor/kahlan/extra-matcher/kahlan-config.php';
```

## Documentation

**toBeOneOf($expected)** // strict comparison

```php
it("passes if $actual is present in $expected", function() {
    expect(3)->toBeOneOf([1, 2, 3]);
});
```

**toEqualOneOf($expected)** // loose comparison

```php
it("passes if $actual is present in $expected", function() {
    expect("3")->toEqualOneOf([1, 2, 3]);
});
```

**toImplement($expected)** // object implements expected interface

```php
namespace App\Spec;

it("passes if $actual implements $expected", function() {

    interface Foo { }
    class bar implements Foo {}

    $actual = new Bar();
    expect($actual)->toImplement('App\Spec\Foo');
});
```
