<?php $session = session(); ?>
<header class="section-header border-bottom">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">
        <img src="<?= base_url('assets/images/logoSisfarma.png'); ?>" height="60">
      </a>
      <?php if ($session->isLoggedIn) { ?>
      <div class="order-md-last flex-shrink-0">
        <a href="<?= base_url(route_to('logout')) ?>" class="btn btn-danger"> <i class="fas fa-sign-out-alt    "></i>
        </a>
        <button class="navbar-toggler px-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar_main">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item mx-2"> <i class="fas fa-user-circle    "></i> <?= $session->name ?> </li>
          <li class="nav-item mx-2"> <i class="fas fa-key    "></i>
            <?= $session->rol==1? "Administrador" : "Usuario" ?> </li>
          <li class="nav-item mx-2"> <i class="fas fa-calendar-check    "></i>
            <?= $session->ultimoAcceso? "Ultima conexion:" . date('d M H:i',strtotime($session->ultimoAcceso)) ."h": "Primer acceso" ?>
          </li>
        </ul>
        <?php } ?>
      </div> <!-- navbar-collapse end.// -->
    </div> <!-- container end.// -->
  </nav> <!-- navbar end.// -->
</header>