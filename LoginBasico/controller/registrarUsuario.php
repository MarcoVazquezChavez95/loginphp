<?php
print_r($_POST);
if (
    empty($_POST["email_usuario"]) || empty($_POST["password_usuario"]) || empty($_POST["nombre_usuario"])
) {
    header('Location: ../view/login.php?mensaje=error');
    exit();
} else {
    echo"datos correctos";
    include_once '../config/config.php';
    $email_usuario = $_POST["email_usuario"];
    $password_usuario = $_POST["password_usuario"];
    $nombre_usuario = $_POST["nombre_usuario"];
    
    $sentencia = $bd->prepare("INSERT INTO usuarios(email_usuario,password_usuario,nombre_usuario)
    VALUES (?,?,?);");
    $resultado = $sentencia->execute([$email_usuario, $password_usuario, $nombre_usuario]);
    if ($resultado == TRUE) {
        header('Location: ../view/login.php?mensaje=registrado');
    } else {
        header('Location: ../view/login.php?mensaje=error');
        exit();
    }
}