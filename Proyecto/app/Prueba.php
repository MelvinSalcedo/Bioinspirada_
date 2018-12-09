<?php
use PHPUnit\Framework\TestCase;

//namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model{
        
    public function __construct()
    {
            echo "calculadora ";
    }
    public function suma($a,$b)
    {
            return $a+$b;

    }
}
?>