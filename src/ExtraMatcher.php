<?php
namespace Kahlan\Extra\Matcher;

use Exception;
use Kahlan\Matcher;

class ExtraMatcher
{
    public static function register($matchers = [])
    {
        $map = [
            'toBeOneOf'    => 'Kahlan\Extra\Matcher\ToBeOneOf',
            'toEqualOneOf' => 'Kahlan\Extra\Matcher\ToEqualOneOf',
            'toImplement'  => 'Kahlan\Matcher\ToBeAnInstanceOf'
        ];
        $matchers = $matchers ?: array_keys($map);

        foreach ($matchers as $name) {
            if (!isset($map[$name])) {
                throw new Exception("Unexisting matcher `{$name}` can't register it.");
            }
            Matcher::register($name, $map[$name]);
        }
    }
}
