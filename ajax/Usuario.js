function ValidarUsuario() {
        
    $.ajax({
        data:$('#fomr_1').serialize(),
        type:"POST",
        url:'controllers/UsuarioController.php?opcion=validar_usuario',
        beforeSend:function(){},
        success:function(response) {
            console.log(response);
            if(response == 1){
                Swal.fire(
                    'Exito!',
                    'Bienvenido al Sistema <h1 style="color: lightblue">Aquialis</h1>',
                    'success'
                  );
                  location.href = "views/inicio.php";
            }else if(response == 2){
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

function LimpiarCampos(){
    $('#Correo').val("");
    
    $('#Password').val("");
}