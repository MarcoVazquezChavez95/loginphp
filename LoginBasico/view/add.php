<?php
include_once "../inc/header.php";
?>
<div class="col-6">
    <form class="p-4" action="../controller/registrarUsuario.php" method="POST">
        <h2 class="text-muted">Datos usuario</h2>
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre">
            </div>
        </div>
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
            <button type="submit" class="btn btn-secondary btn-block">RegistrarUsuario</button>
        </div>
    </form>
</div>
<?php
include_once "../inc/footer.php";
?>