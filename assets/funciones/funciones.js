
function validarLogin() {
    $(document).ready(function() {
        $('#btn-guardar').click(function() {

            if ($('#Correo').val() == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes ingresar el correo',
                });
                return false;

            } else if ($('#Password').val() == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes ingresar la contraseña',
                });
                return false;
            }
        });
    });
}
