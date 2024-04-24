<?php
    /* //
        + Se indica que una serie de numeros ingresados por comando escritura de consola
        + Se comprobarán que pertenecen al menos a los primeros 1000 numeros de la secuencia de fibonacci( 0, 1, 1, 2, 3, 5, 8, 13, ... )
        + El numero ingresado no puede exeder el 10000000000
        + Si ingresas algo que no sea un número o es vacio, se termina la ejecución del programa

        + [Nota]: Se añadirá( a posteriori) una segúna opción ú opción mejorada que considere el input por una cadena de datos usando STDIN ya que hay ejercicios que usan ese tipo de solicitudes
    */

    //1ero se genera el arreglo para optimizar memoria
    $fiboArr = array(0,1);
    echo "sizeof(fiboArr):".sizeof($fiboArr)."\n";
    for ($i=2; $i<1000; $i++){ //Se arma el arreglo
        $fiboArr[$i] = $fiboArr[($i-1)] + $fiboArr[$i-2];
    } //echo implode(",", $fiboArr);

    //2do se arranca el ciclo SiVacioFin
    echo "[Nota]: Para salir, solo presione ENTER, sin escribir nada\n"
        ."Si ingresa algo que no sea número, se convertira en 0\n\n";
    while(true){
        $input = readline("Ingresa un número ENTERO:");
        //Valida salida
        if($input==""){ break; }
        else{ //Continua, se comprueba si es entero
            $inputValue = (int)$input;
            //echo "inputValue: $inputValue\n";
            //itsFibbo($inputValue);

            //Se comienza la validación de si es un número Fibbonachi
            if (in_array($inputValue, $fiboArr))
                { echo " \t * Yes, is a Fibbonachi Number\n"; }
            else{ echo " \t No, :-(\n"; }
        }
    }


?>