# Kahlan Additional Matchers

[![Build Status](https://travis-ci.org/kahlan/extra-matcher.svg?branch=master)](https://travis-ci.org/kahlan/extra-matcher)
[![Code Coverage](https://scrutinizer-ci.com/g/kahlan/extra-matcher/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kahlan/extra-matcher/?branch=master)

## Installation

### via Composer

```bash
$ composer require --dev kahlan/extra-matcher
```

## Registration

To manually register the matchers you want, add them in your `kahlan-config.php` config file like in the following example:

```php
use Kahlan\Extra\Matcher\ExtraMatchers;

ExtraMatchers::register(['toBeOneOf', ...]);
```

Or in case you want to register all matchers, you can simply write:

```php
use Kahlan\Extra\Matcher\ExtraMatchers;

ExtraMatchers::register();
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
    class Bar implements Foo {}

    $actual = new Bar();
    expect($actual)->toImplement('App\Spec\Foo');
});
```
