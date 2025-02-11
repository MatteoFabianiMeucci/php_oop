<?php
    class Alunno implements JsonSerializable{
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
        
        public function jsonSerialize():array {
            return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta
            ];
        }
    }
?>