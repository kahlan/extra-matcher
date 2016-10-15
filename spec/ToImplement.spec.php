<?php

namespace Kahlan\Extra\Matcher\Spec;

use stdClass;

describe('ToImplement', function () {
    describe('::match()', function () {
        it('passes if $actual is implements of $expected', function () {
            $actual = new Bar();
            $expeted = 'Foo';

            expect($actual)->toImplement($expeted);
        });

        it('fails passes if $actual is not implement of $expected', function () {
            expect(new stdClass())->not->toImplement('Fux');
        });
    });
});
