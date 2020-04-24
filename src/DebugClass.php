<?php
/**
 * @file
 * DebugClass.php
 */

namespace App;

/**
 * Class DebugClass
 *
 * @package App
 */
class DebugClass
{
    protected $string;

    /**
     * DebugClass constructor.
     *
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Returns the string
     *
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * Simple class creation with string
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public static function create(string $string)
    {
        return new self("test");
    }

    /**
     * Class creation via multiline function call where first line is an
     * inline (single line) function
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public static function createNestedOnce(string $string)
    {
        return new self(
            sprintf("%s", $string)
        );
    }

    /**
     * Class creation via multiline function call where first line is another
     * multi line function call
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public static function createNestedTwice(string $string)
    {
        return new self(
            sprintf(
                "%s",
                $string
            )
        );
    }

    /**
     * Class created via nested multiline function calls
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public static function createNestedThreeTimes(string $string)
    {
        return new self(
            strtolower(
                sprintf(
                    "%s",
                    $string
                )
            )
        );
    }

}
