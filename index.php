<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/flutter.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/header.js"></script>
    <script src="js/login.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>LACTEOS DEL CESAR</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="img/logokl.png" alt=""></a>
        </div>
        <ul>
          <li>
            <a href="index.php">Inicio</a>
          </li>
          <li>
            <a href="direc/contacto.php">Contacto</a>
          </li>
          <li>
            <a href="direc/nosotros.php">Acerca de</a>
          </li>
        </ul>
        <button class="open-button" onclick="openForm()">Iniciar Sesion</button>
          <div class="form-popup" id="login">
            <form action="dashboard/index.php" class="form-container">
              <h1>Bienvenido</h1>

              <label for="user"><b>Usuario</b></label>
              <input type="text" placeholder="ingrese su usuario" name="user" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit" class="btn">INGRESAR</button>
              <button type="button" class="btn cancel" onclick="closeForm()">CERRAR</button>
            </form>
          </div>
      </nav>
      <header>
        <div class="headline">
          <div class="inner">
            <h1>
              klaren's
            </h1>
            <p>
              Lacteos del Cesar S.A
            </p>
          </div>
        </div>
      </header>
      <section class="carruselinfo">
        <div >
            <h2>DEPARTAMENTO DE LOGISTICA</h2>  
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicaciones -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Informacion en el carrusel -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/CLIENTE.jpg" alt="CLIENTES" style="width: 1200px;height: 456px;">
                </div>
          
                <div class="item">
                  <img src="img/CARGUE.jpg" alt="CARGUE" style="width: 1200px;height: 456px;">
                </div>
              
                <div class="item">
                  <img src="img/PROPIETARIO.png" alt="TRANSPORTE" style="width: 1200px;height: 456px;">
                </div>
              </div>
          
              <!-- Controles a la Izq y a la Der -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </section>
      <footer>
       
        <div class="container-footer-all">
         
             <div class="container-body">
 
                 <div class="colum1">
                     <h1>Mas informacion de la compañia</h1>
 
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Accusantium explicabo amet quis omnis animi molestiae, alias inventore commodi. 
                       Quod, fuga veritatis quo natus vero earum velit. Optio ut pariatur necessitatibus?

                     </p>
 
                 </div>
 
                 <div class="colum2">
 
                     <h1>Redes Sociales</h1>
 
                     <div class="row">
                         <a href="https://www.facebook.com/klarenscol/" target="_blank"><img src="icon/facebook.png"></a>
                         <label>Facebook</label>
                     </div>
                     <div class="row">
                         <a href="https://twitter.com/klarenscol" target="_blank"><img src="icon/twitter.png"></a>
                         <label>Twitter</label>
                     </div>
                     <div class="row">
                         <a href="https://www.instagram.com/klarenscol/" target="_blank"><img src="icon/instagram.png"></a>
                         <label>Instagram</label>
                     </div>
 
 
                 </div>
 
                 <div class="colum3">
 
                     <h1>Informacion Contactos</h1>
 
                     <div class="row2">
                      <a href="https://goo.gl/maps/pc4iiH4xQtu3pa9z9" target="_blank"><img src="icon/house.png"></a>
                         <label>Cra. 7a #30A-04, Valledupar, Cesar</label>
                     </div>
 
                     <div class="row2">
                         <img src="icon/smartphone.png">
                         <label>(+57) 5 5727800</label>
                     </div>
 
                     <div class="row2">
                        <a href="mailto:dvargas@klarens.com.co" target="_blank"><img src="icon/contact.png"></a>
                        <label>dvargas@klarens.com.co</label>
                     </div>
 
                 </div>
 
             </div>
         
         </div>
         
         <div class="container-footer">
                <div class="footer">
                     <div class="copyright">
                         © 2021 Todos los Derechos Reservados | <a href="">Carlos</a>
                     </div>
 
                     <div class="information">
                         <a href="">Informacion del software</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                     </div>
                 </div>
 
             </div>
         
     </footer> 
</body>
</html>