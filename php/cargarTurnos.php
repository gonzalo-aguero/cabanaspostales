<?php 
require_once('connection.php');
$function = $_POST['function'];
$reserva = $_POST['reserva'];
if($reserva == 1){
    $reserva = 'reservas_cabana';
}else if($reserva == 2){
    $reserva = 'reservas_quinta';
}else{
    echo 'res_error';
}

if($function == 'diasReservados'){
    diasReservados($reserva);
}else if($function == 'diasDisponible'){
    diasDisponible();
}else if($function == 'cargarTurnos'){
    cargarTurnos();
}
function diasReservados($reserva){
    global $connection;
    $sql = "SELECT * FROM $reserva";
    $consulta = mysqli_query($connection,$sql);
    $numResultados = mysqli_num_rows($consulta);
    $x = 0;
    $dias = [];
    while ( $numResultados > $x ) {
        $resultado = mysqli_fetch_array($consulta);
        $dia = array(
            'fecha' =>  $resultado[0],
            'start' =>  $resultado[0],
            'title' => 'Reservado',
            'color' => '#DA2020',
            'groupId' => 'Ocupado'
        );
        $dias[$x] = $dia;
        $x++;
    }
    echo json_encode($dias);
}
function diasDisponible(){
    global $connection;
    $sql = "SELECT * FROM reservas_cabana";
    $consulta = mysqli_query($connection,$sql);
    $numResultados = mysqli_num_rows($consulta);
    $x = 0;
    $dias = [];
    while ( $numResultados > $x ) {
        $resultado = mysqli_fetch_array($consulta);
        $cab1 = $resultado[1];
        $cab2 = $resultado[2];
        $cab3 = $resultado[3];
        if($cab1 == 1 || $cab2 == 1 || $cab3 == 1){
            $titulo = 'Disponible';
            $color =  '#42c73d';
            $groupId = 'Disponible';
        }else{
            $titulo = 'Reservado';
            $color = '#DA2020';
            $groupId = 'Ocupado';
        }
        $dia = array(
            'fecha' =>  $resultado[0],
            'start' =>  $resultado[0],
            'cab1' => $resultado[1],
            'cab2' => $resultado[2],
            'cab3' => $resultado[3],
            'title' => $titulo,
            'color' => $color,
            'groupId' => $groupId
        );
        $dias[$x] = $dia;
        $x++;
    }
    echo json_encode($dias);
}
function cargarTurnos(){
    global $connection;
    $sql = "SELECT * FROM reservas_cabana";
    $consulta = mysqli_query($connection,$sql);
    $numResultados = mysqli_num_rows($consulta);
    $x = 0;
    $turnos = [];
    while ( $numResultados > $x ) {
        $resultado = mysqli_fetch_array($consulta);
        $turno = array(
            'id' => $resultado[0],
            'start' => $resultado[1],
            'end' => $resultado[2],
            'reserva' => $resultado[3],
            'title' => "".$resultado[3]." (Ocupado)",
            'color' => '#DA2020'
        );
        $turnos[$x] = $turno;
        $x++;
    }
    echo json_encode($turnos);
}
mysqli_close($connection);
?>