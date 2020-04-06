function init(){
    ListarParametro();
}

function ListarParametro() {
    $.ajax({
        type: 'POST',
        url: './../controllers/ParametroController.php?opcion=Listar_Parametros',
        success: function(r) {
            $('#TablaParametro').html(r);
        }
    });
}

function RegistrarParametro() {
    $.ajax({
        type: 'POST',
        url: './../controllers/ParametroController.php?opcion=Registrar_Parametro',
        data: $('#Registar_Parametro').serialize(),
        success: function(r) {
            if (r == 1) {
             //   console.log(r);
                $('#Registar_Parametro')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                        ListarParametro();
            } else if (r == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario no registrado',
                });
            }
        }
    });
}

function ObtenerIDParametro(id) {
    $.ajax({
        type: "POST",
        data: "ID=" + id,
        url: "./../controllers/ParametroController.php?opcion=ObtenerIDParametro",
        success: function(r) {
           // console.log(r);
            data = $.parseJSON(r);
            if (data.length > 0) {
                $('#ID').val(data[0]['ID']);
                $('#Nombre_ParametroU').val(data[0]['NOMBRE_PARAMETRO']);
                $('#Valor_OptimoU').val(data[0]['VALOR_OPTIMO']);
                $('#Valor_RiesgU').val(data[0]['VALOR_RIESGO']);
                $('#UnidadU').val(data[0]['UNIDAD']);  
            }
        }
    });
}

function Actualizar_Parametro(){
    $.ajax({
        type: 'POST',
        data: $('#Actualizar_P').serialize(),
        url: "./../controllers/ParametroController.php?opcion=Actualizar_Parametro",
        success: function (r) {
            if (r == 1) {
               // console.log(r);
                $('#Actualizar_P')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Registro Exitoso',
                        'success'
                        );
                        ListarParametro();
            } else if (r == 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario no registrado',
                });
            }
        }
    });
}