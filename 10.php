<?php
// Definición constante
define('CONSTANTE', 3.1416);
// Variables globales
$globalA = 100;
$globalB = 200;

// Función prueba
function Prueba()
{
    // Accederemos a la variable global globalA.
    global $globalA;
    global $globalB;
    // Variable local su desaparece al terminar la función
    // se le asigna el valor 300 en cada llamada.
    $localA = 300;
    // Variable local estática su valor permanece al terminar la
    // función. Sólo se asigna el valor 400 en la primera llamada.
    static $localB = 400;
    $localA++;
    $localB++;
    // Acceso
    echo 'Dentro del ámbito de la función prueba<br>';
    echo "globalA = $globalA <br>"; // Válido  caso 5
    echo "globalB = $globalB <br>"; // Inválido  caso 2
    echo "sglobalB = {$GLOBALS['globalB']} <br>"; // Válido  caso 6
    echo "localA = $localA <br>"; // Válido  caso 3
    echo "localB = $localB <br>"; // Válido  caso 4
    echo 'CONSTANTE = ' . CONSTANTE . '<br>'; // Válido  caso 1
}
Prueba(); // Tras la llamada $localB mantiene el valor incrementado.
Prueba();
// Acceso desde el ámbito de la secuencia de comandos
echo 'Dentro del ámbito de la secuencia de comandos global<br>';
echo "globalA = $globalA<br>"; // Válido  caso 2
echo "globalB = $globalB<br>"; // Válido  caso 2
echo "sglobalB = {$GLOBALS['globalB']}<br>"; // Válido  caso 6
echo "localA = $localA<br>"; // Inválido  caso 3
echo "localB = $localB<br>"; // Inválido  caso 4
echo 'CONSTANTE = ' . CONSTANTE . '<br>'; // Válido  caso 1
