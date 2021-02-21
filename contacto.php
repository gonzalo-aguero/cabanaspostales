<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <title>Contacto</title>
    <link class="icono" rel="icon" type="image/png" href="img/logo/logo.png" />
    <meta name="keywords" content="cabañas,cabaña,vacaciones,temporada,pileta,finde,fin de semana,postales de sauce,postalesdesauce.com,quintas,quinta,piscina,calor,verano,aire libre"/>
    <meta name="description" content="Alquiler de quintas y cabañas para disfrutar de tus días libres."/>
    <meta name="author" content="GMA desarrollo web" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <link href='fullcalendar/lib/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cargando.css">
    <link rel="stylesheet" href="css/paginas/contacto.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/jquery-3.5.1.js"></script>
</head>
<body>
    <!-- Pantalla de carga -->
    <div id="div-cargando" class="animate__animated animate__faster">
        <div id="div-izq" class="animate__animated animate__slow"></div>
        <div id="div-imgCargando">
            <img src="img/logo/logoSN.png" class="animate__animated animate__slow animate__fadeIn"
                alt="Cargando...">
        </div>
        <div id="div-der" class="animate__animated animate__slow"></div>
    </div>
    <!-- header / menu -->
    <header>
        <nav>
            <div><img src="img/logo/logo.png" alt="" srcset=""></div>
            <img id="btnOpenMenu" src="iconos2/menu.svg" alt="Menu" srcset="">
            <ul class="animate__animated animate__fadeIn">
                <span id="btnCloseMenu">x</span>
                <li><a href='./'>Inicio</a></li>
                <li><a href='queofrecemos.php'>Qué ofrecemos</a></li>
                <li><a href='reservas.php'>Reservas</a></li>
                <li><a href='ubicacion.php'>Ubicación</a></li>
                <li><a href='contacto.php' style="color: #acd044;">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <!-- contenido exclusivo de la página -->
    <section class="section-contenido">
        <div id="descripcion">
            <h1 class="title1">Contacto</h1>
            <h2>¡Contactáte con nosotros y te contamos todo sobre nuestros lugares!</h2>
            <ul id="socialListContacto" class="socialList">
                <li><a class="a-instagram" href=""><img class="instagram" src="iconos2/insta2.png" alt="Instagram" srcset=""></a></li>
                <li><a class="a-facebook" href=""><img class="facebook" src="iconos2/face2.png" alt="Facebook" srcset=""></a></li>
                <li><a class="a-mailto" href=""><img class="email" src="iconos2/mail2.png" alt="Email" srcset=""></a></li>
            </ul>
        </div>
    </section>
    <!-- Mapa y redes sociales -->
    <section class="section-ubicacion" style="background: url('img/fondo/fondoUbicacion4.jpg') no-repeat;background-size: cover;background-position: center bottom;">
        <div>
            <h1>Nuestra ubicación</h1>
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.1422394689366!2d-60.82953601750379!3d-31.76660621530991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a459b0abd3d9%3A0x4090becdf0c69439!2sCaba%C3%B1as%20Postales%20De%20Sauce!5e0!3m2!1ses-419!2sar!4v1606175100429!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div>
            <h1>Encontranos también en:</h1>
            <ul id="socialListUbicacion" class="socialList">
                <li><a class="a-instagram" href=""><img class="instagram" src="iconos2/insta1.png" alt="Instagram" srcset=""></a></li>
                <li><a class="a-facebook" href=""><img class="facebook" src="iconos2/face1.png" alt="Facebook" srcset=""></a></li>
                <li><a class="a-mailto" href=""><img class="email" src="iconos2/mail1.png" alt="Email" srcset=""></a></li>
            </ul>
        </div>
    </section>
    <!-- pie de página -->
    <footer style="background: url('img/cabana/10.jpg'); background-repeat:no-repeat;background-size: cover;background-position:center center;">
        <div class="_1">
            <img src="img/logo/logo.png" alt="" srcset="">
        </div>
        <div class="_2">
            <div>
                <h1>Contacto</h1>
                <ul id="socialListFooter" class="socialList">
                    <li><a class="a-instagram" href=""><img class="instagram" src="iconos2/insta2.png" alt="Instagram" srcset=""></a></li>
                    <li><a class="a-facebook" href=""><img class="facebook" src="iconos2/face2.png" alt="Facebook" srcset=""></a></li>
                    <li><a class="a-mailto" href=""><img class="email" src="iconos2/mail2.png" alt="Email" srcset=""></a></li>
                </ul>
            </div>
            <div>
                <h1>Índice</h1>
                <ul id="indiceFooter" class="animate__animated animate__fadeIn">
                    <li><a href='./'>Inicio</a></li>
                    <li><a href='queofrecemos.php'>Qué ofrecemos</a></li>
                    <li><a href='reservas.php'>Reservas</a></li>
                    <li><a href='ubicacion.php'>Ubicación</a></li>
                    <li><a href='contacto.php'>Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/galeriaIMG.js"></script>
</body>
</html>