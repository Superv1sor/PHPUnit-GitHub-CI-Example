<?php

use PHPUnit\Framework\TestCase;

class FooterTest extends TestCase
{
    public function testFooterContainsYear()
    {
        // Start output buffering
        ob_start();
        include 'public_html/inc/footer.php';
        $content = ob_get_clean(); // Get the output and clean buffer

        // Assert that the output contains "2024"
        $this->assertStringContainsString('2024', $content);
    }
}
