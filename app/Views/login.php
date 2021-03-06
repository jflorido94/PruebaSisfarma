<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<?php
// $numero = 2;
// d($numero);
?>

<aside class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-header d-flex justify-content-center p-4">
            <h4 >Iniciar sesión</h4>
        </div>
        
            <form class="card-body my-4" action='<?= base_url(route_to('login')); ?>' method="post">
                <div class="input-group mb-3"> <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input type="text" name="email" required class="form-control" placeholder="E-mail"> </div>
                <!-- input-group end.// -->
                <div class="input-group mb-3"> <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    <input type="password" name="password" required class="form-control" placeholder="Contraseña"> </div>
                <!-- input-group end.// -->
                <button class="btn btn-primary w-100 mt-3" type="submit"> Entrar </button>
            </form> <!-- form end.// -->
    </div> <!-- card end.// -->
</aside>

<?= $this->endSection() ?>