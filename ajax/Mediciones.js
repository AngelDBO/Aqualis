
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

function start(objButton) {
    
    var deviceID = "1b003b000747363335343832";
    var accessToken = "5f5e356ca8ae6ab1adb69ff21dba9ff03191067d";
    var varpH = "phval";
    var varTurbidez = "turbidezval";
    var varTDS = "tdsval";
    var varTemperatua = "tempc";
    
    requestURL = "https://api.spark.io/v1/devices/" + deviceID + "/" + varTemperatua + "/?access_token=" + accessToken;
    $.getJSON(requestURL, function(json) {
        var valortemp = json.result;
        // console.log("Temperatua: " +valortemp.toFixed(2));
        $('#Temperatua').val(valortemp.toFixed(2));
    });
    
    requestURL = "https://api.spark.io/v1/devices/" + deviceID + "/" + varpH + "/?access_token=" + accessToken;
    $.getJSON(requestURL, function(json) {
        var valorpH = json.result;
        // console.log("ph: " +valorpH.toFixed(2));
        $('#ph').val(valorpH.toFixed(2));
        
    });
    
    requestURL = "https://api.spark.io/v1/devices/" + deviceID + "/" + varTurbidez + "/?access_token=" + accessToken;
    $.getJSON(requestURL, function(json) {
        var valorntu = json.result;
        //console.log("turbidez: " +valorntu.toFixed(2));
        $('#turbidez').val(valorntu.toFixed(2));
    });
    
    requestURL = "https://api.spark.io/v1/devices/" + deviceID + "/" + varTDS + "/?access_token=" + accessToken;
    $.getJSON(requestURL, function(json) {
        var valortds = json.result;
        //console.log("tds: " +valortds.toFixed(2));
        $('#tds').val(valortds.toFixed(2));
    });
    
    let temp = $('#Temperatua').val();
    let ph = $('#ph').val();
    let tds = $('#tds').val();
    let turbidity = $('#turbidez').val();
    console.log(temp);
    console.log(ph);
    console.log(tds);
    console.log(turbidity);
    limpiar();
    
    
}

function limpiar(){
    $('#Temperatua').val("");
    $('#ph').val("");
    $('#tds').val("");
    $('#turbidez').val("");
}