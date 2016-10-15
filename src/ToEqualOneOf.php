<?php
namespace Kahlan\Extra\Matcher;

use Traversable;

class ToEqualOneOf
{
    /**
     * Checks that `$expected` has value of `$actual` ( loose ).
     *
     * @param mixed $actual   The actual value
     * @param mixed $expected The expected value
     *
     * @return bool
     */
    public static function match($actual, $expected)
    {
        if (is_array($expected) || $expected instanceof Traversable) {
            foreach ($expected as $key => $value) {
                if ($value == $actual) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Returns the description message.
     *
     * @return string The description message
     */
    public static function description()
    {
        return 'be part of the expected values.';
    }
}
