<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Librería</title>

        <link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>

    	<header >

            <nav class="cyan accent-3">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo center"> <i class="fa fa-book fa-2x fa-pull-right"> </i>Libreria</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars fa-pull-right"></i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/tienda">Tienda</a></li>
                        <li><a href="/carrito"><i class="fa fa-shopping-cart fa-pull-right"></i>Carrito</a></li>
                        <li><a href="/acerca"><i class="fa fa-question-circle fa-pull-right"></i>Acerca</a></li>
                        <li><a href="/contacto"><i class="fa fa-envelope fa-pull-right"></i>Contacto</a></li>
                        <li><a href="/acceder"><i class="fa fa-sign-in fa-pull-right"></i>Acceder</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                         <li><a href="/tienda">Tienda</a></li>
                         <li><a href="sass.html"><i class="fa fa-shopping-cart fa-pull-right"></i>Carrito</a></li>                         <li><a href="badges.html"><i class="fa fa-question-circle fa-pull-right"></i>Acerca</a></li>
                         <li><a href="collapsible.html"><i class="fa fa-envelope fa-pull-right"></i>Contacto</a></li>
                         <li><a href="sass.html"><i class="fa fa-sign-in fa-pull-right"></i>Acceder</a></li>
                    </ul>
                </div>
            </nav>
    	</header>

        <section id= "slider-libreria" class="container">
            <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                    <!--<div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>-->
                  </li>
                  <li>
                    <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                    <!--<div class="caption left-align"> 
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>-->
                  </li>
                  <li>
                    <img src="https://ulthar.files.wordpress.com/2011/07/ubiblio_captura22_desarroll.jpg"> <!-- random image -->
                    <!--<div class="caption left-align"> 
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>-->
                  </li>
                  <li>
                    <img src="https://clublecturacoruna.files.wordpress.com/2013/10/libros-en-directo-horizontal1.jpg?w=604"> <!-- random image -->
                    <!--<div class="caption left-align"> 
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>-->
                  </li>
                </ul>
              </div>
        </section>
        <section id="section2" class="container">
            <div class="row">
                <div class="col s12 l4">
                    <center><i class="fa fa-check-square-o fa-3x"></i></center>
                    <center>CALIDAD</center><br>
                    <p>
                        El servicio al cliente no es uno de nuestros departamentos, es nuestra actitud
                        hacia nuestro único jefe: "el cliente".
                    </p>
                </div>
                <div class="col s12 l4">
                    <center><i class="fa fa-truck fa-3x"></i></center>
                    <center>ENVÍOS</center><br>
                    <p>
                        Contamos con envíos a cualquier parte del país.
                        La confianza y lealtad de nuestros clientes comienza donde termina una venta, 
                        y ésta termina cuando usted recibe sus productos en tiempo y forma.
                    </p>
                </div>
                <div class="col s12 l4">
                    <center><i class="fa fa-credit-card fa-3x"></i></center>
                    <center>COMPRA SEGURA</center><br>
                    <p>
                        Nuestro servicio de COMPRA SEGURA le permite realizar sus pagos en línea utilizando 
                        su tarjeta de crédito o débito de forma segura y desde la comodidad de su hogar.
                    </p>
                </div>
            </div>
        </section>

        <footer class="cyan accent-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"> <i class="fa fa-book fa-2x fa-pull-right"> </i>Libreria</h5>
                <p class="grey-text text-lighten-4">Leer es una experiencia de vida.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Carrito</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Acerca</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Acceder</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 -Avalos Contreras Candelario
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square fa-2x"></i></a>
            </div>
          </div>
        </footer>

        

        <script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>

    </body>
</html>