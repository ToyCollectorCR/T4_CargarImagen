<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cargar Imagenes</title>
    </head>
    <body>
    <center><br><br>
            <form action="./DataBase/ConsultaImagenes.php" method="POST" enctype="multipart/form-data">
                <h1>Carga de Imagenes al Servidor</h1>
                <input type="file" required="" name="imagen"/><br><br>
                <input type="submit" value="Aceptar" />                
            </form> 
              <section>
        <nav>
            <ul>
                <li><a href="muestraImagen.php">Mostrar Imagenes Cargadas</a></li>
            </ul>
        </nav>
    </section>
        </center>

    </body>  