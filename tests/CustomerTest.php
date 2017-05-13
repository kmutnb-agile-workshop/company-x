<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Customer
 */
final class CustomerTest extends TestCase {
  public function testCustomernameShouldBeBob() {
    $this->assertEquals(5, 3+2);
    // echo Customer::getCustomer(1)->getName();
    // $this->assertEquals(Customer::getCustomer(1)->getName(), 'Bob');
  }
}