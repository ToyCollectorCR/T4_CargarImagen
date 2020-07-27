   <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Imagenes</title>
  </head>
  <body>
    <?php 

        require_once 'conexionDB.php';

        $nombre = $_POST['nombre'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $sql = "INSERT INTO timagenes(nombre,imagen) VALUES('$nombre','$imagen')";
        $resultado =  $conexion->query($sql);
         
            if ($resultado){
                header("location:../index.php");

            }else{
                echo "Fallo al Enviar la Imagen al Servidor";
            }
   ?> 
   
      <!--
      <section>
        <nav>
            <ul>
                <li><a href="../index.php">Regresar al Menu Principal</a></li>
            </ul>
        </nav>
    </section>
    -->
      
      
  </body>
</html>
   
   




   

