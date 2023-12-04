<?php

class Ejercicio14{
/**
 * Ejercicio 12. Calculadora PHP
 * Autor: Sustituye con tu nombre aquí.
 */

/**
 * Implementa el Menú 1: Sumar
 * @return int Suma
 */
function suma($sumando1, $sumando2)
{
    
    // Implementa la opción de la calculadora que permite sumar.
    $resultado = $sumando1 + $sumando2;
    echo "El resultado de la suma $sumando1 + $sumando2 es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 2: Restar
 * @return int Resta
 */
function resta($res1, $res2)
{
    // Implementa la opción de la calculadora que permite restar.
    
    $resultado = $res1 - $res2;
    echo "El resultado de la resta $res1 - $res2 es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 3: Multiplicar
 * @return int Multiplicación
 */
function Multiplicar($mul, $mul2)
{
    
    $resultado = $mul * $mul2;
    echo "El resultado de la multiplicación $mul * $mul2 es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 4: Dividir
 * @return float División
 */
function dividir($dividendo, $divisor)
{
    $resultado = $dividendo / $divisor;
    echo "El resultado de la división $dividendo / $divisor es $resultado\n";
    return $resultado;
}

/**
 * Menú Aplicación Calculadora
 */
function appMenu()
{
    $opcion = -1;
    do {
        echo "\n*** CALCULADORA ***\n";
        echo "Menú:\n";
        echo "1. Sumar\n";
        echo "2. Restar\n";
        echo "3. Multiplicar\n";
        echo "4. Dividir\n";
        echo "0. Salir\n";
        $opcion = intval(readline("Introduzca opción: "));

        switch ($opcion) {
            case 1: menu1(); break;
            case 2: menu2(); break;
            case 3: menu3(); break;
            case 4: menu4(); break;
            case 0: echo "Saliendo aplicación calculadora.\n"; break;
            default: echo "Error: Opción $opcion incorrecta.\n"; break;
        }
    } while ($opcion != 0);
}
}
// Ejecutamos la aplicación principal si este archivo se ejecuta directamente

?>
