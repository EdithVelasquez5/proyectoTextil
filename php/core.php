<?php

session_start();

// INICIO MODULO LOGIN
// Verificar si se recibieron datos de usuario y contraseña
if (isset($_POST['username']) && isset($_POST['pass'])) {

    // Lista de usuarios y contraseñas
    $users = [
        'admin' => '123456',
        'empleado' => 'abc123',
        'jefe' => 'jef123'
    ];

    // Obtener datos de usuario y contraseña
    $username = $_POST['username'] ?? '';
    $pass = $_POST['pass'] ?? '';

    // Verificar si el usuario existe y si la contraseña es correcta
    if (array_key_exists($username, $users) && $users[$username] === $pass) {
        // Credenciales correctas, iniciar sesión y redirigir
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión
        $_SESSION['id_empleado']=1;
        header("Location: ../login/inicio.php"); // Redirigir a una página de bienvenida
        exit; // Terminar el script para evitar ejecución adicional
    } else {
        // Credenciales incorrectas
       echo("<script> alert('Usuario o Contraseña Incorrectos') </script>" );
      // header("Location: login.php");
       /* echo("<script> 
        Swal.fire({
            icon: 'error',
            title: 'USUARIO INCORRECTO',            
        })/script>");*/

      //  echo "Usuario o contraseña incorrectos.";
    }
}else{
    echo("<script> alert('Usuario o Contraseña Incorrectos') </script>" );
  //  header("Location: login.php");
    
}
//FIN INICIO LOGIN



?>


