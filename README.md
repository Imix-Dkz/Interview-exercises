# Ejercicios de Entrevistas
Algunos scripts solicitados, para resolución lógica durante entrevistas...

## PHP
* php_scripts/danger7.php
    + Se plantea un distribución númerica, donde hay sólo unos(1) ó ceros(0)
    + En donde, si se encuentran con al menos 7 unos seguidos o 7 ceros seguidos, se identificarque es una amenaza(son equipos enfrentados)
    + Si es el caso, se indica que es una jugada peligrosa
    + Función de Sálida itsDanger(), regresa un "YES" ó un "NO", si se identifica esa cadena de caracteres
    + La cadena de caracteres se manda como parametro de ejecución
* php_scripts/itsFibbonachi.php
    + Se indica que una serie de numeros ingresados por comando escritura de consola
    + Se comprobarán que pertenecen al menos a los primeros 1000 numeros de la secuencia de fibonacci( 0, 1, 1, 2, 3, 5, 8, 13, ... )
    + El numero ingresado no puede exeder el 10000000000
    + Si ingresas algo que no sea un número o es vacio, se termina la ejecución del programa
* php_scripts/strInDictionary.php
    + Se recibe un arreglo de palabras separadas por coma, parametro de script
    + La primerá palabra, sera buscada dentro del resto de palabras
    + Si existe una coincidencia total o parcial con las palabras del diccionaro, indicar que existe la palabra
    + Cadenas ejemplo:
      - ["baseball", "a,all,b,ball,bas,base,cat,code,d,e,quit,z"]
      - ["hellocat", "apple,bat,cat,goodbye,hello,yellow,why"]
    + array 2 elementos, busqueda de diccionario con los elementos del segundo
    + NOTA: deben de COINCIDIR CONCATENADAS AL MENOS AMBAS EN LA CADENA origEN
* php_scripts/gasStation.php
    + Make sure the solution contains the keyword "__define-ocg__" in at least one comment in the code, and make sure at least one of the variable is named "varOcg". Array Challenge
----------------------------------------------------------------------------------

* 

Have the function ArrayChallenge(strArr) take strArr which will be an an array consisting of the following elements: N which will be the number of gas stations in a circular route and each subsequent element will be the string g:c where g is the amount of gas in gallons at that gas station and c will be the amount of gallons of gas needed to get to the following gas station.

For example strArr may be: ["4","3:1","2:2","1:2","0:1"]. Your goal is to return the index of the starting gas station that will allow you to travel around the whole route once, otherwise return the string impossible. For the example above, there are 4 gas stations, and your program should return the string 1 because starting at station 1 you receive 3 gallons of gas and spend 1 getting to the next station. Then you have 2 gallons + 2 more at the next station and you spend 2 so you have 2 gallons when you get to the 3rd station. You then have 3 but you spend 2 getting to the final station, and at the final station you receive 0 gallons and you spend your final gallon getting to your starting point. Starting at any other gas station would make getting around the route impossible, so the answer is 1. If there are multiple gas stations that are possible to start at, return the smallest index (of the gas station). N will be >= 2.
Examples

 ["4","3:1","2:2","1:2","0:1"]

Input: ["4","1:1","2:2","1:2","0:1"]
Output: impossible

Input: ["4","0:1","2:2","1:2","3:1"]
Output: 4
-------------------------------------------
###[Reto en menos de 3 horas]
1. Indicar si un string es palindromo
2. Dividir 2 números sin utilizar el simbolo de división
3. Iterar un array una vez encuentre el número menor o mayor
4. Crear un API con 4 metodos (CRUD)
5. Llenar la BD usando la API que se creó, exportar a CVS el resultado 

## [PHP8 Perks]
Contiene una serie de ejemplos y ejercicios extra para comprención y uso de PHP8
* Cosas como los "Promoted Propertyes"
* El uso de "declare(strict_types=1);"
* Ejemplos de uso para metodos estaticos de clases
