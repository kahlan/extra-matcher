<?php
use Kahlan\Matcher;

$commandLine = $this->commandLine();
$commandLine->option('coverage', 'default', 3);

Matcher::register('toBeOneOf', 'Kahlan\Extra\Matcher\ToBeOneOf');
