<?php


class Conexion extends mysqli {
    
    
    public function __construct(){
        
        parent::__construct('localhost','satelimp_intra','satelimp_intra','satelimp_intranet');
        
        $this->query("SET NAMES 'utf8';");
        
        $this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
        //echo $x;
        unset ($x);
        
        
        
    }
       
    
}


?>