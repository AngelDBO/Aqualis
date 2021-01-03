
var table;
ObtenerID_Mision()

function ObtenerID_Mision() {
    $.ajax({
        type: "POST",
        url: "./../controllers/MedicionController.php?opcion=Select_Codigo",
        success: function (r) {
            console.log(r)
            if (r == 0) {
                Swal.fire({
                    title: 'Aviso',
                    text: "Debes crear una nueva misión para registrar mediciones",
                    icon: 'warning',
                    allowOutsideClick: false
                }).then(function (result) {
                    if (result.value) {
                        window.location = "mision";
                    }
                })
            } else {
                var data = JSON.parse(r);
                let estado = data[0]['ESTADO'];
                if (data.length > 0) {
                    $('#id_mision').val(data[0]['ID']);
                    $('#codigoM').val(data[0]['CODIGO_MISION']);
                    $('#v_estado').val(data[0]['ESTADO']);
                    $('#Tipo_Medicion').prop('disabled', true);
                    $('#btn-estado').prop('disabled', true);
                    $('#bt-registrar').prop('disabled', false);
                }
            }

        }
    });
}
