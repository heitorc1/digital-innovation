<?php

$categorias = array();

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = 'Eduardo';
$idade = 71;

switch ($idade) {
    case $idade >= 6 && $idade <= 12:
        for($i = 0; $i <= count($categorias); $i++)
        {   
            if($categorias[$i] === "Infantil")
            {
                echo "O nadador ".$nome." compete na categoria Infantil";
                break;
            }
        }
    case $idade >= 13 && $idade <= 18:
        for($i = 0; $i <= count($categorias); $i++)
        {   
            if($categorias[$i] === "Adolescente")
            {
                echo "O nadador ".$nome." compete na categoria Adolescente";
                break;
            }
        }
    case $idade >= 19 && $idade <= 59:
        for($i = 0; $i <= count($categorias); $i++)
        {   
            if($categorias[$i] === "Adulto")
            {
                echo "O nadador ".$nome." compete na categoria Adulto";
                break;
            }
        }
    default:
    for($i = 0; $i <= count($categorias); $i++)
    {   
        if($categorias[$i] === "Idoso")
        {
            echo "O nadador ".$nome." compete na categoria Idoso";
            break;
        }
    }
}
