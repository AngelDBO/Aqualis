
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/plotly-latest.min.js"></script>

<script src="../../assets/jquery-3.2.1.js" type="text/javascript"></script>
<!--Grafica de entrada-->
<script>
    var trace1 = {
        x: [1, 2, 3, 4, 5, 4, 7, 3],
        y: [10, 15, 16, 17, 18, 20, 25, 36],
        type: 'scatter'
    };

    var trace2 = {
        x: [1, 2, 3, 4, 5, 6, 7, 8],
        y: [16, 5, 11, 9],
        type: 'scatter'
    };

    var data = [trace1, trace2];

    Plotly.newPlot('grafica1', data);

</script>
