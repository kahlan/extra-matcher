<?php
namespace Kahlan\Spec\Suite\Jit\Patcher;

use Kahlan\Jit\Parser;
use Kahlan\Jit\Patcher\Monkey;

describe("Monkey", function () {

    beforeEach(function () {
        $this->path = 'spec/Fixture/Jit/Patcher/Monkey';
        $this->patcher = new Monkey();
    });

    describe("->process()", function () {

        it("patches class's methods", function () {

            $nodes = Parser::parse(file_get_contents($this->path . '/Class.php'));
            $expected = file_get_contents($this->path . '/ClassProcessed.php');
            $actual = Parser::unparse($this->patcher->process($nodes));
            expect($actual)->toBe($expected);

        });

        it("patches trait's methods", function () {

            $nodes = Parser::parse(file_get_contents($this->path . '/Trait.php'));
            $expected = file_get_contents($this->path . '/TraitProcessed.php');
            $actual = Parser::unparse($this->patcher->process($nodes));
            expect($actual)->toBe($expected);

        });

        it("patches plain php file", function () {

            $nodes = Parser::parse(file_get_contents($this->path . '/Plain.php'));
            $expected = file_get_contents($this->path . '/PlainProcessed.php');
            $actual = Parser::unparse($this->patcher->process($nodes));
            expect($actual)->toBe($expected);

        });

        it("patches errored php file", function () {

            $nodes = Parser::parse(file_get_contents($this->path . '/Errored.php'));
            $expected = file_get_contents($this->path . '/ErroredProcessed.php');
            $actual = Parser::unparse($this->patcher->process($nodes));
            expect($actual)->toBe($expected);

        });

    });

    describe("->patchable()", function () {

        it("return `true`", function () {

            expect($this->patcher->patchable('SomeClass'))->toBe(true);

        });

    });

    describe("::blacklisted()", function () {

        it("checks that blacklisted function returns `false`", function () {

            foreach (Monkey::blacklisted() as $name) {
                expect(Monkey::blacklisted($name))->toBe(true);
            }

        });

    });
});
