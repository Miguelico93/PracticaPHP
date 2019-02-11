<?php


function tabla_multiplicar($numero)
{
    echo "<table border=\"1\">"; 
    for ($i=1;$i<=10;$i++)
    {
        echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>x</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>".$numero*$i."</td>";
        echo "</tr>";
    }
    
    echo "</table>";

}


$tabla = $_POST["tabla"];

if (empty($tabla) != 1){
    tabla_multiplicar($tabla);
}

?>

<html>
<head>
</head>
<body>

    <form action="index.php" method="post">
        <div>
            <label for="name">Introduzca un numero:</label>
            <input type="number" id="name" name="tabla">
            <button type="submit">Enviar </button>
        </div>
    </form>

</body>
</html>

