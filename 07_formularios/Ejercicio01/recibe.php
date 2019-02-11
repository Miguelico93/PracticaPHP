<?php

if (empty($_GET["user_name"]) == 1){

    echo "No has escrito ningun nombre";

} else {

    echo "Hola bienvenido IAW:".$_GET["user_name"];

}



// print_r($_GET);

?>