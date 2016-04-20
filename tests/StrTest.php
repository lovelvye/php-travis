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
}
