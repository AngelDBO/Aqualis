<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/plotly-latest.min.js"></script>
<script src="../assets/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../ajax/Misiones.js"></script>

    <script>
        init();
    </script>
<!--Grafica de entrada-->
<script>
var trace1 = {
  x: [0, 1, 2, 3, 4],
  y: [1, 5, 3, 7, 5],
  mode: 'lines+markers',
  type: 'scatter'
};

var trace2 = {
  x: [0, 2, 3, 4, 5],
  y: [4, 2, 4, 6, 8],
  mode: 'lines+markers',
  type: 'scatter'
};

var trace3 = {
  x: [0, 2, 3, 4, 5],
  y: [2, 4, 6, 9, 11],
  mode: 'lines+markers',
  type: 'scatter'
};

var data = [trace1, trace2, trace3];
var layout = {title: 'Gafica Misiones vs Meses'};

Plotly.newPlot('grafica1', data, layout, {editable: true});

</script>

<script>
var data = [
  {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [20, 14, 23],
    type: 'bar'
  }
];

Plotly.newPlot('myDiv', data);
</script>
