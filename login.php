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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css.css">

	<title>INICIAR SESION</title>
</head>
<body>

  <?php require 'assets/header.php' ?>
  <h1>INICIAR SESION</h1>
  <span>o <a href="register.php">REGISTRATE</a></span>
	<div class="container">

    <form action="" method="POST" class="login-email">

			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Clave" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
      <div class="input-group">
        <input type="submit" name="submit" value="ENVIAR">
			</div>

		</form>
	</div>
</body>
</html>
