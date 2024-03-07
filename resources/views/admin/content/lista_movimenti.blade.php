<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"></div>
      <div class="col-sm-6">
      </div>
    </div>
  </div>
</section>



<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista Movimenti <br>Filtro Per: <small><?php echo $sezione ?></small></h3>

            <a class="btn btn-success" onclick="importa_movimenti()" style="float:right;">Importa Movimenti</a>
            <div class="clearfix"></div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable" style="width:100%;">
              <thead>
              <tr>
                <th style="width: 10px">Id</th>
                <th style="width: 10px">DataOra</th>
                <th>Articolo</th>
                <th>Magazzino</th>
                <th>Operatore</th>
                <th>Posizione</th>
                <th>Piano</th>
                <th>Lotto</th>
                <th>Quantità</th>
                <th>Ret</th>
                <th>Car</th>
                <th>Sca</th>
              </tr>
              </thead>
              <tbody>
                <?php $totale = 0; ?>
                <?php foreach($movimenti as $lm){ $totale += $lm->quantita; ?>
                    <tr>

                      <td><?php echo $lm->id ?></td>
                      <td><?php echo $lm->timeins ?></td>
                      <td><?php echo $lm->articolo ?></td>
                      <td><?php echo $lm->magazzino ?></td>
                      <td><?php echo $lm->operatore ?></td>
                      <td><?php echo $lm->posizione ?></td>
                      <td><?php echo $lm->piano ?></td>
                      <td><?php echo $lm->lotto ?></td>
                      <td><?php echo $lm->quantita ?></td>
                      <td><?php echo $lm->ret ?></td>
                      <td><?php echo $lm->car ?></td>
                      <td><?php echo $lm->sca ?></td>
                    </tr>
                <?php } ?>

                <?php if($id_articolo != 0 || $id_magazzino != 0){ ?>
                    <tr>
                      <td colspan="8"></td>
                      <td style="font-weight:bold;font-size:20px;"><?php echo number_format($totale,2,'.','') ?> </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>




<form method="post" enctype="multipart/form-data">

  <div class="modal fade" id="modal_movimenti">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titolo_modal_mgmov">Importa Movimenti Di Magazzino</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Importa file</label>
                <input type="file" name="file" class="form-control">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
          <button id="importa_file" type="submit" name="importa_file" value="Importa" class="btn btn-primary">Importa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>


<script type="text/javascript">

  function importa_movimenti(){
    $('#modal_movimenti').modal('show');
  }

  document.title = '<?php echo $sezione ?>';
</script>