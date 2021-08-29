<?php

$categorias = array();

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if(empty($nome))
{
    echo 'O nome não pode ser vazio!';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais que três caracteres!';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso!';
    return;
}

if(!is_numeric($idade))
{
    echo 'Idade não é um número!';
    return;
}

if(empty($idade))
{
    echo 'A idade não pode ser vazia!';
    return;
}

switch ($idade) 
{
    case $idade >= 6 && $idade <= 12:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Infantil")
            {
                echo "O nadador ".$nome." compete na categoria Infantil";
            }
        }
        break;
    case $idade >= 13 && $idade <= 18:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Adolescente")
            {
                echo "O nadador ".$nome." compete na categoria Adolescente";
            }
        }
        break;
    case $idade >= 19 && $idade <= 59:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Adulto")
            {
                echo "O nadador ".$nome." compete na categoria Adulto";
            }
        }
        break;
    case $idade >= 60:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Idoso")
            {
                echo "O nadador ".$nome." compete na categoria Idoso";
            }
        }
        break;
    default:
        echo "O nadador ".$nome." tem idade inválida";
        break;
}
