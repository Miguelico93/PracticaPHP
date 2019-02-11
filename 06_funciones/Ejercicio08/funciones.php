<?php

#Inicia Array

function inicializar_array ($numero_de_elementos, $min, $max)
{
    $numeros = array();
        
    for ($i = 0; $i < $numero_de_elementos; $i++)
    {
        $numeros[$i] = rand($min, $max);
    }
    return $numeros;
}


//------------------------------------


## Funcion para calcular la media


function calcular_media($lista)
{    
    
    $numero_de_elementos=count($lista);
    $suma = 0;
    for ($i = 0; $i < $numero_de_elementos; $i++){
        $suma=$suma+$lista[$i];
    }

$media = $suma/$numero_de_elementos;
return $media;
}

//-------------------------------------



?>