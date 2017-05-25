<?php
include './Conexion.php';

$nombreUsuario = $_POST['nombreUsuario'];
$pwdAnt = md5($_POST['pwdAnt']);
$pwdNew = md5($_POST['pwdNew']);

    
$oConn = new Conexion();
    
if ($oConn->Conectar()){
    $db = $oConn -> objconn;
}else{
    return false;
}

$sql = "UPDATE acceso SET pwdusuario = '$pwdNew' WHERE nomusuario = '$nombreUsuario'; ";
$resultado = $db->query($sql);

$sqlPas = "SELECT PWDUSUARIO FROM acceso WHERE PWDUSUARIO = '$pwdAnt';";
    
if($result === $db->query($sqlPas)){
        while ($fila = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $fila["PWDUSUARIO"]);
    }
}









