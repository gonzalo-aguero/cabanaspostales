<?php 
    require('../php/connection.php');
    $nameUs = $_POST['nameUs'];
    $passUs = $_POST['passUs'];
    $sql = "SELECT * FROM usuarios WHERE nameUs = '$nameUs'";
    $resultado = mysqli_query($connection,$sql);
    $numResultados = mysqli_num_rows($resultado);
    if($numResultados > 0){
        $resultado = mysqli_fetch_array($resultado);
        $idUs = $resultado[0];
        $nameUs2 = $resultado[1];
        $passUs2 = $resultado[2];
        if(md5($passUs) == $passUs2){
            $passUs = null;
            $passUs2 = null;
            session_start();
            $_SESSION['sesion'] = true;
            $_SESSION['idUs'] = $idUs;
            $_SESSION['nameUs'] = $nameUs2;
            echo 1;
        }else{
            echo 'errorPass';
        }
    }else{
        echo 'errorUs';
    }
?>