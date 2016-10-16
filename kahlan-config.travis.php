<?php
use Kahlan\Extra\Matcher\ExtraMatcher;

$commandLine = $this->commandLine();
$commandLine->option('coverage', 'default', 3);

ExtraMatcher::register();
