<?php
    class Automobile extends Veicolo{
        protected $modello;

        function __construct($marca, $anno, $modello){
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }
    }
?>