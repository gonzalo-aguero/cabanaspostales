<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMA CP</title>
    <link class="icono" rel="icon" type="image/png" href="../img/logoGrandePNG.png" />
    <meta name="author" content="GMA Desarrollo web" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php 
        session_start();
        $sesion_S = $_SESSION['sesion'];
        $idUs_S = $_SESSION['idUs'];
        $nameUs_S = $_SESSION['nameUs'];
        if( $sesion_S != true ){
            header('Location: login.php');
        }
    ?>
    
    <header>
        <h1>GMA CP</h1>
        <a href="sesionClose.php" id="cerrarSesion">Cerrar sesión</a>
    </header>
    <h1 id="tittle">¡Hola <?php echo $nameUs_S;?>!</h1>
    <h2 id="subtitle">Desde aquí podrás gestionar todas tus reservas.</h2>
    <h3 id="aviso">Por cualquier consulta enviar correo a <a href="mailto:soporte@gmadesarrolloweb.ml">soporte@gmadesarrolloweb.ml</a></h3>
    <div class="cabeceraTabla">
        <h2>Reservas cabaña</h2>
        <div class="botones">
            <div onclick="load('Cabaña','#table-reseñasCabaña')" class="btn btnActualizar">Actualizar</div>
            <div onclick="edit('Cabaña')" class="btn btnEditar">Editar</div>
            <div onclick="delete_('Cabaña')" class="btn btnEliminar">Eliminar</div>
        </div>
    </div>
    <table id="table-reseñasCabaña"></table>
    <div class="cabeceraTabla">
        <h2>Reservas quinta</h2>
        <div class="botones">
            <div onclick="load('Quinta','#table-reseñasQuinta')" class="btn btnActualizar">Actualizar</div>
            <div onclick="edit('Quinta')" class="btn btnEditar">Editar</div>
            <div onclick="delete_('Quinta')" class="btn btnEliminar">Eliminar</div>
        </div>
    </div>
    <table id="table-reseñasQuinta"></table>
    <div id="formEdit">
        <div>
            <div class="cabecera">Editar<span id="btnCloseFormEdit" onclick="closeFormEdit()">Cancelar</span></div>
            <form action="" method="post">
                <input type="text" name="nombreInput" id="nombreInput" placeholder="Nombre completo">
                <input type="email" name="emailInput" id="emailInput" placeholder="Correo electrónico">
                <input type="text" name="telefonoInput" id="telefonoInput" placeholder="Teléfono o celular">
                <input type="number" name="cantAdultosInput" id="cantAdultosInput" placeholder="Cantidad de adultos">
                <input type="number" name="cantNiñosInput" id="cantNiñosInput" placeholder="Cantidad de niños">
                <textarea name="comentariosInput" id="comentariosInput" placeholder="Comentarios"></textarea>
                <div onclick="editExe()" class="btn btnEditar">Aplicar</div>
            </form>
        </div>
    </div>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="selectorTablas.js"></script>
    <script>
        $(document).ready(()=>{
            load('Cabaña','#table-reseñasCabaña');
            load('Quinta','#table-reseñasQuinta');
            var registroAEditar = {}
        })
        function load(res,printIdent){
            $.ajax({
            url: 'reservasExe.php',
            type: 'POST',
            data: { op: 'load', res: res},
            success: (response)=>{
                    $(printIdent).html('<tr><th>id</th><th>Periodo</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Cant. Adultos</th><th>Cant. Niños</th><th>Comentarios</th></tr>'+response)
                    if(res == 'Cabaña'){
                        select = [];
                        listaSelect = "";
                    }else if(res == 'Quinta'){
                        select2 = [];
                        listaSelect2 = "";
                    }
                }
            })
        }
        function edit(res){
            if(res == 'Cabaña'){
                if(select.length < 1){
                    alert("No se ha seleccionado ningún ítem.");
                }else{
                    if (select.length == 1) {
                        // Se obtienen los valores dentro de la fila seleccionada y se guardan en objeto
                        registroAEditar = {
                            id: select[0],
                            reserva: 'Cabaña',
                            nombre: $('#table-reseñasCabaña .tr-'+select[0]+' > td').eq(2).html(),
                            correo: $('#table-reseñasCabaña .tr-'+select[0]+' > td > a').html(),
                            telefono: $('#table-reseñasCabaña .tr-'+select[0]+' > td').eq(4).html(),
                            adultos: $('#table-reseñasCabaña .tr-'+select[0]+' > td').eq(5).html(),
                            niños: $('#table-reseñasCabaña .tr-'+select[0]+' > td').eq(6).html(),
                            comentarios: $('#table-reseñasCabaña .tr-'+select[0]+' > td').eq(7).html(),
                        }
                        // Se muestra el formulario
                        $('#formEdit').css('display','flex')
                        // Se imprimen los datos en el formulario
                        document.getElementById('nombreInput').value = registroAEditar.nombre;
                        document.getElementById('emailInput').value = registroAEditar.correo;
                        document.getElementById('telefonoInput').value = registroAEditar.telefono;
                        document.getElementById('cantAdultosInput').value = registroAEditar.adultos;
                        document.getElementById('cantNiñosInput').value = registroAEditar.niños;
                        document.getElementById('comentariosInput').value = registroAEditar.comentarios;
                    }else{
                        alert('Solo puedes editar un registro a la vez.')
                    }
                }
            }else if(res == 'Quinta'){
                if(select2.length < 1){
                    alert("No se ha seleccionado ningún ítem.");
                }else{
                    if (select2.length == 1) {
                        // Se obtienen los valores dentro de la fila seleccionada y se guardan en objeto
                        registroAEditar = {
                            id: select2[0],
                            reserva: 'Quinta',
                            nombre: $('#table-reseñasQuinta .tr-'+select2[0]+' > td').eq(2).html(),
                            correo: $('#table-reseñasQuinta .tr-'+select2[0]+' > td > a').html(),
                            telefono: $('#table-reseñasQuinta .tr-'+select2[0]+' > td').eq(4).html(),
                            adultos: $('#table-reseñasQuinta .tr-'+select2[0]+' > td').eq(5).html(),
                            niños: $('#table-reseñasQuinta .tr-'+select2[0]+' > td').eq(6).html(),
                            comentarios: $('#table-reseñasQuinta .tr-'+select2[0]+' > td').eq(7).html(),
                        }
                        // Se muestra el formulario
                        $('#formEdit').css('display','flex')
                        // Se imprimen los datos en el formulario
                        document.getElementById('nombreInput').value = registroAEditar.nombre;
                        document.getElementById('emailInput').value = registroAEditar.correo;
                        document.getElementById('telefonoInput').value = registroAEditar.telefono;
                        document.getElementById('cantAdultosInput').value = registroAEditar.adultos;
                        document.getElementById('cantNiñosInput').value = registroAEditar.niños;
                        document.getElementById('comentariosInput').value = registroAEditar.comentarios;
                    }else{
                        alert('Solo puedes editar un registro a la vez.')
                    }
                }
            }
        }
        function closeFormEdit(){
            $('#formEdit').css('display','none')
        }
        function editExe(){
            if(confirm("Se afectará el registro seleccionado.\n¿Estás seguro?")){
                registroAEditar = {
                            id: registroAEditar.id,
                            reserva: registroAEditar.reserva,
                            nombre: $('#nombreInput').val(),
                            correo: $('#emailInput').val(),
                            telefono: $('#telefonoInput').val(),
                            adultos: $('#cantAdultosInput').val(),
                            niños: $('#cantNiñosInput').val(),
                            comentarios: $('#comentariosInput').val(),
                        }
                $.ajax({
                    type: "POST",
                    url: "reservasExe.php",
                    data: { 
                        op: 'edit',
                        aEditar: registroAEditar.id,
                        nombre: registroAEditar.nombre,
                        correo: registroAEditar.correo,
                        telefono: registroAEditar.telefono,
                        adultos: registroAEditar.adultos,
                        niños: registroAEditar.niños,
                        comentarios: registroAEditar.comentarios
                      },
                    success: function (response){
                        if(response == 1){
                            alert("¡Registro editado correctamente!");
                            if(registroAEditar.reserva == 'Cabaña'){
                                load('Cabaña','#table-reseñasCabaña');
                                select = [];
                                listaSelect = "";
                            }else if(registroAEditar.reserva == 'Quinta'){
                                load('Quinta','#table-reseñasQuinta');
                                select2 = [];
                                listaSelect2 = "";
                            }else{
                                load('Cabaña','#table-reseñasCabaña');
                                load('Quinta','#table-reseñasQuinta');
                                select = [];
                                listaSelect = "";
                                select2 = [];
                                listaSelect2 = "";
                            }
                            closeFormEdit()
                        }else {
                            alert("Error al intentar editar\n"+response);
                        }
                    }
                });    
            }
        }
        function delete_(res){
            if(res == 'Cabaña'){
                if(select.length < 1){
                    alert("No se ha seleccionado ningún ítem.");
                }else{
                    if(confirm("Se eliminarán los siguientes ítems:\n"+listaSelect+"\n(Reservas de cabaña)\n¿Estás seguro?")){
                        $.ajax({
                            type: "POST",
                            url: "reservasExe.php",
                            data: { op: 'delete', res: res, contadorSelect: select.length, select: select },
                            success: function (response){
                                if(response == 1){
                                    alert("Se eliminaron "+(select.length)+" ítems.");
                                    load('Cabaña','#table-reseñasCabaña');
                                    load('Quinta','#table-reseñasQuinta');
                                    select = [];
                                    listaSelect = "";
                                }else {
                                    alert("Error al intentar eliminar\n"+response);
                                }
                            }
                        });    
                    }
                }
            }else if(res == 'Quinta'){
                if(select2.length < 1){
                    alert("No se ha seleccionado ningún ítem.");
                }else{
                    if(confirm("Se eliminarán los siguientes ítems:\n"+listaSelect2+"\n(Reservas de quinta)\n¿Estás seguro?")){
                        $.ajax({
                            type: "POST",
                            url: "reservasExe.php",
                            data: { op: 'delete', res: res,contadorSelect: select2.length, select: select2 },
                            success: function (response){
                                if(response == 1){
                                    alert("Se eliminaron "+(select2.length)+" ítems.");
                                    load('Cabaña','#table-reseñasCabaña');
                                    load('Quinta','#table-reseñasQuinta');
                                    select2 = [];
                                    listaSelect2 = "";
                                }else {
                                    alert("Error al intentar eliminar\n"+response);
                                }
                            }
                        });    
                    }
                }
            }
        }
    </script>
</body>
</html>