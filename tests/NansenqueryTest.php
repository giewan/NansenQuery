<?php
/**
 * Tests for NansenQuery
 */

use PHPUnit\Framework\TestCase;
use Nansenquery\Nansenquery;

class NansenqueryTest extends TestCase {
    private Nansenquery $instance;

    protected function setUp(): void {
        $this->instance = new Nansenquery(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nansenquery::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
