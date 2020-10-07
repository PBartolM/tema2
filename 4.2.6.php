$a = 3;
$b = 7;
$cadena = 'AB';
echo "Sean a = $a, b = $b y cadena='$cadena'<br>";
$c = --$a + $b++;
// Por prioridad primero se hacen los incrementos y decrementos.
// Por lo que $c = 2 + 7 con $a = 2 y $b = 8;
echo "--a + b++ = $c<br>Con b = $b y a = $a<br>";
++$cadena;
echo "++cadena = '$cadena'"; // Imprime: ++cadena = 'AC'
