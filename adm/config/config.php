<?php
include 'view.php';
require_once './controller/vaga.php';
include 'functions.php';

$m = new MongoClient(); // connect
$db = $m->selectDB("BancoDeTalentos");
$pessoaDoc = "Pessoa";
$vagaDoc = "Vaga";

?>

