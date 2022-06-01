<?php
  /*  $conexion = oci_connect("PJ_BANCK","PJ_BANCK","localhost/XEPDB1");
    if($conexion){
        echo'Conexion establecida';
    }else{
        echo'Error al intentar conectar';
    }*/

    class Conexion{
        private $db = 'oci:dbname=localhost/XEPDB1';
        private $user = 'PJ_BANCK';
        private $pass = 'PJ_BANCK';

        public function Conectar(){
            try{
                $conexion = new PDO($this->db, $this->user, $this->pass);
                $conexion->exec("SET CARACTER SET utf8");
                if($conexion){
                    echo'Conexion establecida';
                    return $conexion;
                }else{
                    echo'Error al intentar conectar';
                }
            }catch(Exception $e){
                echo 'Error al intentar conectar: '.$e->getMessage();
            }
        }
    }

    
?>