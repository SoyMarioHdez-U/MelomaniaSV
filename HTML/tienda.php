

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/MelomaniaSV/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   

    <link rel="icon" href="http://localhost/MelomaniaSV/Img/icono.png" type="image/x-icon">
</head>

<body class="fondo">
  <!-- Menu principal (solo parta guiarme) -->
  <main>
    <div class="header">
      <div class="logo"><a href="http://localhost//MelomaniaSV/HTML/"><img src="http://localhost/MelomaniaSV/Img/Logo.png" height="50px"></a></div>
      <div class="sesion">
          <div class="ini-sesion"><a href="http://localhost//MelomaniaSV/HTML/iniciarsesion.php">INICIAR SESIÓN</a></div>
          <div class="registro">REGÍSTRATE</div>
          <div><button><i class="fas fa-shopping-cart mi-icono-de-carrito"></i></button></div>
      </div>          
    </div>

    <div class="nav">
          <div class="urlIni firstNav"><a href="http://localhost//MelomaniaSV/HTML/index.php">Inicio</a></div>
            <!-- Hipervinculo para acceder a la tienda y cursos-->
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/tienda.php">Tienda</a>
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/cursos.php">Cursos</a>
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/.php">Contactos</a>
    </div>


    <!-- Parte cabezera de la tienda-->
    <section>
      <div class="cabezera">
        <img src="http://localhost/MelomaniaSV/Img/tienda/tienda.jpeg" alt="tienda" width="1110px" height="500px">
          <div class= "texto-superpuesto">
            <h1>Tienda</h1>
          </div>
      </div>
    </section>
      
    <!-- Aquí se desplegarán los productos -->
    <section>  
      <div class="container"> <!-- Toda la parte de las secciones y barra-->
          <!-- Barra de navegación -->
        <div class="barralateral">
          <ul>
            <li><button class="mi-boton">Intrumentos</button></li>
            <li><button class="mi-boton">Equipo de sonido</button></li>
            <li><button class="mi-boton">Libros</button></li>
          </ul>
        </div>        
      
     <!-- productos -->
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm" >
                <img src="http://localhost/MelomaniaSV/Img/tienda/AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER.jpg" alt="" width="267" height="200">
                <div class="card-body">
                  <h5 class="card-title">AMPLIFICADOR PARA GUITARRA ELECTRICA 100W CHAMPION FENDER</h5>
                  <p class="card-text">$200.00 </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <a href="details.php?id=<?php echo $row['id']; ?>&token=<?php echo 
                      hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="botondetalles">Detalles</a>
                    </div> -->
                    <div class="btn-group">
                      <a href=" " class="botondetalles">Detalles</a>
                    </div>
                      <a href=" " class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/GUIT ACUSTICA CONCERT NYLON CLASSICAL CGIG BAG GODIN.jpeg" alt="" width="267" height="200">
                <div class="card-body">
                  <h5 class="card-title">GUIT. ACUSTICA CONCERT NYLON CLASSICAL C/GIG BAG GODIN</h5>
                  <p class="card-text">$500.00 </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="" class="botondetalles">Detalles</a>
                    </div>
                        <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
              <img src="http://localhost/MelomaniaSV/Img/tienda/50-Partituras-Para-Aficionados-Al-Piano.jpg" alt="" width="267" height="200">
                <div class="card-body" >
                  <h5 class="card-title">50 Partituras Para Aficionados Al Piano</h5>
                  <p class="card-text">$20.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="" class="botondetalles">Detalles</a>

                    </div>
                      <a href="" class="botoncarrito">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
      <div >


      </div>     
      
    </section>
    <div class="footer">
        <div class="logoFooter"><a href="http://localhost//MelomaniaSV/HTML/"><img src="http://localhost/MelomaniaSV/Img/Logo.png" height="50px"></a></div>
        <div class="socialNetworks">
            <a href="http://www.facebook.com"><img src="http://localhost/MelomaniaSV/Img/rss/facebook.png"></a>
            <a href="http://www.twitter.com"><img src="http://localhost/MelomaniaSV/Img/rss/twitter.png"></a>
            <a href="http://www.instagram.com"><img src="http://localhost/MelomaniaSV/Img/rss/instagram.png"></a>
        </div>
            <p>© 2023 Melomanía.</p>
            <p class="lastFooter">Tecnologías Web - Universidad Católica de El Salvador</p>
        </div>
</div>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>