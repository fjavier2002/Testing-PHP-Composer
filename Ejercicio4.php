<?php

class Ejercicio4{

    /**
 * Escribe la calificación asociada a la nota en la página HTML.
 * @param int $nota
 * @return string
 */
    function obtenerCalificacion($nota) {
        echo 'Nota: ' . $nota . '<br>';
        if(is_numeric($nota)){
            switch ($nota) {
                case 0:
                case 1:
                case 2:
                    return 'Muy deficiente';
                case 3:
                case 4:
                    return 'Insuficiente';
                case 5:
                    return 'Suficiente';
                case 6:
                    return 'Bien';
                case 7:
                case 8:
                    return 'Notable';
                case 9:
                case 10:
                    return 'Sobresaliente';
                default:
                    return 'Incorrecta';
            }
            return false;
        }
        
    }}


?>
