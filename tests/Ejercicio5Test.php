<?php
/**
 * Pruebas unitarias clase calcularEdad.php
 * @author Fº javier  cerdá
 */
include 'Ejercicio5.php';
use PHPUnit\Framework\TestCase;
class Ejercicio5Test extends TestCase {

    protected $ej2;
    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto animal
        $this->ej2=new Ejercicio5();

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // 
        unset($this->ej2);
    }

    public function test_esMayorEdad(): void
    {
        $this->assertEquals([1,1,2,3,5], $this->ej2->fibonacci(5));
        $this->assertEquals([1,1,2], $this->ej2->fibonacci(3));
        $this->assertEquals([], $this->ej2->fibonacci(0));
        $this->assertEquals(false, $this->ej2->fibonacci("f"));
    }
}