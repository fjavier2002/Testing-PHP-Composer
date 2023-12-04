<?php
/**
 * Pruebas unitarias clase calcularEdad.php
 * @author Fº javier  cerdá
 */
include 'Ejercicio4.php';
use PHPUnit\Framework\TestCase;
class Ejercicio4Test extends TestCase {

    protected $ej2;
    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto animal
        $this->ej2=new Ejercicio4();

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // 
        unset($this->ej2);
    }

    public function test_calcularNota(): void
    {
        $this->assertEquals("Muy deficiente", $this->ej2->obtenerCalificacion(0));
        $this->assertEquals("Suficiente",$this->ej2->obtenerCalificacion(5));
        $this->assertEquals("Incorrecta",$this->ej2->obtenerCalificacion(18));
        $this->assertEquals("Incorrecta",$this->ej2->obtenerCalificacion(-18));
        $this->assertEquals(false,$this->ej2->obtenerCalificacion("f"));
    }
}