<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function selecionarTodasVagas() {
    global $db, $vagaDoc;
    $vagas = $db->$vagaDoc->find();
    return $vagas;
}

function adicionar($vaga) {
    global $db, $vagaDoc;
    $db->$vagaDoc->insert($vaga);
}

