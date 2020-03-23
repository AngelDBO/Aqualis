function init() {
    ListarPersonaNatural();
    ListarPersonaJuridica();
    ObtenerDatoNaturalID();
    ActualizarPersonaNatural();
}

function ListarPersonaNatural() {
    $.ajax({
        type: 'POST',
        url: './../controllers/PersonaController.php?opcion=Listar_Persona_Natural',
        success: function(r) {
            $('#TablaPersonaNatural').html(r);
        }
    });
}

function ListarPersonaJuridica() {
    $.ajax({
        type: 'POST',
        url: './../controllers/PersonaController.php?opcion=Listar_Persona_Juridica',
        success: function(r) {
            $('#TablaPersonaJuridica').html(r);
        }
    });
}

function RegistarPersonaNatural() {

    $.ajax({
        data: $('#FP_Natural').serialize(),
        type: "POST",
        url: './../controllers/PersonaController.php?opcion=Registrar_Persona_Natural',
        beforeSend: function() {},
        success: function(response) {
            console.log(response);
            if (response == 1) {
                console.log(response);
                $('#FP_Natural')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                LimpiarCamposFNatural();
            } else if (response == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario no registrado',
                });
            }
        }
    });
}

function RegistarPersonaJuridica() {

    $.ajax({
        data: $('#FP_Juridica').serialize(),
        type: "POST",
        url: './../controllers/PersonaController.php?opcion=Registrar_Persona_Juridica',
        beforeSend: function() {},
        success: function(response) {
            console.log(response);
            if (response == 1) {
                console.log(response);
                $('#FP_Juridica')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
            } else if (response == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Cliente no registrado',
                });
            }
        }
    });
}

function ActualizarPersonaNatural() {
    $.ajax({
        type: 'POST',
        data: $('#FP_Ac_Natural').serialize(),
        url: './../controllers/PersonaController.php?opcion=Actualizar_Persona_Natural',
        success: function(r) {
            if (r == 1) {
                console.log(r);
                Swal.fire(
                        'Exito!',
                        'Registro actualizado con exitoso',
                        'success'
                        );
                ListarPersonaNatural();
            } else if (r == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Errpr Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                });
            }
        }
    });



}

function ObtenerDatoNaturalID(id) {
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/PersonaController.php?opcion=ObtenerDatoNaturalID",
        success: function(r) {
            console.log(r);
            var data = $.parseJSON(r);
            if (data.length > 0) {
                $('#ID').val(data[0]['ID']);
                $('#TipoDocumentoU').val(data[0]['TIPO_DOCUMENTO']);
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


