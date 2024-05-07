

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Bienvenido  <?php echo $_SESSION['username']; ?></a>-->
    <h3 class="navbar-brand""> Bienvenido  <b class="text-warning"> <?php echo $_SESSION['username']; ?> </b></h3>
    <a href="logout.php" class="btn btn-danger">Cerrar sesión</a> <!-- Opción para cerrar sesión -->
  </div>
</nav>