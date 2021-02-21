<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <title>Qué ofrecemos</title>
    <link class="icono" rel="icon" type="image/png" href="img/logo/logo.png" />
    <meta name="keywords" content="cabañas,cabaña,vacaciones,temporada,pileta,finde,fin de semana,postales de sauce,postalesdesauce.com,quintas,quinta,piscina,calor,verano,aire libre"/>
    <meta name="description" content="Alquiler de quintas y cabañas para disfrutar de tus días libres."/>
    <meta name="author" content="GMA desarrollo web" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <link href='fullcalendar/lib/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cargando.css">
    <link rel="stylesheet" href="css/calendario.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/jquery-3.5.1.js"></script>
</head>
<body>
    <div id="div-cargando" class="animate__animated animate__faster">
        <div id="div-izq" class="animate__animated animate__slow"></div>
        <div id="div-imgCargando">
            <img src="img/logo/logoSN.png" class="animate__animated animate__slow animate__fadeIn"
                alt="Cargando...">
        </div>
        <div id="div-der" class="animate__animated animate__slow"></div>
    </div>
    <!-- Cartel "En desarrollo" -->
    <div id="div-W-aviso2" class="div-W-aviso div-pantallaCompleta animate__animated animate__fadeIn">
        <div id="W-aviso2" class="W-aviso animate__animated animate__fadeInUpBig">
            <h1>Lo sentimos</h1>
            <p>
                Esta sección aún no está terminada. Si necesitas realizar una reserva ve a la sección de reservas desde la página de inicio.
            </p>
            <div>
                <a href="./">Volver</a>
            </div>
        </div>
    </div>
    <header>
        <nav>
            <div><img src="img/logo/logo.png" alt="" srcset=""></div>
            <img id="btnOpenMenu" src="iconos2/menu.svg" alt="Menu" srcset="">
            <ul class="animate__animated animate__fadeIn">
                <span id="btnCloseMenu">x</span>
                <li><a href='./'>Inicio</a></li>
                <li><a href='queofrecemos.php'>Qué ofrecemos</a></li>
                <li><a href='reservas.php' style="color: #acd044;">Reservas</a></li>
                <li><a href='ubicacion.php'>Ubicación</a></li>
                <li><a href='contacto.php'>Contacto</a></li>
            </ul>
        </nav>
    </header>
    <script src='fullcalendar/lib/main.js'></script>
    <script src="fullcalendar/lib/locales/es.js"></script>
    <script src="js/calendario.js"></script>
    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
</body>
</html> 