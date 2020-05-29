<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <script src="http://127.0.0.1/aquialis/assets/jquery-3.2.1.js"></script>
</head>
<body>
<div id="datos"></div>
<input type="button" id="btn" value="Iniciar" onclick="Iniciar()">
   
</body>
<script>
$( document ).ready(function() {
    console.log( "ready!" );
});
   function Iniciar() {         
    console.log('connecting')
    var ID = "1b003b000747363335343832";
    var Token = "1e007d8dbfd59c22e97ec62998bd1555265fe076";
    var eventSource = new EventSource("https://api.particle.io/v1/devices/" + ID + "/events/?access_token=" + Token);

    eventSource.addEventListener('open', (e) => {
        console.log("Abierto!"); },false)

    eventSource.addEventListener('error', (e) => {
        console.log("Error!"); },false)

    eventSource.addEventListener('Eventos', (e) => {
        let parsedData = JSON.parse(e.data)
        console.log('Datos recibidos', parsedData)
        datos.innerHTML = parsedData.data
    }, false)
    
   } 
    </script>  
</html>