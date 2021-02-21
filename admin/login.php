<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link class="icono" rel="icon" type="image/png" href="../img/logoGrandePNG.png" />
    <meta name="author" content="GMA desarrollo web" />
</head>
<body>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        h1{
            text-align: center;
        }
        form{
            display:flex;
            flex-flow: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
        form input[type="text"],
        form input[type="password"]{
            padding: 10px;
            margin: 15px;
        }
        form input[type="submit"]{
            padding: 10px;
        }
    </style>
    <?php 
        error_reporting(0);
        session_start();
        $sesion_S = $_SESSION['sesion'];
        if( $sesion_S == true ){
            header('Location: index.php');
        }
    ?>
    <div>
        <h1>Ingresar</h1>
        <form action="" method="post">
            <input type="text" name="nameUs" id="nameUs" placeholder="Nombre de usuario">
            <input type="password" name="passUs" id="passUs" placeholder="Contraseña">
            <input type="submit" value="Ingresar">
        </form>
    </div>
    <script src="../js/jquery-3.5.1.js"></script>
    <script>
        $('input[type="submit"]').click(()=>{
            $.ajax({
            url: 'verifyLogin.php',
            type: 'POST',
            data: { 
                nameUs: $('#nameUs').val(),
                passUs: $('#passUs').val() 
            },
            success: (response)=>{
                    if(response == 1){
                        window.location.href='./'
                    }else if(response == 'errorUs'){
                        $('#nameUs').val('')
                        $('#passUs').val('')
                        alert('Usuario no registrado.')
                    }else if(response == 'errorPass'){
                        $('#passUs').val('')
                        alert('Contraseña incorrecta.')
                    }
                }
            })
            return false;
        })
    </script>
</body>
</html>