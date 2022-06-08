<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Sisfarma</title>

  <!-- Bootstrap CSS 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Font Awesome CSS 5.15.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

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
            <li class="nav-item mx-3"> Ultima conexion: <?php echo date('d-F-Y h:i') ?> </li>
          </ul>
        </div> <!-- navbar-collapse end.// -->
      </div> <!-- container end.// -->
    </nav> <!-- navbar end.// -->
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>