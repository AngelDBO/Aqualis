function init(){
    Listar_Mantenimiento();
    Select_Sensor() ;
}

function Registar_Mantenimiento() {
    $.ajax({
        type: 'POST',
        data: $('#F_Mantenimiento').serialize(),
        url: './../controllers/MantenimientoController.php?opcion=Registrar_Mantenimiento',
        success: function(r) {
            if (r == 1) {
                console.log(r);
               
                $('#F_Mantenimiento')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Mantenimiento registrado exitosamente',
                        'success'
                        );
                        Listar_Mantenimiento();
            } else if (r == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Fallo al registrar',
                });
            }
        }
    });
}


function Select_Sensor() {
    $.ajax({
        url: './../controllers/MantenimientoController.php?opcion=Select_Sensor',
        type: 'GET',
        success: function(r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                 console.log(data);
                select = "<option> -- </option>";
                $.each(data, function(key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#Sensor_nombre').html(select);
                $('#Sensor_nombreU').html(select);
                
            }
        }
    });
}

function Listar_Mantenimiento(){
    $.ajax({
        type: 'POST',
        url: './../controllers/MantenimientoController.php?opcion=Listar_Mantenimiento',
        success: function(r){
            $('#Tabla_Mantenimiento').html(r);
        }
    });
}

function ObtenerIDMantenimiento(id){
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/MantenimientoController.php?opcion=Obtener_ID",
        success: function(r) {
            console.log(r);
            var data = JSON.parse(r);
            if (data.length > 0) {
                $('#IDu').val(data[0]['ID']);
                $('#Sensor_nombreU').val(data[0]['SENSOR_ID']);
                $('#Fecha_U').val(data[0]['FECHA_MANTENIMIENTO']);
                $('#TipoU').val(data[0]['TIPO_MANTENIMIENTO']);
                $('#DES').val(data[0]['DESCRIPCION']);
                
            }
        }
    });
}


function Actualizar_Mantenimiento(){
    $.ajax({
        url: './../controllers/MantenimientoController.php?opcion=Actualizar_Mantenimiento',
        type: 'POST',
        data: $('#Actualizar_Mantenimiento').serialize(),
        success: function(r) {
            if (r == 1) {
                console.log(r);
                $('#Actualizar_Mantenimiento')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                Listar_Mantenimiento();
            } else if (r == 2) {
                console.log(r);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sensor no registrado',
                });
            }
        }
    });
}
