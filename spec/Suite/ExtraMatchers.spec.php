<?php
namespace Kahlan\Extra\Matcher\Spec\Suite;

use Exception;
use Kahlan\Extra\Matcher\ExtraMatchers;
use Kahlan\Matcher;

describe('ExtraMatchers', function () {

    describe('::register()', function () {

        it('passes with register mapped matchers', function () {

            Matcher::unregister('toBeOneOf');
            expect(Matcher::exists('toBeOneOf'))->toBe(false);
            ExtraMatchers::register(['toBeOneOf']);
            expect(Matcher::exists('toBeOneOf'))->toBe(true);

        });

        it('passes with register all matchers', function () {

            ExtraMatchers::register();
            expect(Matcher::exists('toBeOneOf'))->toBe(true);
            expect(Matcher::exists('toEqualOneOf'))->toBe(true);
            expect(Matcher::exists('toImplement'))->toBe(true);

        });

        it('fails if matcher is not exists', function () {

            expect(function () {
                ExtraMatchers::register(['foo']);
            })->toThrow(new Exception("Unexisting matcher `foo` can't register it."));

            expect(Matcher::exists('foo'))->toBe(false);

        });

    });

});
