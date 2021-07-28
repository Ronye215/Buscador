<?php

include_once 'conexion.php';
$conn = mysqli_connect('localhost','root','','bd');
$username = $_POST['user'];
$password = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE Usuario = '$username' OR Correo = '$username' and Contrasena = '$password'") or die();
                    
                       $rest = mysqli_fetch_array($result);
                        





    