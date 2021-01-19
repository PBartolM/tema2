<html>
<head>
</head>
<body>
    <?php 
    

 /*   $conduc=array (           
        array('Alonso' ,'Valencia' ,1),
        array('Hamilton' ,'Valencia' ,4),
        array('Massa' , 'Valencia',2),
        array('Raikonen' ,'Valencia' ,3),
        array('Alonso' ,'China' ,1),
        array('Hamilton' ,'China' ,4),
        array('Massa' , 'China' ,2),
        array('Raikonen' , 'China' ,3),
        array('Alonso' , 'Brasil' ,1),
        array('Hamilton' , 'Brasil' ,4),
        array('Massa' , 'Brasil' ,2),
        array('Raikonen' , 'Brasil' ,3),
    );

    $final=array (           
        array('Alonso',0),
        array('Hamilton',0),
        array('Massa',0),
        array('Raikonen',0),
        
    );
    
    echo 'kk';
    for ($i=0; $i <count($conduc) ; $i++) { 
        for ($j=0; $j <count($final) ; $j++) { 
            if($final[$j][0]==$conduc[$i][0]){
                $final[$j][1]=$final[$j][1]+$punt[(($conduc[$i][2]))]; 
                break;  
            }

    }
echo'<h1>Clasificacion del mundial de F1</h1></br>';
echo'</br>';
for ($k=0; $k <count($final) ; $k++) { 
    echo $final[$k][0]+' = '+$final[$k][1]+' puntos';
}


}    */
$punt=array(
    1=>10,2=>8,3=>7,4=>6,5=>4,6=>3,7=>2,8=>1
);
$pilotos=array();

$clasificacion['Alonso']['Valencia']=1;
$clasificacion['Hamilton']['Valencia']=4;
$clasificacion['Massa']['Valencia']=2;
$clasificacion['Raikonen']['Valencia']=3;
$clasificacion['Alonso']['China']=1;
$clasificacion['Hamilton']['China']=4;
$clasificacion['Massa']['China']=2;
$clasificacion['Raikonen']['China']=3;
$clasificacion['Alonso']['Brasil']=1;
$clasificacion['Hamilton']['Brasil']=4;
$clasificacion['Massa']['Brasil']=2;
$clasificacion['Raikonen']['Brasil']=3;

$final=array (           
    array('Alonso',0),
    array('Hamilton',0),
    array('Massa',0),
    array('Raikonen',0),
    
);
//echo $clasificacion['Alonso']['Valencia'];
foreach($clasificacion as $piloto => $resultados)
{
    $totalpuntos=0;
    foreach($resultados as $ciudad => $posicion){
       $totalpuntos += $punt[$posicion];
    }
    $pilotos[$piloto]=$totalpuntos;
}
//print_r(array_keys($clasificacion));
arsort($pilotos);
echo"<h1>Clasificacion mundial de formula 1</h1></br>";
foreach ($pilotos as $cond => $punti) {
   echo "<p>$cond = $punti </p>";
}

    ?>
</body>
</html>