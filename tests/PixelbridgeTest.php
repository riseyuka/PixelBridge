<?php
/**
 * Tests for PixelBridge
 */

use PHPUnit\Framework\TestCase;
use Pixelbridge\Pixelbridge;

class PixelbridgeTest extends TestCase {
    private Pixelbridge $instance;

    protected function setUp(): void {
        $this->instance = new Pixelbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
