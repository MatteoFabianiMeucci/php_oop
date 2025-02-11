<?php
    require_once("./Veicolo.php");
    require_once("./Automobile.php");

    $auto = new Automobile("Audi", "2025", "C4");
    echo $auto->getMarca();
?>