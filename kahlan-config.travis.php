<?php
use Kahlan\Matcher;

$commandLine = $this->commandLine();
$commandLine->option('coverage', 'default', 3);

Matcher::register('toBeOneOf', 'Kahlan\Extra\Matcher\ToBeOneOf');
Matcher::register('toEqualOneOf', 'Kahlan\Extra\Matcher\ToEqualOneOf');
Matcher::register('toImplement', 'Kahlan\Matcher\ToBeAnInstanceOf'); // Alias