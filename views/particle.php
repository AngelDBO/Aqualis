<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        .loader{
            position: absolute;
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 30px;
            height: 30px;
            margin: 0 0 0 125px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg);}
            100% { -webkit-transform: rotate(360deg);}
        }

        @keyframe spin {
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row"><div style="height: 100px;"></div></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="jumbotrom text-center">
                        <div>
                            <h1 id="ph" style="float:left; padding: 10px 0 0 20px;">00.00</h1>
                            <img src="https://ssl.gstatic.com/onebox/weather/64/partly_cloudy.png" alt="">
                        </div>
                        <h5>Temperature</h5>
                        <div class="loader" id="phLoader"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotrom text-center">
                        <div>
                            <h1 id="tds" style="float:left; padding: 10px 0 0 20px; ">00.00</h1>
                            <img src="https://ssl.gstatic.com/onebox/weather/64/rain.png" alt="">
                        </div>
                        <h5>Humidity</h5>
                        <div class="loader" id="tdsLoader"></div>                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotrom text-center">
                        <div>
                            <h1 id="turbidez" style="float:left; padding: 10px 0 0 20px; ">00.00</h1>
                            <img src="https://ssl.gstatic.com/onebox/weather/64/rain.png" alt="">
                        </div>
                        <h5>Farenheit</h5>
                        <div class="loader" id="turbidezLoader"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                     <button class="btn btn-danger"  onclick="getData('ph')">temperature</button>
                </div>
                <div class="col-md-4 text-center">
                     <button class="btn btn-danger"  onclick="getData('tds')">Humidity</button>
                </div>
                <div class="col-md-4 text-center">
                     <button class="btn btn-danger"  onclick="getData('turbidez')">farenheit</button>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        var access_token = '9123cb666006da51e97339195aa16b2224c43278';
        var device_id = '1b003b000747363335343832';
        $('#temperatureLoader ,#humidityLoader, #farenheitLoader').hide();
        function getData(variable){
            $('#'+variable+'Loader').show();
            $.ajax({
                url: 'https://api.particle.io/v1/devices/'+device_id+'/'+variable+'?access_token='+access_token,
                method: 'GET',
                success: function(response){
                    console.log(response);
                    $('#'+variable).html(response.result.toFixed(2));
                    $('#'+variable+'Loader').hide();
                }
            });
        }
        </script>
    </body>
</html>