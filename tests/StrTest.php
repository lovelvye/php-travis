<?php

use Ive\Common\Str as Str;

class StrTest extends PHPUnit_Framework_TestCase
{
    public function testToUpper()
    {
        $this->assertEquals(strtoupper('test'), Str::toUpper('test'));
    }

    public function testToLower()
    {
        $this->assertEquals(strtolower('TEST'), Str::toLower('TEST'));
    }

    public function testAddSlashes()
    {
        $this->assertEquals(addslashes("'"), Str::addSlashes("'"));
    }

    public function testStripSlashes()
    {
        $this->assertEquals(stripslashes("\'"), Str::stripSlashes("\'"));
    }

    public function testTrim()
    {
        $this->assertEquals(trim(" \t\n\r\0\x0B"), Str::trim(" \t\n\r\0\x0B"));
    }
}
