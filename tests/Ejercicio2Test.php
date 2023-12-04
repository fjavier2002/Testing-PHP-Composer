<?php
/**
 * Pruebas unitarias clase calcularEdad.php
 * @author Fº javier  cerdá
 */
include 'Ejercicio2.php';
use PHPUnit\Framework\TestCase;
class Ejercicio2Test extends TestCase {

    protected $ej2;
    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto animal
        $this->ej2=new Ejercicio2();

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // 
        unset($this->ej2);
    }

    public function test_esMayorEdad(): void
    {
        $this->assertEquals(false, $this->ej2->esMayorEdad(0));
        $this->assertEquals(false,$this->ej2->esMayorEdad(17));
        $this->assertEquals(True,$this->ej2->esMayorEdad(18));
        $this->assertEquals(false,$this->ej2->esMayorEdad(-18));
        $this->assertEquals(false,$this->ej2->esMayorEdad("f"));
    }
}