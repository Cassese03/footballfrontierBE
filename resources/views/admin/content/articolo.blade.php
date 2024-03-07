<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0"><?php echo $articolo->codice ?> (<?php echo $articolo->descrizione ?>)</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Fatturato Per Mese</h3>
            </div>
          </div>
          <div class="card-body">
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="visitors-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Anno 2021
                  </span>

            </div>
          </div>
        </div>
        <!-- /.card -->


        <div class="card">
          <h3 style="padding:10px;">Vendite</h3>
          <div class="card-body table-responsive">
            <table class="table table-striped table-valign-middle datatable" style="width:100%">
              <thead>
              <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Quantita</th>
                <th>Prezzo</th>
                <th>Azioni</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($vendite as $v){ ?>
              <tr>
                <td><?php echo $v->nome_bp ?></td>
                <td><?php echo $v->data_documento ?></td>
                <td><?php echo $v->quantita.' x '.$v->um ?></td>
                <td>&euro;<?php echo $v->prezzo_in_euro ?></td>
                <td><a class="btn btn-success" target="_blank" href="<?php echo URL::asset('/admin/cliente/'.$v->id_cliente ) ?>">Dettagli</a></td>
              </tr>
              <?php } ?>

              </tbody>
            </table>
          </div>
        </div>

        <div class="card">
          <h3 style="padding:10px;">Storico</h3>
          <div class="card-body table-responsive">
            <table class="table table-striped table-valign-middle datatable" style="width:100%">
              <thead>
              <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Quantita</th>
                <th>Prezzo</th>
                <th>Azioni</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($storico as $s){ ?>
              <tr>
                <td><?php echo $s->nome_bp ?></td>
                <td><?php echo $s->data_documento ?></td>
                <td><?php echo $s->quantita.' x '.$s->um ?></td>
                <td>&euro;<?php echo $s->prezzo_in_euro ?></td>
                <td><a class="btn btn-success" target="_blank" href="<?php echo URL::asset('/admin/cliente/'.$s->id_cliente ) ?>">Dettagli</a></td>
              </tr>
              <?php } ?>

              </tbody>
            </table>
          </div>
        </div>

        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>

<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>

<script type="text/javascript">

  /* global Chart:false */

  $(function () {
    'use strict'

    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    var $salesChart = $('#sales-chart')
    // eslint-disable-next-line no-unused-vars
    var salesChart = new Chart($salesChart, {
      type: 'bar',
      data: {
        labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
        datasets: [
          {
            backgroundColor: '#007bff',
            borderColor: '#007bff',
            data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
          },
          {
            backgroundColor: '#ced4da',
            borderColor: '#ced4da',
            data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,

              // Include a dollar sign in the ticks
              callback: function (value) {
                if (value >= 1000) {
                  value /= 1000
                  value += 'k'
                }

                return '$' + value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })

    var $visitorsChart = $('#visitors-chart')
    // eslint-disable-next-line no-unused-vars
    var visitorsChart = new Chart($visitorsChart, {
      data: {
        labels: [<?php foreach($statistiche as $s) echo $s->mese.',' ?>],
        datasets: [{
          type: 'line',
          data: [<?php foreach($statistiche as $s) echo $s->totale.',' ?>],
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          pointBorderColor: '#007bff',
          pointBackgroundColor: '#007bff',
          fill: false
          // pointHoverBackgroundColor: '#007bff',
          // pointHoverBorderColor    : '#007bff'
        }]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
              suggestedMax: 200
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
  })

  // lgtm [js/unused-local-variable]


  document.title="<?php echo $articolo->descrizione ?>"

</script>