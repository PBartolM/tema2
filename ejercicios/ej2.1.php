<html>
<head>
</head>


<body>
    <style>
    table, th, td {
  border: 1px solid black;
  
}
    .primo{
        background-color:blue;
    }
    .noprimo{
        background-color:red;
    }
    </style>
    <table>    
    
        <?php 
        echo '<tr>';
        echo'<td>/</td>'.PHP_EOL;
        for ($X=23; $X <34 ; $X++){
            echo'<td>'.$X.'</td>'.PHP_EOL;
        }
        echo'</tr>'.PHP_EOL;
        echo '<tr>'.PHP_EOL;
        for ($Y=1; $Y < 11; $Y++) { 
            echo '<tr>';
            echo '<td>'.$Y.'</td>';
            for ($X=23; $X <34 ; $X++) { 
                if ($X%$Y==0) {
                    echo'<td class="primo">*</td>'.PHP_EOL;
                }else {
                    echo'<td class="noprimo">-</td>'.PHP_EOL;
                }               
            }
            echo '</tr>'.PHP_EOL;
        } 
        
        
        ?>
    </table>
</body>
</html>