<?php
/**
 * Tests for LedgerRoot
 */

use PHPUnit\Framework\TestCase;
use Ledgerroot\Ledgerroot;

class LedgerrootTest extends TestCase {
    private Ledgerroot $instance;

    protected function setUp(): void {
        $this->instance = new Ledgerroot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgerroot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
