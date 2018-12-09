<?php


require 'Proyecto/app/Paciente.php';
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
<<<<<<< HEAD
    private $paciente;
 
    protected function setUp()
    {
        $this->paciente = new Calculator();
=======
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
>>>>>>> 44e54f41874ef87f20a30e832b11a55a9b978f9d
    }
 
    protected function tearDown()
    {
<<<<<<< HEAD
        $this->paciente = NULL;
=======
        $this->calculator = NULL;
>>>>>>> 44e54f41874ef87f20a30e832b11a55a9b978f9d
    }
 
    public function testdepartamento()
    {
        $result = $this->Paciente->departamento();
        $this->assertEquals("arequipa", $result);
    }
 
}
