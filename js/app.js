"use strict"
animCargando();
function animCargando() {
    $('#div-imgCargando > img').css('display', 'block')
    var animCargando = setInterval(() => {
        $('#div-imgCargando > img').removeClass("animate__fadeIn").addClass("animate__fadeOut");
        setTimeout(() => {
            $('#div-imgCargando > img').removeClass("animate__fadeOut").addClass("animate__fadeIn");
        }, 2000);
    }, 4000);
}
function endAnimCargando() {
    clearInterval(animCargando);
    $('#div-imgCargando > img').removeClass("animate__fadeIn")
        .removeClass("animate__slow")
        .addClass("animate__fast")
        .addClass("animate__fadeOut");
    setTimeout(() => {
        $('#div-izq').addClass("animate__fadeOutLeftBig");
        $('#div-der').addClass("animate__fadeOutRightBig");
        $('body').css('overflow-y', 'auto');
        setTimeout(() => {
            $('#div-cargando').css('display', 'none');
        }, 1000);
    }, 500);
}
function ocultarCartel(fondo,cartel){
    $(fondo).removeClass('animate__fadeIn').addClass('animate__fadeOut')
    $(cartel).removeClass('animate__fadeInUpBig').addClass('animate__fadeOutDownBig')
    setTimeout(() => {
        $(fondo).css('display','none')
        $(cartel).css('display','none')
    }, 750);
}
function fileName(){
    // obtiene el nombre del archivo donde está la web
    var rutaAbsoluta = self.location.href;   
    var posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/");
    var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );
    return rutaRelativa;  
}
function verify_LS(key,comparateValue) {
    // Compara el valor dado por un valor de localStorage 
    let value = localStorage.getItem(key)
    if(value == comparateValue){
        return true;
    }else{
        return false;
    }
}
console.log('app.js file!')
$(document).ready(()=>{
    endAnimCargando();
    // Si es la página de inicio se muestra un cartel avisando que el sitio está en desarrollo
    if(fileName() == ''){
        // Se verifica que el cartel no se haya mostrado anteriormente
        if(verify_LS('cartelDesarrollo','1') == false){
            console.log('Es página de inicio')
            console.log('No se ha visitado, por lo tanto se muestra el cartel.')
            $('#div-W-aviso').css('display','flex')
            $('#W-aviso').css('display','flex')
            localStorage.setItem('cartelDesarrollo', '1')
        }else{
            console.log('Ya se ha visitado, por lo tanto no se muestra el cartel.')
        }
    }
    // Si la página que visita aún no está terminada se mostrará un cartel para volver
    let fn = fileName();
    if(fn == 'queofrecemos.php'){
        $('#div-W-aviso2').css('display','flex')
        $('#W-aviso2').css('display','flex')
    }
    // Se colocan los enlaces en los iconos de redes sociales
    $('.a-instagram').attr('href','https://www.instagram.com/postales_de_sauce')
    $('.a-facebook').attr('href','https://www.facebook.com/Postales-de-Sauce-102444028384395/')
    $('.a-mailto').attr('href','mailto:postalesdesauce@gmail.com')
    // Se agrega el icono de Whatsapp
    let WhatsApp1 = '<li><a class="a-whatsapp" href=""><img class="whatsapp" src="iconos2/whatsapp1.png" alt="WhatsApp" srcset=""></a></li>';
    let WhatsApp2 = '<li><a class="a-whatsapp" href=""><img class="whatsapp" src="iconos2/whatsapp2.png" alt="WhatsApp" srcset=""></a></li>';
    try{
        document.getElementById('socialListUbicacion').innerHTML += WhatsApp1
    }catch(error){
        console.log('#socialListUbicacion no encontrado.');
    }
    try{
        document.getElementById('socialListFooter').innerHTML += WhatsApp2
    }catch(error){
        console.log('#socialListFooter no encontrado.');
    }
    try{
        document.getElementById('socialListContacto').innerHTML += WhatsApp2
    }catch(error){
        console.log('#socialListContacto no encontrado.');
    }
    // Se le agrega el enlace a los iconos de Whatsapp
    $('.a-whatsapp').attr('href','https://api.whatsapp.com/send?phone=5493424342616&text=Hola,%20quisiera%20hacer%20una%20consulta.')
})