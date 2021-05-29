<?php
session_start();
$conn = mysqli_connect(
    'localhost', //direccion de la web
    'root', //usuario
    '', //contraseña
    'mi_cv', //nombre de la base de datos
);
if (isset($conn))  //si mi conexion es exitosa
  echo "conexion exitosa"  //imprimir "conexion exitosa"

?>