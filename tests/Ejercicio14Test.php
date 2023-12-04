<?php
/**
 * Pruebas unitarias clase calcularEdad.php
 * @author Fº javier  cerdá
 */
include 'Ejercicio14.php';
use PHPUnit\Framework\TestCase;
class Ejercicio14Test extends TestCase {

    protected $ej2;
    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto animal
        $this->ej2=new Ejercicio14();

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // 
        unset($this->ej2);
    }

    public function test_calculadora(): void
    {
        $this->assertEquals(2, $this->ej2->dividir(10,5));
        $this->assertEquals(50, $this->ej2->multiplicar(10,5));
        $this->assertEquals(5, $this->ej2->resta(10,5));
        $this->assertEquals(15, $this->ej2->suma(10,5));
    }
}