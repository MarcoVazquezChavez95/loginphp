<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'faltanDatos') {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error al registrar faltan datos.</strong> Revisar que los campos esten llenos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>


<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'modificado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha modificado el registro de los campos correctamente.</strong> Campos guardados
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>


<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha eliminado correctamente el registro.</strong> Registro Eliminado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>


<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han registrado los campos correctamente.</strong> Campos registrados
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>


<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {


?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error en la operacion verificar campos</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'entregado') {


?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha finalizado el prestamo correctamente</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'loginerror') {


?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error al iniciar sesion verificar contraseña y password</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'errorid') {


?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error en el id </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

