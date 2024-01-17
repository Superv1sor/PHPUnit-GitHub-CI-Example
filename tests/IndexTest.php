<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testIndexOutputsHelloWorld()
    {
        // Start output buffering
        ob_start();
        include 'public_html/index.php';
        $content = ob_get_clean(); // Get the output and clean buffer

        // Assert that the output contains "Hello World"
        $this->assertStringContainsString('Hello World', $content);
    }
}
