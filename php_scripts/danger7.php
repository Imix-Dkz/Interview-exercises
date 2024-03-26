<?php
    /* //php_scripts/danger7.php
        + Se plantea un distribución númerica, donde hay sólo unos(1) ó ceros(0)
        + En donde, si se encuentran con al menos 7 unos seguidos o 7 ceros seguidos, se identificarque es una amenaza(son equipos enfrentados)
        + Si es el caso, se indica que es una jugada peligrosa
        + Función de Sálida itsDanger(), regresa un "YES" ó un "NO", si se identifica esa cadena de caracteres
        + La cadena de caracteres se manda como parametro de ejecución
    */
    function strIsInStr($sentencia, $str)
    {   //Regresa TRUE si $str existe en alguna parte de $sentencia
        //Si no cabe por espacio o no la encuentra es false...
        $return = false;
        $sl_str = strlen($str);
        $sl_sentencia = strlen($sentencia);

        if( $sl_str > $sl_sentencia )
            { return $return; }
        else{ //Si es menor o al menos del mismo tamaño comienza la comparación

            for ($i=0; $i<($sl_sentencia-$sl_str); $i++){
                $substr_c = substr_compare($sentencia, $str, $i, $sl_str);
                echo "[$i, $sl_str, $str]: $substr_c \n";
                if( $substr_c == 0 ){ $return = true; break; }
            }
            return $return;
        }
    }

    function itsDanger($strToCompare){
        $dangerStr1 = "0000000";
        $dangerStr2 = "1111111";
        //echo "strIsInStr($strToCompare, $dangerStr1)=".strIsInStr($strToCompare, $dangerStr1)."\n";

        /* //Para Php 8 se puede usar str_contains()
            $result = (str_contains($strToCompare, $dangerStr1) 
                ? "YES" 
                : (str_contains($strToCompare, $dangerStr2) ? "YES" : "NO") );
            return $result;
        */

        // Para versiones anteriores, se tiene que corroborar que la cadena es contenida cabe dentro de la longitud de la sentencia y verificar grupo a grupo si hay coincidencias, se crea función especial para ello
        if( strIsInStr($strToCompare, $dangerStr1) or strIsInStr($strToCompare, $dangerStr2) ){
            return "YES";
        }else{ return "NO"; }
    }

    //Comienza Ejecución del programa
    if( $argc == 2){
        echo itsDanger($argv[1]);
    }else{ 
        echo "Parametros exedidos...\n"
        ."\t Se tiene que entregar algo como:\n"
        ."\t\t danger7.php 10101001010101\n"
        ."\t\t danger7.php 011101111111110\n"
        ."\t\t danger7.php 100101100000000001111";
    }
?>