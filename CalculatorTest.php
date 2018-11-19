<?php


require 'Proyecto/app/Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(4, 2);
        $this->assertEquals(3, $result);
    }
 
}
