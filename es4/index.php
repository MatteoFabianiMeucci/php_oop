<?php
require_once("./Persona.php");
require_once("./Studente.php");
$studente = new Studente("Matteo", "Fabiani", "1");
$studente->presentati();
?>