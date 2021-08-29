<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {   
        setarMensagemDeErro('O nome não pode ser vazio!');
        return false;
    }
    
    else if(strlen($nome) < 3)
    {
        setarMensagemDeErro('O nome deve conter mais que três caracteres!');
        return false;
    }
    
    else if(strlen($nome) > 40)
    {
        setarMensagemDeErro('O nome é muito extenso!');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemDeErro('Idade não é um número!');
        return false;
    }
    
    else if(empty($idade))
    {
        setarMensagemDeErro('A idade não pode ser vazia!');
        return false;
    }
    return true;
}


