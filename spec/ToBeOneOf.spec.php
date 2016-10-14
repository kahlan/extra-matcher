<?php

namespace Kahlan\ExtraMatcher\Spec;

use Kahlan\ExtraMatcher\ToBeOneOf;

describe('ToBeOneOf', function () {
    
    given('tobeOneOf', function() {
        return new ToBeOneOf();
    });
    
    describe('::match()', function () {
        it('passes if actual is part of the expected values', function () {
            $match = $this->tobeOneOf->match(1, [1, 2, 3]);
            
            expect($match)->toBe(true);
        });

        it('fails if actual is not part of the expected values', function () {
            $match = $this->tobeOneOf->match(0, [1, 2, 3]);
            
            expect($match)->toBe(false);
        });
    });

    describe('::description()', function () {
        it('returns the description message', function () {
            $actual = $this->tobeOneOf->description();

            expect($actual)->toBe('be part of the expected values.');
        });
    });
});
