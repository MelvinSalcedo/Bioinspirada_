<?php


require 'Proyecto/app/Paciente.php';
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
 
    public function testdepartamento()
    {
        $result = $this->Paciente->departamento();
        $this->assertEquals("arequipa", $result);
    }
 
}
