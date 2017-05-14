<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Customer
 */
final class CustomerTest extends TestCase {
  public function testCustomernameShouldBeBob() {
    $this->assertEquals('Bob', Customer::getCustomer(1)->getName());
  }
}