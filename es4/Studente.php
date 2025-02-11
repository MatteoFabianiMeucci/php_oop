<?php
    class Studente extends Persona{
        protected $matricola;

        function __construct($nome, $cognome, $matricola){
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }
    }
?>