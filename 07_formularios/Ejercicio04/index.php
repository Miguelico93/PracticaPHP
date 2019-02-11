<?php

$cantidad_moneda = $_POST["cantidad_moneda"];
$tipo_moneda = $_POST["tipo_moneda"];  


if (empty($cantidad_moneda) != 1 && empty($tipo_moneda) != 1){
    for ($i = 0;$i < $cantidad_moneda; $i++){
        echo "<img src=monedas/".$tipo_moneda."/".rand(1,2).".jpg></img>";
    }
}
    

?>

<html>
<head>
</head>
<body>

    <form action="index.php" method="post">
        <div>
            <label for="cantidad">Cantidad de Monedas:</label>
            <input type="number" id="monedas" name="cantidad_moneda">
        </div>

        <div>
            <label for="range">¿Que moneda seleccion?</label>
            <select name="tipo_moneda">
                <option value="3">Dólar estadunidense</option>
                <option value="1">Euro</option>
                <option value="2">Franco</option>
                <option value="5">Yuan</option>
                <option value="4">Libra</option>
            </select>
        </div>

        <div class="button">
            <button type="submit">Enviar</button>
        </div>

    </form>

</body>
</html>