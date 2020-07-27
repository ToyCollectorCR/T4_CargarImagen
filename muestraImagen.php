<?php
require_once './DataBase/conexionDB.php';                    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Muestra Imagenes</title>
    </head>
    <body>
    <center>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $sql = "SELECT * FROM timagenes";
                  $resultado = $conexion->query($sql);
                  
                  while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['nombre'];?></td>
                        <td> <img height="250px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/> </td>
                    </tr>
                <?php 
                  }
                ?>
                
            </tbody>
        </table>
           
    </center>

    </body>  