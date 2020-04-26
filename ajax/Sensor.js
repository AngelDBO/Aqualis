function init() {
    Select_Parametro();
    Listar_Sensor();
}

function Listar_Sensor() {
    $.ajax({
        url: './../controllers/SensorController.php?opcion=Listar_Sensores',
        type: 'POST',
        success: function(r) {
            $('#tabla_sensor').html(r);
        }
    });
}

function Select_Parametro() {
    $.ajax({
        url: './../controllers/SensorController.php?opcion=Select_Parametro',
        type: 'GET',
        beforeSend: function() {},
        success: function(r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                //    console.log(data);
                select = "<option> -- </option>";
                $.each(data, function(key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#Parametro_perteneciente').html(select);
                $('#Parametro').html(select);
            }
        }
    });
}

function Registrar_Sensor() {
    $.ajax({
        url: './../controllers/SensorController.php?opcion=Registrar_Sensor',
        type: 'POST',
        data: $('#F_Sensor').serialize(),
        success: function(r) {
            if (r == 1) {
                // console.log(r);
                $('#F_Sensor')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                Listar_Sensor();
            } else if (r == 2) {
                // console.log(r);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sensor no registrado',
                });
            }
        }
    });
}

function ObtenerIDSensor(id) {
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/SensorController.php?opcion=Obtener_ID",
        success: function(r) {
            console.log(r);
            var data = JSON.parse(r);
            if (data.length > 0) {
                $('#IDu').val(data[0]['ID']);
                $('#Nombre_s_U').val(data[0]['NOMBRE_SENSOR']);
                $('#RangoU').val(data[0]['RANGO_MEDICION']);
                $('#Parametro').val(data[0]['PARAMETRO_ID']);
                $('#PrecisionU').val(data[0]['PRECISION_MEDICION']);
                $('#EstadoU').val(data[0]['ESTADO_SENSOR']);
            }
        }
    });
}

function Actualizar_Sensor() {
    $.ajax({
        url: './../controllers/SensorController.php?opcion=Actualizar_Sensor',
        type: 'POST',
        data: $('#Actualizar_Sensor').serialize(),
        success: function(r) {
            if (r == 1) {
                // console.log(r);
                $('#Actualizar_Sensor')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                Listar_Sensor();
            } else if (r == 2) {
                // console.log(r);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sensor no registrado',
                });
            }
        }
    });
}

