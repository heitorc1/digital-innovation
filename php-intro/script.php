<?php

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que três caracteres!';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso!';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Idade não é um número!';
    header('location: index.php');
    return;
}

else if(empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia!';
    header('location: index.php');
    return;
}

switch ($idade) 
{
    case $idade >= 6 && $idade <= 12:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Infantil")
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria Infantil";
                header('location: index.php');
                return;
            }
        }
        break;
    case $idade >= 13 && $idade <= 18:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Adolescente")
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria Adolescente";
                header('location: index.php');
                return;
            }
        }
        break;
    case $idade >= 19 && $idade <= 59:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Adulto")
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria Adulto";
                header('location: index.php');
                return;
            }
        }
        break;
    case $idade >= 60:
        for($i = 0; $i < count($categorias); $i++)
        {   
            if($categorias[$i] === "Idoso")
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria Idoso";
                header('location: index.php');
                return;
            }
        }
        break;
    default:
        $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." tem idade inválida";
        header('location: index.php');
        break;
}
