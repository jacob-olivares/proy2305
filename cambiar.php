<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="./controladores/cambiarPassword.php" method="post">
            <div>Usuario: <input type="text" name="nombreUsuario"></div>
            <div>Contraseña Antigua: <input type="password" name="pwdAnt"></div>
            <div>Contraseña Nueva: <input type="password" name="pwdNew"></div>
            <div>Confirme Contraseña Nueva: <input type="password" name="pwdSub"></div>
            <input type="submit" value="Cambiar Contraseña">
        </form>
    </body>
</html>
