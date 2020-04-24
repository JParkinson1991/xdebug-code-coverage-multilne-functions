<?php
/**
 * @file
 * DebugClassTest.php
 */

namespace Tests;

use App\DebugClass;
use PHPUnit\Framework\TestCase;

/**
 * Class DebugClassTest
 *
 * @package Tests
 */
class DebugClassTest extends TestCase
{
    /**
     * Tests coverage for standard function call
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public function testCreate()
    {
        $debugClass = DebugClass::create('test');
        $this->assertSame('test', $debugClass->getString());
    }

    /**
     * Tests coverage for multiline function call where first line is an
     * inline function
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public function testCreateNestedOnce()
    {
        $debugClass = DebugClass::createNestedOnce('test');
        $this->assertSame('test', $debugClass->getString());
    }

    /**
     * Tests coverage for multiline function where first line is another
     * multiline function
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public function testCreateNestedTwice()
    {
        $debugClass = DebugClass::createNestedTwice('test');
        $this->assertSame('test', $debugClass->getString());
    }

    /**
     * Testes deep nested of multiline functions
     *
     * @param string $string
     *
     * @return \App\DebugClass
     */
    public function testCreateNestedThreeTimes()
    {
        $debugClass = DebugClass::createNestedThreeTimes('test');
        $this->assertSame('test', $debugClass->getString());
    }
}
