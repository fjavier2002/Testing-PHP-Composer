<?php

class Ejercicio2{

    /**
    * Comprueba la mayoría de edad
    * @param int $edad 
    * @return bool - true: mayorEdad - false: menorEdad
    */

    function esMayorEdad($edad) {
        echo 'Edad: ' . $edad . '<br>';
        echo 'Mayoría de edad?: ';
        if(is_numeric($edad) || $edad >= 0){
            if ($edad < 18) {
                echo 'Usted es menor de edad.';
                return false;
            } else {
                echo 'Usted ya es mayor de edad; por tanto, ya podría conducir.';
                return true;
            }
        }else{
            return false;
    }
}


}


?>
