<?php
print_r($_POST);
if (
    empty($_POST["email_usuario"]) || empty($_POST["password_usuario"])
) {
    header('Location: ../view/login.php?mensaje=error');
    exit();
} else {
    include_once '../config/config.php';
    $email_usuario = $_POST["email_usuario"];
    $password_usuario = $_POST["password_usuario"];
    $sentencia = $bd->prepare("SELECT id_usuario from usuarios WHERE email_usuario=? AND password_usuario=?;");
    $resultado = $sentencia->execute([$email_usuario,$password_usuario]);
    if ($sentencia->fetchColumn() > 0){
        header('Location: ../view/home.php');
        exit();
    }else{
        header('Location: ../view/login.php?mensaje=error');
        exit();
    }
}