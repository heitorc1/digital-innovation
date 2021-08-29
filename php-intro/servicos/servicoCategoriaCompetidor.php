<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = array();
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    if (validaNome($nome) && validaIdade($idade)) 
    {
        removerMensagemErro();
        switch ($idade) {
            case $idade >= 6 && $idade <= 12:
                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i] === "Infantil") {
                        setarMensagemDeSucesso("O nadador " . $nome . " compete na categoria Infantil");
                        return null;
                    }
                }
                break;
            case $idade >= 13 && $idade <= 18:
                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i] === "Adolescente") {
                        setarMensagemDeSucesso("O nadador " . $nome . " compete na categoria Adolescente");
                        return null;
                    }
                }
                break;
            case $idade >= 19 && $idade <= 59:
                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i] === "Adulto") {
                        setarMensagemDeSucesso("O nadador " . $nome . " compete na categoria Adulto");
                        return null;
                    }
                }
                break;
            case $idade >= 60:
                for ($i = 0; $i < count($categorias); $i++) {
                    if ($categorias[$i] === "Idoso") {
                        setarMensagemDeSucesso("O nadador " . $nome . " compete na categoria Idoso");
                        return null;
                    }
                }
                break;
            default:
                setarMensagemDeSucesso("O nadador " . $nome . " tem idade inválida");
                break;
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
