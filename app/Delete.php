<?php
include_once 'conexion.php';
$conn = mysqli_connect('localhost','root','','bd');

$titulo = $_GET['titulo'];
$biblioteca = $_GET['biblioteca'];
$bd = "bd";
$libros = "libros";

//$delete_value = "DELETE * FROM libros Where titulo ='" . $_GET["titulo"] . "' AND biblioteca ='" . $_GET["biblioteca"] . "'";
$delete_value = "DELETE FROM libros Where titulo ='$titulo' && biblioteca ='$biblioteca'";
if (mysqli_query($conn, $delete_value)) {
    header('Location: ../admin.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

//mysqli_query($conn, $delete_value);


 
//$sql = "INSERT INTO libros (titulo, autor, biblioteca) VALUES (:titulo, :autor, :biblioteca)";
//$tnt = $conn->prepare($sql);
//$tnt->bindValue(':titulo', $titulo);
//$tnt->bindParam(':autor', $autor);
//$tnt->bindParam(':biblioteca', $biblioteca);

//if ($tnt->execute()){
//    echo "se logró agregar libro";
//}
?>