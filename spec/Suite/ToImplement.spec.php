<?php
namespace Kahlan\Extra\Matcher\Spec\Suite;

use stdClass;
use Kahlan\Extra\Matcher\Spec\Fixture\Bar;

describe('ToImplement', function () {

    describe('::match()', function () {

        it('passes if $actual is implements of $expected', function () {

            $actual = new Bar();
            $expected = 'Kahlan\Extra\Matcher\Spec\Fixture\Foo';

            expect($actual)->toImplement($expected);

        });

        it('fails passes if $actual is not implement of $expected', function () {

            expect(new stdClass())->not->toImplement('Fux');

        });

    });
});
