<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADO</title>
    <link rel="stylesheet" href="../resources/css/app.css">
</head>
<body>
<a href="https://api.whatsapp.com/send?phone=2481103306" class="btn-wsp" target="_blank">
    <i class="fa fa-whatsapp icono"></i>
</a>

<header class="header" data-header>
  <div class="container">
    <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
      <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
    </button>

    <a href="#" class="logo">
      <img src="" width="100" height="60" alt="Logo" class="logo-light">
    </a>

    <nav class="navbar" data-navbar>
      <div class="navbar-top">
        <a href="#" class="logo">
          <img src="" width="100" height="60" alt="logo">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

        <ul class="navbar-list">
          <li><a href="#inicio" class="navbar-link">INICIO</a></li>
          <li><a href="#servicios" class="navbar-link">SERVICIOS</a></li>
          <li><a href="#contacto" class="navbar-link">CONTACTO</a></li>
          <li><a href="#login" class="navbar-link">INICIAR SESIÓN</a></li>  
        <ul class="social-list">

    
        </ul>

      </nav>
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>
  <div class="caja" id="contacto">
        <div class="box-info">
            <h1>CONTÁCTO</h1>
          
            <div class="data">
                <p><i class="fa-solid fa-envelope"></i>CORREO</p>
                <p><i class="fa-solid fa-location-dot"></i>DIRECCIONES</p>
            </div>
            <div class="links">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
        
            </div>
        </div>
        <form action="https://formsubmit.co/creacode0@gmail.com" method="POST">
            <div class="input-box">
                <input type="text" id="name"class="name" placeholder="Nombre" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
              <input type="text" id="mail"class="mail"required placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
              <input type="text" id="phone"class="phone"placeholder="Celular">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <div class="input-box">
              <textarea name="message" class="message" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button type="submit">Enviar mensaje</button>
        </form>
    </div>


        <section class="mapa" id="ubicacion">
          <iframe src=""></iframe>
   

      </section>
    
</body>
</html>