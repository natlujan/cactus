<?php
require_once("clsMySQLPDO.php");

class Articulos
{
 
    public $objMysql;
 
    public function __construct(){
        //$this->conn = $db;
        $this->objMysql = new clsMysql();
    }
 
    // regresa todos los clientes activos (status = 1)
    public function getArticulos($MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_getArticulos_4',null,$MQ);   
    }
    
    // Elimina el cliente que cumpla con el id recibido
    public function deleteArticulos($idCliente, $MQ=false){
        //select all data       
        return $this->objMysql->ejecutaSPSafe('sp_deleteArticulo_4',array($codigo),$MQ);   
    }

    // Insert o Update los datos de un cliente
    public function insertArticulo($codigo, $descripcion, $precio, $categoria, $imagen, $MQ=false){
        return $this->objMysql->ejecutaSPSafe('sp_insertArticulo_4',array($codigo, $descripcion, $precio, $categoria, $imagen),$MQ);   
    }

    // Regresa la informacion del cliente que cumpla con el ID recibido
    public function getInfoArticulo($codigo, $MQ=false){
        return $this->objMysql->ejecutaSPSafe('sp_getInfoArticulo_4',array($codigo),$MQ);   
    }
    
    public function updateArticulo($codigo, $descripcion, $precio, $categoria, $imagen, $MQ=false){
        return $this->objMysql->ejecutaSPSafe('sp_updateArticulo_4',array($$codigo, $descripcion, $precio, $categoria, $imagen),$MQ);   
    }

}
?>