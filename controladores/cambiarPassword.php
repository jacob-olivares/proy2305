<?php
include '../lib/Conexion.php';
include '../lib/Usuario.php';



$nombreUsuario = $_POST['nombreUsuario'];
$pwdAnt = md5($_POST['pwdAnt']);
$pwdNew = md5($_POST['pwdNew']);
$pwdSub = md5($_POST['pwdSub']);

if($pwdNew!=$pwdSub){
    echo 'La contraseña nueva no coincide';
    return;
}
$oUsr = new Usuario();
$oUsr ->nombre = $nombreUsuario;
$oUsr ->clave = $pwdAnt;

if(!$oUsr ->VerificarUsuarioClave()){
    echo 'El usuario o clave antigua no corresponde';
    return;
}

$oUsr->cambiarClave();
//echo "Clave cambiada exitosamente!!";


