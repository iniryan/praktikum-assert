<?php

use PHPUnit\Framework\TestCase;

class AssertSameTest extends TestCase
{
    public function testAssertSame()
    {
        $this->assertSame(5, 5, "Harusnya sama!");

        // $this->assertSame(5, "5", "Harusnya sama!");
    }
}

?>