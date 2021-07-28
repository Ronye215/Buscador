<?php

include_once 'conexion.php';
$conn = mysqli_connect('localhost','root','','bd');
$busqueda = $_GET['busqueda'];
$SQL_READ = "SELECT * FROM libros WHERE Titulo LIKE '%".$busqueda."%' OR Autor LIKE '%".$busqueda."%' or Biblioteca LIKE '%".$busqueda."%' ";
$sql_query = mysqli_query($conn,$SQL_READ);


