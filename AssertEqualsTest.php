<?php

use PHPUnit\Framework\TestCase;

class AssertEqualsTest extends TestCase
{
    public function testAssertEquals()
    {
        $this->assertEquals(20, 10 + 10, '10 + 10 hasilnya 20');
        
        // $this->assertEquals(30, 10 + 10, '10 + 10 hasilnya 20');

    }
}

?>