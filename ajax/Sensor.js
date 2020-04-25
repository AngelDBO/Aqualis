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
            // console.log(r);
            var data = JSON.parse(r);
            if (data.length > 0) {
                $('#IDssu').val(data[0]['ID']);
                $('#RangoU').val(data[0]['RANGO_MEDICION']);
                $('#Numero_DocumentoU').val(data[0]['NUMERO_DOCUMENTO']);
                $('#Primer_NombreU').val(data[0]['NOMBRE_1']);
                $('#Segundo_NombreU').val(data[0]['NOMBRE_2']);
                $('#Primer_ApellidoU').val(data[0]['APELLIDO_1']);
                $('#Segundo_ApellidoU').val(data[0]['APELLIDO_2']);
                $('#Telefono_1U').val(data[0]['TELEFONO_1']);
                $('#Telefono_2U').val(data[0]['TELEFONO_2']);
                $('#DireccionU').val(data[0]['DIRECCION']);
                $('#CorreoU').val(data[0]['CORREO']);
                $('#EstadoU').val(data[0]['ESTADO']);
            }
        }
    });

}

