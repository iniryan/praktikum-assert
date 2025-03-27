<?php

use PHPUnit\Framework\TestCase;

class AssertFalseTest extends TestCase
{
    public function testAssertFalse()
    {
        $value = 24;
        $condition = is_string($value);
        
        $this->assertFalse($condition, 'Value ini string'); // salah

        // $this->assertFalse(true, "Harusnya false");
        
    }
}

?>