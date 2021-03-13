<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nuevo_registro.php">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="backend/Controller.php?session_fin=1">Salir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre Nosotros</a>
      </li>
 <?php if(isset($_SESSION["id_registro"]) and ! empty($_SESSION["id_registro"])):?>

      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <?php endif;?>
    </ul>
    
  </div>
</nav>