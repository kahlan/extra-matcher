<?php
use Kahlan\Extra\Matcher\ExtraMatchers;

$commandLine = $this->commandLine();
$commandLine->option('coverage', 'default', 3);

ExtraMatchers::register();
