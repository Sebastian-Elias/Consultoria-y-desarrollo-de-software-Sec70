<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría y desarrollo de software</title>
     <!-- Bootstrap CSS línea 9-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="contactenos.css">
  </head>
  <body>
    <main id="inicio">
             <!-- Menu-->
             <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto">Quantum Partners</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Quantum Partners</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
         
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="nuestrosServicios.php">Nuestros Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="contactenos.php">Contáctenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="nosotros.php">Nosotros</a>
          </li>
      </div>
    </div>
  </div>
</nav>
             <!-- FIN Menu-->


    <div class="container-form-contacto">
               <!-- Formulario -->
     <section class="form-registro">
      <form action="conexion.php" method="post">
        <h4>Formulario de contacto</h4>
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" required>
        <input class="controls" type="text" name="phone" id="phone" placeholder="Ingrese su numero de telefono" required inputmode="numeric" pattern="\d*">
        <input class="controls" type="text" name="email" id="email" placeholder="Ingrese su email" required>
        <input class="controls" type="text" name="rut" id="rut" placeholder="Ingrese su dirección" required>
        <textarea class="controls" cols="50" rows="7" id="comentario" placeholder="Ingrese su comentario aquí..." name="comentario" required ></textarea> 
        <button class="botons" type="submit" >Enviar</button>
      </form>
     </section>

    <din class="contacto">
    <p>Dirección física: </p>
    <p>Av. Providencia 1234, Oficina 601</p>
    <p>Providencia, Santiago </p>
    <p>Chile</p>

    <p>Contacto telefónico: </p>
    <p>Teléfono: +56 2 1234 5678</p>

    <p>Dominio de la página web: </p>
    <p>www.coningenio.cl</p>

    <p>Correo electrónico: </p>
    <p>info@coningenio.cl </p>

    </div>
    </div>
    </main>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="menu.js"></script>
</body>
</html>