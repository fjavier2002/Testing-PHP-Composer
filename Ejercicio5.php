<?php
/**
 * Implementa la serie de Fibonacci
 * @param int $n Número de elementos de la serie.
 * @return array Vector con la serie de Fibonacci.
 * @author: Sustituye tu nombre y apellidos aquí
 */
class Ejercicio5{
    function fibonacci($n)
    {
        if(is_numeric($n)){
            $vector = array(); // Creamos un vector para almacenar el cálculo
            
            // ESCRIBE TU CÓDIGO AQUÍ
            if ($n == 1) {
                $vector[] = 1;
            }
            if ($n >= 2) {
                $vector[] = 1;
                $vector[] = 1;
            }
            for ($i = 2; $i < $n; $i++) {
                $vector[] = $vector[$i - 1] + $vector[$i - 2];
            }
            
            return $vector; // Retorno de la función
        }
        return false;
    }

   
}
?>
