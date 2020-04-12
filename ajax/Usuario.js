function init(){
    ListarUsuarios();
}


function ListarUsuarios(){
    $.ajax({
        type: 'POST',
        url: './../controllers/UsuarioController.php?opcion=Listar_Usuario',
        success: function (response) {
            $('#TablaUsuario').html(response);
        }
    });
}



function ValidarUsuario() {

    $.ajax({
        data: $('#fomr_1').serialize(),
        type: "POST",
        url: 'controllers/UsuarioController.php?opcion=validar_usuario',
        beforeSend: function() {},
        success: function(response) {
            //console.log(response);
            if (response == 1) {
                Swal.fire(
                        'Exito!',
                        'Bienvenido al Sistema <h1 style="color: lightblue">Aquialis</h1>',
                        'success'
                        );
                location.href = "views/inicio.php";
            } else if (response == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario no encontrado',
                });
                LimpiarCampos();
            }
        }
    });
}

function RegistrarUsuario(){
   $.ajax({
        type: 'POST',
        url: './../controllers/UsuarioController.php?opcion=Registrar_Usuario',
        data: $('#F_Usuario').serialize(),
        success: function(response){
            if (response == 1) {
                $('#F_Usuario')[0].reset();
                Swal.fire(
                    'Exito!',
                    'Usuario registrado exitosamente',
                    'success'
                    );
            } else if (response == 2){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario no encontrado',
                });
            }
        }
    }); 

  
}

function LimpiarCampos() {
    $('#Correo').val("");
    $('#Password').val("");
}