
<?php
//phpunit --bootstrap ../../app/Prueba.php ./Test.php
use PHPUnit\Framework\TestCase;
//namespace App;
use Prueba;
use Paciente;

class Test extends TestCase
{
    public function testSuma(){
        $cal = new Prueba();
        $this->assertEquals(8,$cal->suma(3,4));
    }
    /*public function testnombre_completo(){
    	$pac =new Paciente();
    	$this->assertEquals("admin",$pac->nombre_completo());
    }*/
}
?>