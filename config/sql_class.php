<?php
    class sql_class{
        private $bd;

        public function __construct(){
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this->bd->set_charset('utf8');
        }

        public function ConsultaCliente(){
            $resultado = $this->bd->query("SELECT * FROM cliente");
            return $resultado;
        }
        
        public function ConsultaCorreo(){
            $resultado = $this->bd->query("SELECT clienteCorreo FROM cliente");
            return $resultado;
        }
    }
    
?>