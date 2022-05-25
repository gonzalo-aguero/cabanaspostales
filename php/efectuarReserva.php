<?php 
require_once('connection.php');
error_reporting(0);
// Se obtienen los datos.
$aReservar = $_POST['aReservar'];
$star = $_POST['star'];
$end = $_POST['end'];
$nombreCompleto = $_POST['nombre'].' '.$_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$cantAdultos = $_POST['cantAdultos'];
$cantNiños = $_POST['cantNiños'];
$comentarios = $_POST['comentarios'];
//elemento a reservar
$reserva = $_POST['reserva'];
if($reserva == 1){
    $reserva = 'reservas_cabana';
}else if($reserva == 2){
    $reserva = 'reservas_quinta';
}else{
    echo 'Ha ocurrido un error en el sistema de reservas. Por favor, comuníquese con el propietario del sitio.';
}
// Se marcan los días dentro del periodo como reservados
$startDate = new DateTime($star);
$endDate = new DateTime($end);
$endDate = $endDate->modify('+1 day');
$intervalo = DateInterval::createFromDateString('1 day');
$periodo = new DatePeriod($startDate, $intervalo, $endDate);
foreach ($periodo as $dt) {
    $sql = "INSERT INTO $reserva VALUES ('".$dt->format('Y-m-d')."')";
    mysqli_query($connection,$sql);
}
// Se registra la reserva
$sql = "INSERT INTO `reservas` VALUES (id, '$star', '$end', '$aReservar', '$nombreCompleto', '$correo', '$telefono', '$comentarios',$cantAdultos,$cantNiños)";
mysqli_query($connection,$sql);
// Se envia un correo con la informacion a la empresa
$asunto = "Se ha efectuado una nueva reserva";
$msg = 
    'Nombre: '.$nombreCompleto."\n"
    .'Correo: '.$correo."\n"
    .'Teléfono: '.$telefono."\n"
    .'Reserva: '.$aReservar."\n"
    .'Periodo: Del '.$star.' al '.$end."\n"
    .'Personas: '.$cantAdultos.' adultos y '.$cantNiños.' niños'."\n"
    .'Comentarios: '.$comentarios."\n"
    ."\n\n\n"
    .'Este es un mensaje enviado automáticamente, no responder.';
$emailReceptor = "gonzaloaguerodev@gmail.com";
$emailEmisor = "notificaciones@cabanaspostalesdesauce.com";
$emailCliente = $correo;
$header = "From: ".$emailEmisor. "\r\n";
$header .= "Reply-To: ".$emailEmisor. "\r\n";
$header .= "X-Mailer: PHP/". phpversion();
$mail = mail($emailReceptor,$asunto,$msg,$header);
// Se envia un correo de confirmacion al cliente
$asunto = "Postales de Sauce";
$msg = 
    'Hola '.$_POST['nombre'].'!'."\n"
    .'Tu reserva se ha efectuado correctamente.'."\n"
    .'Los datos de la reserva son los siguientes:'."\n"
    .'Nombre: '.$nombreCompleto."\n"
    .'Correo: '.$correo."\n"
    .'Teléfono: '.$telefono."\n"
    .'Reserva: '.$aReservar."\n"
    .'Periodo: Del '.$star.' al '.$end."\n"
    .'Personas: '.$cantAdultos.' adultos y '.$cantNiños.' niños'."\n"
    .'Comentarios: '.$comentarios."\n"
    ."\n"
    .'Si deseas cambiar alguno de estos datos o cancelar la reserva comunícate a nuestro correo: postalesdesauce@gmail.com'
    ."\n\n\n"
    .'Este es un mensaje enviado automáticamente, no responder.';
$emailReceptor = $emailCliente;
$emailEmisor = "notificaciones@cabanaspostalesdesauce.com";
$header = "From: ".$emailEmisor. "\r\n";
$header .= "Reply-To: ".$emailEmisor. "\r\n";
$header .= "X-Mailer: PHP/". phpversion();
$mail = mail($emailReceptor,$asunto,$msg,$header);
// Fin
echo 1;
mysqli_close($connection);
?>
