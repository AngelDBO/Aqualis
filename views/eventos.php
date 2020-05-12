<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://127.0.0.1/aquialis/assets/jquery-3.2.1.js"></script>
</head>
<body>

<div id="pplCount"></div>
<input type="button" id="btn" value="Iniciar" onclick="Iniciar()">

    
</body>


<script>

$( document ).ready(function() {
    console.log( "ready!" );
});

   function Iniciar() {
    $(document).ready(function(){
        $('#btn').click(function(){
            function connect() {
    console.log('connecting')
    var deviceID = "1b003b000747363335343832";
    var accessToken = "9123cb666006da51e97339195aa16b2224c43278";
    var eventSource = new EventSource("https://api.spark.io/v1/devices/" + deviceID + "/events/?access_token=" + accessToken);

    eventSource.addEventListener('open', (e) => {
        console.log("Opened!"); },false)

    eventSource.addEventListener('error', (e) => {
        console.log("Errored!"); },false)

              return eventSource
    
    eventSource.addEventListener('Result', (e) => {
        let parsedData = JSON.parse(e.data)
        console.log('Received data', parsedData)
        pplCount.innerHTML = parsedData.data
    }, false)
    }
        });
    });
   }

    
    </script>
    

</html>