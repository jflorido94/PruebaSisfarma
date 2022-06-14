<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<?php
// $numero = 2;
// d($numero);
?>
<!-- TODO:eliminar si el usuario no es admin -->
<div class="container row row-cols-1 row-cols-sm-3 g-3 d-flex justify-content-around ">
    <a href="<?= base_url(route_to('informe')) ?>" class="col text-decoration-none text-reset  align-self-stretch">
        <div class="card bg-light">
            <img src="<?= base_url('assets/images/informe.webp') ?>" class="card-img-top" alt="card-grid-image" >
            <div class="card-body">
                <h5 class="card-title text-center">Informe Consumo</h5>
            </div>
        </div>
    </a>
    <a href="<?= base_url(route_to('cliente')) ?>" class="col text-decoration-none text-reset  ">
        <div class="card bg-light">
            <img src="<?= base_url('assets/images/cliente.webp') ?>" class="card-img-top" alt="card-grid-image" >
            <div class="card-body">
                <h5 class="card-title text-center">Consulta Clientes</h5>
            </div>
        </div>
    </a>
</div>

<?= $this->endSection() ?>