<?php

use PHPUnit\Framework\TestCase;

class AssertContainsTest extends TestCase
{
    public function testAssertContains()
    {
        $buah = ['apel', 'jeruk', 'nanas', 'durian'];

        $this->assertContains('apel', $buah, 'Tidak ada buah tsb di dalam array'); //benar
        // $this->assertContains('anggur', $buah, 'Tidak ada buah tsb di dalam array'); //gagal


    }
}

?>