<?php

include 'functions.php';

$m = new MongoClient(); // connect
$db = $m->selectDB("ProjetoTrainee");
