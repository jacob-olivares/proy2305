<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="productos.php">Ingresar Productos</a><br>
        <?php if(isset($_SESSION['USR'])) { ?>
        <a href="cambiar.php">Cambiar Contraseña</a><br>
        <a href="cerrar.php">Cerrar Sesion</a>
        <?php } ?>
        <?php if(!isset($_SESSION['USR'])) { ?>
        <form action="lib/login.php" method="post">
            <div>Usuario: <input type="text" name="usuario"></div>
            <div>Contraseña: <input type="text" name="pwd"></div>
            <input type="submit" value="Ingresar">
        </form>
        <?php } ?>
    </body>
</html>
