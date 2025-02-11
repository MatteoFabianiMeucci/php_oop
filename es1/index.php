<?php
    header("Content-Type: application/json");
    include("./Alunno.php");
    $a1 = new Alunno();
    $a1->setNome("Matteo");
    $a1->setCognome("Fabiani");
    $a1->setEta(18);

    $a2 = new Alunno();
    $a2->setNome("Gaia");
    $a2->setCognome("Faberi");
    $a2->setEta(19);

    $a3 = new Alunno();
    $a3->setNome("Azzurra");
    $a3->setCognome("Raimondi");
    $a3->setEta(18);

    $classe = array ("a1" => $a1, "a2" => $a2, "a3" => $a3);
    echo json_encode($classe);
?>