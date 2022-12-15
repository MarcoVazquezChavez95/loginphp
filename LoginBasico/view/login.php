<?php
include_once "../inc/header.php";
?>
<div class="col-6">
    <?php include('../inc/alertas.php'); ?>
    <form class="p-4" action="../controller/iniciarSesion.php" method="POST">
        <h2 class="text-muted">Iniciar Sesion</h2>
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email_usuario" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password_usuario" placeholder="Password">
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-secondary btn-block">Ingresar</button>
        </div>
        <div class="d-grid gap-2">
            <a href="add.php">Registrar usuario</a>
        </div>
    </form>
</div>
<?php
include_once "../inc/footer.php";
?>