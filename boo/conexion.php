<?php
  $mysqliConexion = new mysqli('localhost', 'root', '', 'ejemploboostrap');
    if($mysqliConexion->connect_error){
      echo '<script language="javascript">alert("La Conexion a la Base de Datos ha fallado: '. $mysqliConexion->connect_error.'");</script>';
      $mysqliConexion="NULL";
    }
    
?>