   <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Imagenes</title>
  </head>
  <body>
    <?php 

        require_once 'conexionDB.php';

        
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $sql = "INSERT INTO timagenes(imagen) VALUES('$imagen')";
        $resultado =  $conexion->query($sql);
         
            if ($resultado){
                header("location:../index.php");

            }else{
                echo "Fallo al Enviar la Imagen al Servidor";
            }
   ?> 
   
      
  </body>
</html>
   
   




   

