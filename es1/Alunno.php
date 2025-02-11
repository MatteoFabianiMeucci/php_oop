<?php
    class Alunno{
        protected $nome;
        protected $cognome;
        protected $eta;

        function getNome(){
            return $this->nome;
        }

        function getCognome(){
            return $this->cognome;
        }

        function getEta(){
            return $this->eta;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setCognome($cognome){
            $this->cognome = $cognome;
        }

        function setEta($eta){
            $this->eta = $eta;
        }

        function stampa(){
            return "NOME:$this->nome COGNOME: $this->cognome ETA': $this->eta";
        }
    }
?>