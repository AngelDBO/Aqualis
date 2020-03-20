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

function LimpiarCamposFNatural() {
    $('#Tipo_Documento').val("");
    $('#Numero_Documento').val("");
    $('#Primer_Nombre').val("");
    $('#Segundo_Nombre').val("");
    $('#Primer_Apellido').val("");
    $('#Segundo_Apellido').val("");
    $('#Direccion').val("");
    $('#Telefono_1').val("");
    $('#Telefono_2').val("");
    $('#Correo').val("");

}
$('#N').val("");

