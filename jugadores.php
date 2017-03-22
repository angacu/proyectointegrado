<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar </title>
  </head>
  <body>
    <<?php
    //creamos el objeto de conexion
   $mysqli = new mysqli("localhost", "root", "", "nba");
   if ($mysqli->connect_errno) {
     //tenemos un error en la conexion
       echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }else {
     //no ha habido error
     echo <h3>"conexion realizada con exito"</h3>;
     //hacemos una consulta
     $resultado = $mysqli->query("SELECT * FROM jugadores");
     ?>
   }
  </body>
</html>
