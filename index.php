<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <title>Cabañas Postales de Sauce</title>
    <link class="icono" rel="icon" type="image/png" href="img/logo/logo.png" />
    <meta name="keywords" content="cabañas,cabaña,vacaciones,temporada,pileta,finde,fin de semana,postales de sauce,postalesdesauce.com,quintas,quinta,piscina,calor,verano,aire libre"/>
    <meta name="description" content="Alquiler de quintas y cabañas para disfrutar de tus días libres."/>
    <meta name="author" content="GMA desarrollo web" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cargando.css">
    <script src="js/jquery-3.5.1.js"></script>
</head>
<body>
    <!-- Pantalla de carga -->
    <div id="div-cargando" class="animate__animated animate__faster">
        <div id="div-izq" class="animate__animated animate__slow"></div>
        <div id="div-imgCargando">
            <img src="img/logo/logoSN.png" class="animate__animated animate__slow animate__fadeIn"
                alt="Cargando...">
            <p>
                ¡Bienvenido al paraíso!
            </p>
        </div>
        <div id="div-der" class="animate__animated animate__slow"></div>
    </div>
    <!-- Cartel "En desarrollo" -->
    <div id="div-W-aviso" class="div-W-aviso div-pantallaCompleta animate__animated animate__fadeIn">
        <div id="W-aviso" class="W-aviso animate__animated animate__fadeInUpBig">
            <h1>¡Hola!</h1>
            <p>
                Nuestro sitio aún está en desarrollo por lo tanto habrán secciones que no podrás visitar.
                Sin embargo ya podrás realizar reservas sin ningún problema.
            </p>
            <div>
                <a onclick="ocultarCartel('#div-W-aviso','#W-aviso')">Aceptar</a>
            </div>
        </div>
    </div>
    <!-- header / menu -->
    <header>
        <nav>
            <div><img src="img/logo/logo.png" alt="" srcset=""></div>
            <img id="btnOpenMenu" src="iconos2/menu.svg" alt="Menu" srcset="">
            <ul class="animate__animated animate__fadeIn">
                <span id="btnCloseMenu">x</span>
                <li><a href='./' style="color: #acd044;">Inicio</a></li>
                <li><a href='queofrecemos.php'>Qué ofrecemos</a></li>
                <li><a href='reservas.php'>Reservas</a></li>
                <li><a href='ubicacion.php'>Ubicación</a></li>
                <li><a href='contacto.php'>Contacto</a></li>
            </ul>
        </nav>
    </header>
    <!-- portada con imagenes deslizantes -->
    <section class="portada slider">
        <div style="background: url('img/cabana/3.jpg'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
            <div class="div-portada">
                <h1 class="titlePortada animate__animated">¡Bienvenido!</h1>
            </div>
        </div>
        <div style="background: url('img/quinta/4.jpg'); background-repeat:no-repeat;background-size:cover;background-position:center bottom;">
            <div class="div-portada">
                <h1 class="titlePortada animate__animated">Disfrutá de tus fines de semana!</h1>
            </div>
        </div>
        <div style="background: url('img/cabana/7.jpg'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
            <div class="div-portada">
                <h1 class="titlePortada animate__animated">Llevá a toda tu familia</h1>
            </div>
        </div>
    </section>
    <!-- tarjetas de cabaña y quinta y videos -->
    <section class="section-tarjetas">
        <div id="div-tarjetas">
            <h1>QUÉ OFRECEMOS</h1>
            <div id="tarjetaCabaña" class="tarjeta"> 
                <div id="imgTarjetaCabaña" class="imgTarjeta" style="background: url('img/cabana/26.jpg'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
                    <h1>Cabañas</h1>
                    <!-- <h2>$5.500 / día</h2>
                    <h3>(mínimo dos días)</h3> -->
                </div>
                <div class="_2">
                    <div class="textoTarjeta">
                        <h1>Un lugar para disfrutar</h1>
                        <p>
                            El lugar perfecto para disfrutar de un buen momento y un hermoso lugar con tu familia o amigos.
                            Nuestras cabañas tienen capacidad hasta 4 personas (por cada persona de más se tendrá que abonar un pago adicional).
                        </p>
                    </div>
                    <div class="botonesTarjeta">
                        <a href="cabana.php" class="btn btnAzul">Ver más</a>
                        <a href="reservas.php?res=1" class="btn btnVerde">Reservar</a>
                    </div>
                </div>
            </div>
            <div id="tarjetaQuinta" class="tarjeta"> 
                <div id="imgTarjetaQuinta" class="imgTarjeta" style="background: url('img/quinta/12.jpg'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
                    <h1>Quintas</h1>
                    <!-- <h2>$8.000 / día</h2>
                    <h3>(mínimo dos días)</h3> -->
                </div>
                <div class="_2">
                    <div class="textoTarjeta">
                        <h1>Un lugar para disfrutar</h1>
                        <p>
                            Tus fines de semana sin saber que hacer se acabaron. Vení a nuestras quintas a disfrutar de tu tiempo libre con tu familia o amigos. Nuestras quintas tienen capacidad hasta 6 personas!
                            (por cada persona de más se tendrá que abonar un pago adicional).
                        </p>
                    </div>
                    <div class="botonesTarjeta">
                        <a href="quinta.php" class="btn btnAzul">Ver más</a>
                        <a href="reservas.php?res=2" class="btn btnVerde">Reservar</a>
                    </div>
                </div>
            </div>
            <div id="videos">
                <iframe src="https://www.youtube.com/embed/pEZ9q4ZIo_M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/pEZ9q4ZIo_M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- mapa y redes sociales -->
    <section class="section-ubicacion" style="background: url('img/fondo/fondoUbicacion4.jpg') no-repeat;background-size: cover;background-position: center bottom;">
        <div>
            <h1>Nuestra ubicación</h1>
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848.0332029792708!2d-60.82826750741512!3d-31.766863373991292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a459b0abd3d9%3A0x4090becdf0c69439!2sCaba%C3%B1as%20Postales%20De%20Sauce!5e0!3m2!1ses-419!2sar!4v1605647568740!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    <script src="js/portadaAnimada.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>