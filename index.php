<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Imagenes</title>
    </head>
    <body>
    <center><br><br>
            <form action="./DataBase/ConsultaImagenes.php" method="POST" enctype="multipart/form-data">
                <h1>Carga de Imagenes al Servidor</h1>
                <input type="text" required="" name="nombre" placeholder="Ingrese Un Nombre" value=""/><br><br>
                <input type="file" required="" name="imagen"/><br><br>
                <input type="submit" value="Aceptar" />                
            </form>        
        </center>
        <?php
        // put your code here
        ?>
    </body>  