<?php
namespace Kahlan\Extra\Matcher\Spec;

use Kahlan\Extra\Matcher\ToBeOneOf;

describe('ToBeOneOf', function () {

    describe('::match()', function () {

        it('passes if actual is part of the expected values', function () {

            expect(1)->toBeOneOf([1, 2, 3]);

        });

        it('fails if actual is not part of the expected values', function () {

            expect(0)->not->toBeOneOf([1, 2, 3]);

        });

        it('fails if actual is not strictly part of the expected values', function () {

            expect('1')->not->toBeOneOf([1, 2, 3]);

        });

    });

    describe('::description()', function () {

        it('returns the description message', function () {

            $actual = ToBeOneOf::description();
            expect($actual)->toBe('be part of the expected values.');

        });

    });

});
