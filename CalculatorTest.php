<<<<<<< HEAD
<?php
require './app/Paciente.php';

class MyClassTest extends PHPUnit_Framework_TestCase {
     public function testCreateMyClass() {
        // Tests are written here
     }
}
?>
=======
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
        $resultb = $this->calculator->add(4, 2);
        $this->assertEquals(3, $result);
    }
 
}
>>>>>>> 44e54f41874ef87f20a30e832b11a55a9b978f9d
