<?php
session_start();

if($varsesion = "" || $varsesion = ''){
    echo'Usted no tiene autorización';
    die();
}
?>

<!DOCTYPE html>

<!DOCTYPE html>
    <html  lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HABLEMOS Y CAMBIEMOS</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/clean-blog.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <style>
            .w3-btn {
              width: 150px;
              background-color: #6fa4d3;
              text-align: center;
            }
          </style>
    </head>
    <body>
        <div id="fb-root"> </div>
        <script async defer crossorigin="anónimo" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0">
        </script>

         <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">HABLEMOS Y CAMBIEMOS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menú
        <i class="fas fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="bienvenido.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="post.html">noticias</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">logros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





        <header class="masthead" style="background-image: url('assets/img/img11.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
              <div >
                        <img src="assets/img/img12.png"alt="Lights" style="width:100%">
                        </div>
               <h1 class="w3-text-white" style="text-shadow:2px 2px 0 #5d5c5c">Bienvenid(a):
                        <p style="text-align: center"></p>
                    </h1>
            <span class="subheading">"No te preguntes qué puedes hacer tu país por ti,pregúntate que puedes hacer tú por tu país"</span>
          </div>
        </div>
      </div>
    </div>
  </header>

        <!-- Main Content -->
        <div class="container">
            <br><br>
        </div>
        <div id="botones">
          <a class="fcc-btn" href="logout.php">CERRAR SESION</a>

        </div>
        <div class="container">
            <br><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">
                                SERVICIO 204 DEL CORREDOR ROJO AMPLÍA SU RECORRIDO DESDE PACHACAMAC HASTA SAN MIGUEL
                            </h2>
                            <img src="assets/img/img1.jpg" alt="Lights" style="width:100%">
                            <p>
                              Ahora contará con 15 nuevos paraderos. Más de 35 mil pasajeros se beneficiarán con la ampliación.
                              En tanto, servicio 202 que va de San Miguel a Ate será expreso reduciendo el tiempo de viaje en 15 minutos, aproximadamente.</p>
                        </a>
                        <p class="post-meta">Publicado por
                            <a href="https://www.facebook.com/lisethhuamantincogutarra"> Liseth Huamantinco</a> septiembre 24, 2019</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="">
                            <h2 class="post-title">
                                Corredores complementarios: “Estamos convencidos que la ATU sí va a funcionar”
                            </h2>
                            <img src="assets/img/img2.jpg" alt="Lights" style="width:100%">
                            <p>Representante de la ACTU señaló que la ATU debe comenzar por tomar decisiones para que las rutas autorizadas en el Callao no invadan los corredores exclusivos en la ciudad.</p>
                        </a>
                        <p class="post-meta">Publicado por
                            <a href="https://www.facebook.com/lisethhuamantincogutarra">Liseth Huamantinco</a> Septiembre 18, 2019</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="">
                            <h2 class="post-title">
                                Corredores complementarios denuncian ataque por parte de ‘colectiveros’ a al menos 60 buses
                            </h2>
                            <img src="assets/img/img3.jpg" alt="Lights" style="width:100%">
                            <p>Ángel Mendoza, representante de la Actu, indicó que lunas y llantas de los buses de los corredores complementarios han sido afectadas como también dos terminales. Indicó que esta situación refleja la falta de un sistema integrado de transporte.</p>

                        </a>
                        <p class="post-meta">publicado por
                            <a href="https://www.facebook.com/lisethhuamantincogutarra">Liseth Huamantinco</a> Agosto 24, 2019</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="">
                            <h2 class="post-title">
                                Muñoz descarta el incremento de los pasajes en los corredores complementarios
                            </h2>
                            <img src="assets/img/img4.jpg" alt="Lights" style="width:100%">
                            <p>El alcalde de Lima se reunió esta mañana con los representantes de los corredores complementarios a fin de entablar un diálogo y buscar la mejora en el servicio de transporte. Habrán reuniones cada 15 días.</p>

                        </a>
                        <p class="post-meta">Publicado por
                            <a href="https://www.facebook.com/lisethhuamantincogutarra">Liseth Huamantinco</a> Julio 8, 2019</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <img src="assets/img/pub7.png" alt="Lights" style="width:100%">
                </div>
            </div>
            <hr>
            <div class="jumbotron">
                <h2 style="text-align: center;">Deja tu comentario</h2>
            </div>
            <hr>
            <div class="fb-comments" data-href="http://lisethenlinea.000webhostapp.com/bienvenido.php" data-width="100%" data-numposts="5"> </div>
              <hr>
            <div class="jumbotron" style=" background-color: #E32B65;"><h3 style="text-align: center; color:#fff;">"No vamos a cambiar el país en poco tiempo, <br> pero se hará con nosotros, no sin nosotros"</h3></div>
        </div>

          <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>



    </body>
    </html>
