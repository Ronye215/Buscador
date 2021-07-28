<?php
include_once 'conexion.php';
$conn = mysqli_connect('localhost','root','','bd');

$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$biblioteca = $_GET['biblioteca'];
$bd = "bd";
$libros = "libros";

$insert_value = 'INSERT INTO `' . $bd . '`.`'.$libros.'` (`Titulo` , `Autor` , `Biblioteca`) VALUES ("' . $titulo . '", "' . $autor . '", "' . $biblioteca . '")';
mysqli_select_db($conn, $bd);
mysqli_query($conn, $insert_value);


 header('Location: ../admin.php');
//$sql = "INSERT INTO libros (titulo, autor, biblioteca) VALUES (:titulo, :autor, :biblioteca)";
//$tnt = $conn->prepare($sql);
//$tnt->bindValue(':titulo', $titulo);
//$tnt->bindParam(':autor', $autor);
//$tnt->bindParam(':biblioteca', $biblioteca);

//if ($tnt->execute()){
//    echo "se logró agregar libro";
//}
?>