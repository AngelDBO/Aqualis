function Registrar_Mision() {
    $.ajax({
        data: $('#F_mision').serialize(),
        type: "POST",
        url: './../controllers/MisionController.php?opcion=Registrar_Mision',
        success: function(response) {
            console.log(response);
            if (response == 1) {
                console.log(response);
                $('#F_mision')[0].reset();
                Swal.fire(
                        'Exito!',
                        'Será redirigido a vista mediciones en 5 seg',
                        'success'
                        );
                //location.href = 'mediciones.php';
                setTimeout("location.href = 'mediciones.php'", 2500);
            } else if (response == 2) {
                console.log(response);
                Swal.fire({
                    icon: 'warning',
                    title: '¡Advertencia!',
                    text: 'Campos obligatorios vacios'
                });
                setTimeout(function(){location.reload();}, 2000);

            }
        }
    });



}