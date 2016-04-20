<?php

use Ive\Common\Str as Str;

class StrTest extends PHPUnit_Framework_TestCase
{
    public function testToUpper()
    {
        $this->assertEquals(strtoupper('test'), Str::toUpper('test'));
    }
}
