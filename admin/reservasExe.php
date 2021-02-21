<?php 
require('../php/connection.php');
$op = $_POST['op'];
if($op=='load'){
    load($_POST['res']);
}else if($op=='edit'){
    edit();
}else if($op=='delete'){
    delete_($_POST['res']);
}else{
    echo '<tr><td>No operation selected.</td></tr>';
}
function load($res){
    global $connection;
    $sql = "SELECT * FROM reservas WHERE reserva = '$res' ORDER BY `reservas`.`id` DESC";
    $resultado = mysqli_query($connection, $sql);
    $numResultados = mysqli_num_rows($resultado);
    if($numResultados < 1){
        echo '<tr><td>Aún no hay reservas.</td></tr>';
    }else{
        while($resultadoArray = mysqli_fetch_array($resultado)){
            $id = $resultadoArray[0];        
            $start = $resultadoArray[1];
            $end = $resultadoArray[2];
            $reserva = $resultadoArray[3];
            $nombre = $resultadoArray[4];
            $correo = $resultadoArray[5];
            $telefono = $resultadoArray[6];
            $comentarios = $resultadoArray[7];
            $cantAdultos = $resultadoArray[8];
            $cantNiños = $resultadoArray[9];
            if($res == 'Cabaña'){
                $_function = 'seleccionar(id)';
            }else if($res == 'Quinta'){
                $_function = 'seleccionar2(id)';
            }else{
                $_function = 'alert("Error con la función onClick")';
            }
            echo '<tr class="tr-'.$id.'"><td><input onclick="'.$_function.'" type="checkbox" id="'.$id.'">'.$id.'</td><td>Del '.$start.' al '.$end.'</td><td>'.$nombre.'</td><td><a href="mailto:'.$correo.'">'.$correo.'</a></td><td>'.$telefono.'</td><td>'.$cantAdultos.'</td><td>'.$cantNiños.'</td><td>'.$comentarios.'</td></tr>';
        }
    }
}
function edit(){
            $aEditar = $_POST['aEditar'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $adultos = $_POST['adultos'];
            $niños = $_POST['niños'];
            $comentarios = $_POST['comentarios'];
            global $connection;
            $sql = "UPDATE `reservas` SET `nombre` = '$nombre', `correo` = '$correo', `telefono` = '$telefono', `comentarios` = '$comentarios', `cantAdultos` = $adultos, cantNiños = $niños WHERE `reservas`.`id` = $aEditar";
            $resultado = mysqli_query($connection, $sql);
            if($resultado){
                echo 1;
            }else {
                echo "Error: ".mysqli_error($connection);;
            }
            
}
function delete_($res){
    global $connection;
    $cantidadSelect = $_POST['contadorSelect'];
    $select = $_POST['select'];
    $borrarContador = 0;
    if($res == 'Cabaña'){
        $diasOcupados = 'reservas_cabana';
    }else if($res == 'Quinta'){
        $diasOcupados = 'reservas_quinta';
    }
    for ($i=0; $i < $cantidadSelect; $i++) { 
        $aEliminar = $select[$i]; //elemento a eliminar
        // Se obtiene el periodo de la reserva a eliminar
        $sql2 = "SELECT `start`, `end` FROM `reservas` WHERE id = '$aEliminar'";
        $resultado = mysqli_query($connection, $sql2);
        $resultadoArray = mysqli_fetch_array($resultado);
        // Se eliminan los días marcados como "ocupados" dentro del periodo de la reserva
        $startDate = new DateTime($resultadoArray[0]);
        $endDate = new DateTime($resultadoArray[1]);
        $endDate = $endDate->modify('+1 day');
        $intervalo = DateInterval::createFromDateString('1 day');
        $periodo = new DatePeriod($startDate, $intervalo, $endDate);
        foreach ($periodo as $dt) {//diasOcupados
            $sql3 = "DELETE FROM `$diasOcupados` WHERE fecha = '".date_format($dt,'Y-m-d')."'";
            mysqli_query($connection,$sql3);
        }
        // Se elimina la reserva
        $sql = "DELETE FROM `reservas` WHERE id = '$aEliminar'";
        mysqli_query($connection, $sql);
        $borrarContador++;
    }
    mysqli_close($connection);
    if($borrarContador == $cantidadSelect){
        echo 1;
    }
}
?>