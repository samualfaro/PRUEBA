<?php
include "config.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: panel.php");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
    }


}


?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css.css">

	<title>EL CHISMOCHASKI</title>
</head>
<body>

  <?php require 'assets/header.php' ?>

  <div class="container">
     <div >
        <img src="assets/img/pub1.png" alt="Lights" >
    </div>
  </div>
  <div class="container">
    <p>Siempre hay otra opción para cambiar nuestro país.
      <br> ¡¡Con voluntad!!</p>
    <p>¡Seámos parte del cambio!
      <br> Buscando soluciones y díalogando sobre esta problematica que tenemos en el transporte</p>
    <p>¡Regístrate Ahora!</p>
  </div>

  <div class="botones">
    <a class="fcc-btn" href="register.php">REGISTRARSE</a>
    <a class="fcc-btn" href="login.php">INICIAR SESION</a>
  </div>
    <div class="container2">
        <h1>Inicia sesión para que puedas ver algunas noticias y contarnos en los comentarios las experiencias que puedas haber tenido en el transporte público. Y ayudarte en alguna solución si es posible
        </h1>
    </div>
    <hr style="color: #D46A83;">
    <div class="container">
        <h3 style="text-align: center">¿Podrías colaborarme con una encuesta?</h3>

        <a href="https://docs.google.com/forms/d/1ucLd0l4eqTt3YBJgBY8-6f43p0QWMJEg4GQ4U6koFZM/edit"> <p style="text-align: center; font-size:30px">Haz clik aquí</p></a>
    </div>


    <div class=".container-fluid">
      <div class="row">
        <div class="col-sm-4 ">
        <h4>NOSOTROS</h4>
        <p>
          Esta página fue creada por
          <a href="https://www.facebook.com/lisethhuamantincogutarra">Liseth huamantinco</a>
          del instituto CETPRO AMERICANO
        </p>
      </div>
      <div class="col-sm-4">
        <p>"Proyecto titulacion 2021"</p>
        <p>Profesor <a href="https://www.facebook.com/Lic.NielsAC">Niels Arias Campos</a>        </p>
      </div>
      <div class="col-sm-4">
        <h4>FINALIDAD</h4>
        <p>
          Poder informarnos sobre una problemática de nuestro país que es el transporte público,
          también contar anécdotas o problemas que hayas pasado. Junto a ello poder fomentar una buena educación
        </p>
      </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="icons">
        
        <ul>
          <i class="fa fa-twitter" style="font-size:50px;"></i>
          <i class="fa fa-facebook" style="font-size:50px;"></i>
          <i class="fa fa-github" style="font-size:50px;"></i>
        </ul>

      </div>
      <div class="Copyright">
          <p>Copyright &copy; EL CHISMOCHASKI 2021.</p>
      </div>
    </footer>
</body>
</html>
