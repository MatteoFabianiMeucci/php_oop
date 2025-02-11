<?php
    class Persona{
        protected $nome;
        protected $cognome;

        function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        function getNome(){
            return $this->nome;
        }

        function getCognome(){
            return $this->cognome;
        }

        function presentati(){
            echo "Piacere sono $this->nome $this->cognome";
        }
    }
?>