<?php


require 'Proyecto/app/Paciente.php';
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    private $paciente;
 
    protected function setUp()
    {
        $this->paciente = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->paciente = NULL;
    }
 
    public function testdepartamento()
    {
        $result = $this->Paciente->departamento();
        $this->assertEquals("arequipa", $result);
    }
 
}
