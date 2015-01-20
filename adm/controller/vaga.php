<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './model/vaga.php';

function listarVagas() {
    $view = new View('./view/vaga/listar.php');
    $vagas = selecionarTodasVagas();
    $view->set("vagas", $vagas);
    return $view->output();
}


function prepararAdicionar() {
    $view = new View('./view/vaga/adicionar.php');    
    return $view->output();
}

function adicionarVaga() {
    $vaga = array(
        'cargo' => $_POST['cargo'],
        'empresa' => $_POST['empresa'],
        'quantidade' => $_POST['quantidade'],
        'salario' => $_POST['salario'],
        'resumo' => $_POST['resumo'],
        'descricao' => $_POST['descricao'],        
    );
    adicionar($vaga);
    $view = new View('./view/vaga/listar.php');
    $vagas = selecionarTodasVagas();
    $view->set("vagas", $vagas);
    return $view->output();
}

