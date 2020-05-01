
function initID(){
    ObtenerID_Mision()
}
function ObtenerID_Mision(){
    $.ajax({
        type: "POST",
        url: "./../controllers/MedicionController.php?opcion=Select_Codigo",
        success: function(r) {        
            var data = JSON.parse(r);
            if (data.length > 0) {
                $('#id_mision').val(data[0]['ID']);
                $('#codigoM').val(data[0]['CODIGO_MISION']);   
            }
        }
    });
}