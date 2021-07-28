<?php

include_once 'conexion.php';
$conn = mysqli_connect('localhost','root','','bd');
$user = $_POST['user'];
$pass = $_POST['pass'];
//$row2[0] = mysqli_fetch_assoc($sql_query);

$SQL_READ2 = "SELECT * FROM usuarios WHERE correo ='$user' or Usuario = '$user' AND contraseña = '$pass'";
#$a = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo ='.$user.' or Usuario = '.$user.' AND Contraseña = '.$pass.'");
#$b = "SELECT Correo FROM usuarios WHERE Correo ='.$user.' or Usuario = '.$user.' AND Contraseña = '.$pass.'";
#$c = "SELECT Contraseña FROM usuarios WHERE Correo ='.$user.' or Usuario = '.$user.' AND Contraseña = '.$pass.'";
$sql_query2 = mysqli_query($conn, $SQL_READ2);
$row= mysqli_fetch_array($sql_query2);

$a = $row['Usuario'];
$b = $row['Correo'];
$c = $row['Contraseña'];

if ($b == $user){
    if ($c == $pass){
        header('Location: admin.php');
        exit;
}
}

     header('Location: ingreso.php');
     exit;

#if ($a == 0){
#    echo 'false';
#}

#lo que está abajo si funciona
//if ($a == $user or $b == $user and $c == $pass)
//{
// header('Location: admin.php');
//  exit;
//}
// else {
// header('Location: ingreso.php');
// exit;
//}
?>