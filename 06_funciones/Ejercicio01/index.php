<?php

function tabla_multiplicar($numero1)
{
    echo "<table border=\"1\">"; 
    for ($i=1;$i<=10$i++)
    {
        echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>x</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>".$numero*$i"</td>"
        echo "</tr>" 
    }
    
    echo "</table>"

}


function imprimir_tablas($inicio,$fin)
{
    for($i = $inicio; $i <= ;$i++)
    {
        tabla_multiplicar($i);
    }     
}

$tabla = imprimir_tablas(20, 40);



?>

