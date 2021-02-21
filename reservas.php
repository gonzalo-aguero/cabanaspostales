<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <title>Reservas</title>
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
    <link rel="stylesheet" href="css/paginas/reservas.css">
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
    <section class="section-reservar">
        <div id="div-W-seleccionarRes" class="div-pantallaCompleta">
            <div id="W-seleccionarRes" class="animate__animated animate__fadeInUpBig">
                <h1>¿Qué desea reservar?</h1>
                <div>
                    <a href="reservas.php?res=1">Cabaña</a>
                    <a href="reservas.php?res=2">Quinta</a>
                </div>
            </div>
        </div>
        <?php error_reporting(0); echo '<script>var reserva = '.$_GET['res'].';</script>'; ?> 
        <script>
            /* 
             * Se obtiene el valor del parámetro de url "res" el cual indica 
             * que elemento se va a reservar.
             * Si es indefinido o el valor no es válido se muestra un cartel preguntando
             * al usuario que elemento desea reservar. 
             */
            if(typeof reserva === 'undefined'){
                // Valor indefinido
                $('#div-W-seleccionarRes').css('display','flex');
            }else{
                if(reserva != 1 && reserva != 2){
                    //El valor no es válido
                    $('#div-W-seleccionarRes').css('display','flex');
                }else{
                    if( reserva == 1){
                        // Se hará una reserva para la cabaña.
                        reserva = 1;
                    }else if( reserva == 2 ){
                        // Se hará una reserva para la quinta.
                        reserva = 2;
                    }
                }
            }
        </script>
        <h1 class="title1">
            <?php 
                if($_GET['res'] == 1){
                    echo 'Reservar cabaña';
                }else if($_GET['res'] == 2){
                    echo 'Reservar quinta';
                }else{
                    echo '';
                }
            ?>
        </h1>
        <h2 id="instruccionCalendario">Mantenga presionado y arrastre para seleccionar los días a reservar.</h2>
        <div id="contenedor-Calendario">
            <div id="calendar">
                <div id="div-cargandoGif2">
                    <img id="cargandoGif2" src="gif/cargandoGif.gif" alt="Cargando...">
                </div>
                <!-- calendario generado con fullcalendar/lib/main.js -->
            </div>
        </div>
        <div class="div-form animate__animated animate__fadeIn">
        <form action="" method="POST" class="form animate__animated animate__fadeInUpBig">
            <span id="btnCerrarForm" class="btnCerrar">x</span>
            <input type="text" name="reservaInput" id="reservaInput" disabled>
            <input type="text" name="startInput" id="startInput" placeholder="Inicio" disabled>
            <input type="text" name="endInput" id="endInput" placeholder="Fin" disabled>
            <input type="text" name="nombreInput" id="nombreInput" placeholder="Nombre">
            <input type="text" name="apellidoInput" id="apellidoInput" placeholder="Apellido">
            <input type="email" name="correoInput" id="correoInput" placeholder="Correo electrónico">
            <input type="tel" name="telefonoInput" id="telefonoInput" placeholder="Teléfono">
            <input type="number" name="cantAdultosInput" id="cantAdultosInput" placeholder="Cantidad de adultos">
            <input type="number" name="cantNiñosInput" id="cantNiñosInput" placeholder="Cantidad de niños">
            <textarea name="comentariosInput" id="comentariosInput" placeholder="Comentarios"></textarea>
            <div><input type="submit" id="btnEnviar" value="Reservar"></div>
            <img id="cargandoGif" src="gif/cargandoGif.gif" alt="Cargando...">
        </form>
    </div>
    </section>
    <section class="section-ubicacion" style="background: url('img/fondo/fondoUbicacion4.jpg') no-repeat;background-size: cover;background-position: center bottom;">
        <div>
            <h1>Nuestra ubicación</h1>
            <script>
                if(reserva == 1){
                    document.write('<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.1422394689366!2d-60.82953601750379!3d-31.76660621530991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a459b0abd3d9%3A0x4090becdf0c69439!2sCaba%C3%B1as%20Postales%20De%20Sauce!5e0!3m2!1ses-419!2sar!4v1606175100429!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>')
                }else if(reserva == 2){
                    document.write('<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.124766856997!2d-60.829691585583966!3d-31.767082820479356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDQ2JzAxLjUiUyA2MMKwNDknMzkuMCJX!5e0!3m2!1ses-419!2sar!4v1606174545881!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>')
                }
            </script>
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
    <script src='fullcalendar/lib/main.js'></script>
    <script src="fullcalendar/lib/locales/es.js"></script>
    <script src="js/calendario.js"></script>
    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>    