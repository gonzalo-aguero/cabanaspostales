<?php
    require_once('connection.php');
    $startDate = new DateTime('01-11-2020');
    $endDate = new DateTime('01-11-2025');
    $endDate = $endDate->modify('+1 day');

    $intervalo = DateInterval::createFromDateString('1 day');
    $periodo = new DatePeriod($startDate, $intervalo, $endDate);
    foreach ($periodo as $dt) {
        echo "<br>".$dt->format("Y-m-d")."<br>";
        $sql = "INSERT INTO diasDisponible VALUES ('".$dt->format('Y-m-d')."',1,1,1)";
        mysqli_query($connection,$sql);
    }
?>