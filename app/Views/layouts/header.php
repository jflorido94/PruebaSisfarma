<header class="section-header border-bottom">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url('assets/images/logoSisfarma.png'); ?>" height="60"> </a>
      <div class="order-md-last flex-shrink-0">
        <a href="#" class="btn btn-danger"> <i class="fas fa-sign-out-alt    "></i> </a>
        <button class="navbar-toggler px-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar_main">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item mx-3"> Nombre </li>
          <li class="nav-item mx-3"> Admin </li>
          <li class="nav-item mx-3"> Ultima conexion: <?php echo date('d-m-Y H:i') ?> </li>
        </ul>
      </div> <!-- navbar-collapse end.// -->
    </div> <!-- container end.// -->
  </nav> <!-- navbar end.// -->
</header>