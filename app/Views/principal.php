<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGHardware</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Roboto&display=swap" rel="stylesheet">

    <link href="assets/css/inicio.css" rel="stylesheet"> 
  
<body> 
    <nav class="menu">
        <h1 class="titulo"></h1>
        <h2 class ="Busqueda"> 
          <form action="/search" method="get">
            <input type="text" placeholder="¿Qué estás buscando?" name="query" class="search-input">
            <button type="submit" class="search-button">🔍</button>
        </form>                                                 
      </h2>  
        <ul> 
          <li><a href="#">Productos</a></li>
          <li><a href="#">Más vendidos</a></li> 
          <li><a href="<?= base_url('quienesSomos');?>">Quiénes Somos</a></li>
          <li><a href="#">Ayuda</a></li>
          <li><a href="<?= base_url('legal'); ?>">Legal</a></li>

        </ul>
      </nav>
    <!-- Carousel de imagenes -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets\img\carrusel principal\publi1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="assets\img\carrusel principal\publi3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="assets\img\carrusel principal\publi4.jpeg" class="d-block w-100" alt="...">
          </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>[]
      </div>

    <!-- Carrusel de productos infinito en caja -->
 
    <section class="caja-carrusel">
      <h2 class="titulo-caja">¡Lo más vendido!</h2>
    <div class="carrusel-infinito">
       <div class="carousel-track">

        <div class="item-producto">
          <img src="assets\img\Procesadores\i5.jpg" alt="1">
          <p class="precio">$125.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\Procesadores\i7.jpg" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\Procesadores\rtx4060.jpg" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\placas de video\placa2.png" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\Procesadores\rx7600.jpg" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\Procesadores\ryzen7_7700x.jpeg" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
        </div>

        <div class="item-producto">
          <img src="assets\img\Procesadores\rtx4090.jpg" alt="1">
          <p class="precio">$90.000</p>
          <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">

        </div>
            <!-- Duplicados para loop -->
            <div class="item-producto">
              <img src="assets\img\Procesadores\i5.jpg" alt="1">
              <p class="precio">$125.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\Procesadores\i7.jpg" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\Procesadores\rtx4060.jpg" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\placas de video\placa2.png" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\Procesadores\rx7600.jpg" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\Procesadores\ryzen7_7700x.jpeg" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
            </div>
    
            <div class="item-producto">
              <img src="assets\img\Procesadores\rtx4090.jpg" alt="1">
              <p class="precio">$90.000</p>
              <img class="carrito-icono" src="assets/img/carrito.png" alt="Agregar al carrito">
    
            </div>
</section>
    
        <!-- Info Envios -->
    <section class="info-section">
      <div class="info-container">
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\camion.png" alt="camion">
          <h2>Beneficio del envío gratis</h2>
          <p>Aplica en compras a partir de $180,000.</p>
        </div>
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\pagos.png" alt="pagos">
          <h2>Numerosos métodos de pago</h2>
          <p>Elegí el que más te convenga.</p>
        </div>
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\paquete2.png" alt="camion">
          <h2>Recibí tus productos por OCA</h2>
          <p>Tus paquetes estarán seguros por su garantía.</p>
        </div>
      </div>
    </section>


    <footer class="footer">
        <div class="container2">
        <div class="row"> 
                <!-- Parte Superior -->
            <div class="col-md-4 ps-4">

              <div class="footer-contacto">
                <p><em>Contacto</em></p>
                <p>Email: --- -- --</p>
                <p>Teléfono: --- --- -</p>
                <p>Dirección: -- --- ---</p>
              </div>
            </div>
            
            <div class="col-md-8 d-flex justify-content-end align-items-center">
              <div class="text-end me-3">
                <p class="mb-0">Seguinos...</p>
            </div>


                <div class="Iconos-redes">
                <!-- Icono de Facebook -->
                <a href="https://www.facebook.com" target="_blank">
                    <img src="assets\img\facebook-logo_2504792.png" alt="Facebook">
                </a>
            
                <!-- Icono de Instagram -->
                <a href="https://www.instagram.com" target="_blank">
                    <img src="assets\img\instagram_4494488.png" alt="Instagram">
                </a>
              </div>
        </div> 
            </div>
        </div>
      </div>
            <!-- Parte Inferior -->
          <div class="footer-inferior">
              <div class="footer-links">
                <a href="<?= base_url('quienesSomos');?>">Sobre nosotros</a>
                <a href="#">Arrepentimiento</a>
                <a href="<?= base_url('legal'); ?>"><em>términos y condiciones</em></a>
              </div>
              <div class="footer-mediosPagos">
                <p>© 2025 GGHardware. Todos los derechos reservados.</p>
              </div>
            </div>
      </footer>
      

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html> 