
<html>
<head>
</head>
<body>

    <form action="index.php" method="get">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name">
            <button type="submit">Enviar </button>
        </div>
    </form>

</body>
</html>

<?php

if (empty($_GET["user_name"]) != 1){
    echo "<h2>Hola bienvenido IAW:".$_GET["user_name"]."</h2>";
}

// print_r($_GET);

?>
