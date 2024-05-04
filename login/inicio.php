<?php 
include_once('../templates/header.php');

session_start();

include_once('../templates/navbar.php');


// Verificar si el usuario está autenticado
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo "Bienvenido, " . $_SESSION['username'] . "!";
} else {
    echo "No estás autorizado para ver esta página.";
}
?>
    <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php"><i class="bi bi-apple  Heading" ></i>Cerrar sesión</a> <!-- Opción para cerrar sesión -->

<?php include_once('../templates/footer.php');