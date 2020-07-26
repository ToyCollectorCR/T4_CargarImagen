<?php

//Se establece la conecion con la Base de Datos

$conexion = new mysqli("localhost","root","","test");

if($conexion){
    //echo "Conexion Realizada";
}else{
    echo "Conexion NO Realizada";
}

?>