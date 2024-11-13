<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página ADO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF;
        }

        /* Encabezado */
        .header {
            display: flex;
            justify-content: flex-end; /* Alinea el contenido hacia la derecha */
            align-items: center;
            padding: 20px;
            background-color: #FCF0E3;
        }

        .header img {
            width: 100px;
            margin-right: auto; /* Empuja el logo a la izquierda */
            padding: 0px 100px;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
        .logout-button {
            background-color: #f28b82;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Sección de Corridas */
        .corridas {
            background-color: #fff;
            padding: 20px;
            margin: 10px auto;
            width: 80%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .corridas h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .corrida-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-top: 1px solid #ddd;
        }

        .corrida-item:first-child {
            border-top: none;
        }

        .corrida-item p {
            margin: 0;
            color: #666;
        }

        .promociones {
            max-width: 600px;
            margin: 0px auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel img {
            width: 100%;
            border-radius: 10px;
        }

        /* Botones de navegación */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }


        /* Sección de Calificación */
        .calificacion {
            background-color: #fff;
            color: #000;
            text-align: center;
            padding: 30px 0;
            margin-top: 20px;
        }

        .calificacion h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .estrellas {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .estrellas p {
            color: #fff;
            font-size: 14px;
        }

    /* Footer */
    .footer {
            background-color: #f8f1ea;
            padding: 40px 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            color: #333;
            font-size: 14px;
        }

        .footer .logo {
            text-align: left;
        }

        .footer .logo img {
            width: 80px;
        }

        .footer .copyright {
            margin-top: 10px;
        }

        .footer .section {
            text-align: left;
        }

        .footer .section h3 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer .section a {
            color: #333;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        .footer .section a:hover {
            text-decoration: underline;
        }

        .footer .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .footer .social-icons img {
            width: 20px;
        }
    </style>
</head>
<body>

<!-- Encabezado -->
<div class="header">
    <img src="../ADO-Autobuses-de-Oriente-Logo-700x394.png" alt="ADO Logo">
    <div class="nav-links">
        <a href="#">Inicio</a>
        <a href="#">Boletos</a>
        <a href="#">Corridas</a>
    </div>
    <button class="logout-button">Cerrar Sesión</button>
</div>

<!-- Sección de Corridas -->
<div class="corridas">
    <h2>Corridas próximas a salir</h2>
    <div class="corrida-item">
        <div>
            <p>Menu Label</p>
            <p>Menu description.</p>
        </div>
        <p>🔺13:00 PM</p>
    </div>
    <div class="corrida-item">
        <div>
            <p>Menu Label</p>
            <p>Menu description.</p>
        </div>
        <p>🔺14:00 PM</p>
    </div>
    <div class="corrida-item">
        <div>
            <p>Menu Label</p>
            <p>Menu description.</p>
        </div>
        <p>🔺15:00 PM</p>
    </div>
</div>

<div class="promociones">
    <h2 align="center">PROMOCIONES</h2>
    <div class="carousel" id="carousel">
   
        <img src="../1.jpg" alt="Promoción 1">
        <img src="../128050514_10157878327480547_4040559758234544922_o.jpg" alt="Promoción 2">
        <img src="../19.jpg" alt="Promoción 3">
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

<script>
    let currentSlide = 0;

    function moveSlide(direction) {
        const carousel = document.getElementById("carousel");
        const slides = document.querySelectorAll(".carousel img");
        const totalSlides = slides.length;

        currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
        carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
</script>



<div class="calificacion">
    <h2>Calificación Experiencia de Viajes</h2>
    <div class="estrellas">
        <p>⭐</p>
        <p>⭐</p>
        <p>⭐</p>
        <p>⭐</p>
        <p>⭐</p>
    </div>
</div>

<div class="footer">
    <div class="logo">
        <img src="../ADO-Autobuses-de-Oriente-Logo-700x394.png" alt="ADO Logo">
        <div class="copyright">
            <p>© 2024 ADO.</p>
            <p>Todos los derechos reservados.</p>
        </div>
        <div class="social-icons">
       
            <a href="https://www.facebook.com/share/Mv3o7WsSgzNGN1EG/?mibextid=JRoKGi"
            " class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
        
            <a href="https://www.instagram.com/casa_tierra_inmobiliaria/ "class=social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
   
        </div>
    </div>

    <div class="section">
        <h3>Nosotros</h3>
        <a href="#">Acerca De</a>
    </div>

    <div class="section">
        <h3>Contacto</h3>
        <a href="#">Teléfono</a>
        <a href="#">Correo</a>
    </div>
</div>

<script
  type="module"
  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
<script
  nomodule
  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
></script>
<script src="./js/script.js"></script>
</body>
</html>
