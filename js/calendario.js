var turnos = '';
var _diasReservados = '';
$(document).ready(()=>{
    console.log('Comienza programa');
    diasReservados(reserva)
})
$('#btnCerrarForm').click(()=>{
    $('body').css('overflow','auto')
    $('.div-form').removeClass('animate__fadeIn').addClass('animate__fadeOut');
    $('.form').removeClass('animate__fadeInUpBig').addClass('animate__fadeOutDownBig')
    setTimeout(() => {
        $('.div-form').css('display','none')
        $('.form').css('display','none')
    }, 1000);
})
// Botón reservar
$('#btnEnviar').click(()=>{
    var respuestaValidacion = validate_Res();
    if ( respuestaValidacion == true ){
        console.log('Validación exitosa :)')
        efectuarReserva(reserva);
    }else{
        console.log('Validación reprobada :(')
        alert(respuestaValidacion);
    }
    return false;
})
function efectuarReserva(reserva){
    $('#btnEnviar').css('display','none')
    $('#cargandoGif').css('display','inline-block')
    let aReservar = $('#reservaInput').val();
    let star = $('#startInput').val();
    let end = $('#endInput').val();
    let nombre = $('#nombreInput').val();
    let apellido = $('#apellidoInput').val();
    let correo = $('#correoInput').val();
    let telefono = $('#telefonoInput').val();
    let cantAdultos = $('#cantAdultosInput').val();
    let cantNiños = $('#cantNiñosInput').val();
    let comentarios = $('#comentariosInput').val();
    $.ajax({
        url: 'php/efectuarReserva.php',
        type: 'POST',
        data: { 
            aReservar: aReservar,
            star: star,
            end: end,
            nombre: nombre,
            apellido: apellido,
            correo: correo,
            telefono: telefono,
            cantAdultos: cantAdultos,
            cantNiños: cantNiños,
            comentarios: comentarios,
            reserva: reserva
        },
        success: (response)=>{
            if(response == 1){
                alert('¡Su reserva ha sido efectuada correctamente!\nNos contactaremos contigo lo antes posible.')
                $('.div-form').removeClass('animate__fadeIn').addClass('animate__fadeOut');
                $('.form').removeClass('animate__fadeInUpBig').addClass('animate__fadeOutDownBig')
                setTimeout(() => {
                    $('.div-form').css('display','none')
                    $('.form').css('display','none')
                }, 1000);
                $('#reservaInput').val('');
                $('#startInput').val('');
                $('#endInput').val('');
                $('#nombreInput').val('');
                $('#apellidoInput').val('');
                $('#correoInput').val('');
                $('#telefonoInput').val('');
                $('#cantAdultosInput').val('');
                $('#cantNiñosInput').val('');
                $('#comentariosInput').val('');
                if(reserva==1){
                    window.location.href="reservas.php?res=1"
                }else if(reserva==2){
                    window.location.href="reservas.php?res=2"
                }
            }else{
                alert('Error:\n'+response)
            }
            $('#cargandoGif').css('display','none')
            $('#btnEnviar').css('display','inline-block')
        }
    })
}
function diasReservados(reserva){
    $.ajax({
        url: 'php/cargarTurnos.php',
        type: 'POST',
        dataType: "json",
        data: { function: 'diasReservados', reserva: reserva},
        success: (response)=>{
            if(response == 'res_error'){
                alert('Ha ocurrido un error en el sistema de reservas. Por favor, comuníquese con el propietario del sitio.')
            }
            _diasReservados = response;
            createTable();
        }
    })
}
function createTable() {
    var calendar = document.getElementById('calendar');
    var date = new Date();
    var yyyy = date.getFullYear().toString()
    var mm = (date.getMonth()+1).toString().length == 1 ? '0'+(date.getMonth()+1).toString() : (date.getMonth()+1).toString()
    var dd = (date.getDate()).toString().length == 1 ? '0'+(date.getDate()).toString() : (date.getDate()).toString()
    var dmt = yyyy+'-'+mm+'-'+dd;
    console.log('Hoy es: '+dmt)
    var calendar = new FullCalendar.Calendar(calendar, {
        initialView: 'dayGridMonth',
        initialDate: dmt,
        locale: 'es',
        selectable: true,
        unselectAuto: true,
        selectOverlap: false,
        unselectCancel: '.form',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth'//,timeGridWeek,timeGridDay', ---> opciones de vista (mes,semana,dia)
        },
        select: (selectionInfo )=>{
            let start = selectionInfo.startStr; // Inicio del periodo seleccionado
            let end = selectionInfo.endStr; // Fin del periodo seleccionado
            /*
             * Las siguientes sentencias son para arreglar un "problema" relacionado con la hora, la cuál
             * al tratarse de periodos de día completo es por defecto 00:00:00, causando que se sume un día
             * a la fecha de finalización del periodo seleccionado.
             */
            end = new Date(end);
            console.log('Fin del periodo (fecha sin formatear): '+end);
            let yyyy = end.getFullYear().toString()
            let mm = (end.getMonth()+1).toString().length == 1 ? '0'+(end.getMonth()+1).toString() : (end.getMonth()+1).toString()
            let dd = (end.getDate()).toString().length == 1 ? '0'+(end.getDate()).toString() : (end.getDate()).toString()
            let dmt = yyyy+'-'+mm+'-'+dd;
            end = dmt;
            console.log('Fin del periodo (fecha formateada): '+end);
            console.log('--------------------------------------------------');
            console.log('Periodo seleccionado:\nInicio: '+start+'\nFin: '+end);
            console.log('--------------------------------------------------');
            // Se colocan las fechas en inputs y se abre el formulario para efectuar la reserva.
            $('#startInput').val(start)
            $('#endInput').val(end)
            if(reserva == 1){
                $('#reservaInput').val('Cabaña')
            }else if(reserva == 2){
                $('#reservaInput').val('Quinta')
            }else{
                $('#reservaInput').val('No definido')
            }
            $('.div-form').removeClass('animate__fadeOut').addClass('animate__fadeIn');
            $('.form').removeClass('animate__fadeOutDownBig').addClass('animate__fadeInUpBig')
            $('body').css('overflow','hidden')
            $('.div-form').css('display','flex')
            $('.form').css('display','block')
        },
        events: _diasReservados
        //     {
        //         groupId: '1',
        //         title: 'Modelo de evento',
        //         start: '2020-10-01',
        //         end: '2020-10-04',
        //         color: '#0ea10w',
        //         url: 'https://google.com/'
        //     },
    });
    calendar.render();      
}
function validate_Res(){
    let star = $('#startInput').val();
    let end = $('#endInput').val();
    let nombre = $('#nombreInput').val();
    let apellido = $('#apellidoInput').val();
    let correo = $('#correoInput').val();
    let telefono = $('#telefonoInput').val();
    let cantAdultos = $('#cantAdultosInput').val();
    let cantNiños = $('#cantNiñosInput').val();

    var fechaInicio = new Date(star);
    var fechaFin = new Date(end);
    let diasTotales = 0;
    // se obtienen la cantidad de días a reservar
    while(fechaFin.getTime() >= fechaInicio.getTime()){
        fechaInicio.setDate(fechaInicio.getDate() + 1);
        console.log(fechaInicio.getFullYear() + '/' + (fechaInicio.getMonth() + 1) + '/' + fechaInicio.getDate());
        diasTotales++;
    }
    // condiciones de validación
    let v1 = nombre.length >= 1
    let v2 = apellido.length >= 1
    let v3 = correo.length >= 1
    let v4 = telefono.length >= 1
    let v5 = cantAdultos.length >= 1
    let v6 = cantNiños.length >= 1
    let v7 = cantAdultos > 0
    let v8 = cantNiños > -1
    let v9 = diasTotales > 1
    if( v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8 && v9){
        return true
    }else{
        if(!v7){
            return 'La cantidad de adultos no puede ser menor a uno.'
        }else if(!v8){
            return 'La cantidad de niños no puede ser menor a cero.'
        }else if(!v9){
            return 'La reserva tiene que ser como mínimo por dos días.'
        }else{
            return 'Todos los campos excepto el de comentarios son obligatorios.'
        }
    }
}