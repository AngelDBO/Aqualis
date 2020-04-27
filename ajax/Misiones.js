function init(){
    ListarMisiones();
}

function ListarMisiones() {
    $.ajax({
        type: 'POST',
        url: './../controllers/MisionesController.php?opcion=Listar_Misiones',
        success: function(r) {
            console.log(r);
            $('#Tabla_Misiones').html(r);
        }
    });
}
