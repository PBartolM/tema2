<html>
<head>
</head>
<body>
    <?php
//$findme=".*\.(jpg|gif)$";
$directory = './imagenes';
$files = array_slice(array_diff(scandir($directory), array('..', '.'), ), 0);
$findme=".*\.(jpg|gif)$";
$files1 = scandir($directory);
echo "<table>";
$index = 0;
$filas1 = intdiv(count($files), 4);
if (count($files) % 4 != 0) {
    $filas1++;
}
for ($k = 0; $k < $filas1; $k++) {
   
    echo "<tr>";
    for ($i = 0; $i < 4; $i++) {
        if(strpos($files[$index], $findme) !== false){

       
        echo "<th>";
        echo "<a href=./imagenes/$files[$index]>
             <img src=\" ./imagenes/$files[$index] \"  width=\"100\" height=\"100\">
             <a>";
        echo "</th>";

        $index++;
    }    
        if ($index >= count($files)) {
            break;
        }

    }
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>