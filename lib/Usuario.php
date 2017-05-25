<?php
class Usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    var $claveNueva;
    /* VALIDA LA EXISTENCIA DEL USUARIO*/
    function VerificarUsuarioClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->clave);
        $sql = "SELECT * FROM acceso WHERE nomusuario='$this->nombre' AND pwdusuario='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }
    
    function cambiarClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->claveNueva);
        $sql = "UPDATE acceso SET pwdusuario = '$clavemd5' WHERE nomusuario = '$this->nombre'; ";
        $resultado = $db->query($sql);
    }

    
    
}
