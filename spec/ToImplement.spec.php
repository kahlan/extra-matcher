<?php
namespace Kahlan\Extra\Matcher\Spec;

use Kahlan\Matcher\ToBeAnInstanceOf;
use stdClass;

describe('ToImplement', function () {

    describe('::match()', function () {

        it('passes if $actual is implements of $expected', function () {
            
            interface foo { }
            class bar implements foo {}
                
            $actual = new bar();
            $expeted = 'foo';
            
            expect($actual)->toImplement('foo');

        });
        
        it('fails passes if $actual is not implement of $expected', function () {

            expect(new stdClass())->not->toImplement('fux');

        });

    });

});
