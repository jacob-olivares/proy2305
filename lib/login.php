<?php
session_start();
include 'Conexion.php';
include 'Usuario.php';

$oUsr = new Usuario();
$oUsr->nombre=$_POST['usuario'];
$oUsr->clave=$_POST['pwd'];
if( $oUsr->VerificarUsuarioClave()){
    $_SESSION['USR']=$oUsr;
}
header('Location:http://localhost:8081/proy2305/');

