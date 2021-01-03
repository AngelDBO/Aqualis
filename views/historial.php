<?php include './content/head.php'; ?>
<body class="open">
  <?php include './content/sidebar.php'; ?>
  <div id="right-panel" class="right-panel">
    <header id="header" class="header">
      <div class="top-right">
        <div class="header-menu">
          <div class="top-right">
            <div class="header-menu">
              <?php require_once './content/menu.php' ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="row m-0">
          <div class="col-sm-4">
            <div class="page-header float-left">
              <div class="page-title">
                <!--<h1 class="text-monospace font-weight-bold">Historial de misiones</h1>-->
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="javascript:void(0)" onclick="location.href = 'mision'"><span class="badge badge-pill badge-primary" style="background: #808080">Registrar mision</span></a></li>
                  <li><a href="javascript:void(0)" onclick="location.href = 'mediciones'"><span class="badge badge-pill badge-danger" style="background: #808080">Registrar mediciones</span></a></li>
                  <li><a href="javascript:void(0)" onclick="location.href = 'historial'"><span class="badge badge-pill badge-success" style="background: #808080">Historial de mediciones</span></a></li>
                  <li><a href="javascript:void(0)" onclick="location.href = 'lectura'"><span class="badge badge-pill badge-info" style="background: #808080">Lectura sensor</span></a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content ">
      <div class="animated fadeIn">
        <div class="row">                
          <div class="col-xs-6 col-sm-6 col-lg-12">                
            <div class="card ">                                                    
              <div class="card-header text-white" style="background-color: #43c6e2;" >
                <div class="page-title">
                  <h4 class="text-monospace font-weight-bold">Historial de misiones</h4>
                </div>
              </div>
              <div class="card-body">
                <table id="example" class="table table-hover table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Lugar</th>
                      <th>Coordenadas</th>
                      <th>Tipo medición</th>
                      <th>Fecha inicio</th>
                      <th>Estado</th>
                      <th>Usuario</th>
                      <th>Timestamp</th>                                         
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
  <script src="../assets/sweetalert.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
  <script src="../assets/jquery-3.2.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


  <script type="text/javascript">

    function gps(objButton){
      let test = objButton.name;
      let  Arr = test.split('.');
      alert(Arr);
    }

    function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
    '<tr>'+
    '<td>Full name:</td>'+
    '<td>'+d.Nombre+'</td>'+
    '</tr>'+
    '</table>';
  }

  $('#example tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );

    if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
          }
          else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
          }
        } );

  livedata()
  function livedata(){
   var table = $('#example').dataTable({
    "bProcessing": true,
    "serverSide": false,
    "bFilter": true,
    "ajax": "./../controllers/MisionController.php?opcion=Listar_Misiones",
    "bPaginate": true,
    "sPaginationType":"full_numbers",
    "columnDefs": [
    {"className": "dt-center", "targets": "_all"}
    ],
    "iDisplayLength": 10,
    "language": {
      "lengthMenu": "Mostrar _MENU_ registros por pagina",
      "zeroRecords": "No encontrado - lo siento",
      "info": "Mostrando pagina _PAGE_ de _PAGES_",
      "infoEmpty": "No hay datos disponibles",
      "infoFiltered": "(filtered from _MAX_ total records)"
    },
    "aoColumns": [
    { mData: 'NOMBRE_MISION' },
    { mData: 'LUGAR_MISION' },
    { mData: 'COORDENADAS' },
    { mData: 'TIPO_MEDICION' },
    { mData: 'FECHA_INICIO' },
    { mData: 'ESTADO' },
    { mData: 'NOMBRE' },
    { mData: 'TIMESTAMP' }
    ]
  });
 }
</script>
</body>
</html>
