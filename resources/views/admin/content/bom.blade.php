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
            <h3 class="card-title">Distinte Basi</h3>


            <a class="btn btn-success" onclick="importa_bom()" style="float:right;">Importa BOM</a>
            <div class="clearfix"></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable nowrap">
              <thead>
                <tr>
                  <th>Struttura</th>
                  <th>Codice Padre</th>
                  <th>Componente</th>
                  <th>Quantità</th>
                  <th>UM</th>
                  <th>Valore unitario</th>
                  <th>Valore</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($bom as $b){ ?>
                <tr>
                  <td><?php echo $b->struttura ?></td>
                  <td><?php echo $b->diba ?></td>
                  <td><?php echo $b->componente ?></td>
                  <td><?php echo $b->quantita_in_struttura ?></td>
                  <td><?php echo $b->um ?></td>
                  <td><?php echo $b->valore_unitario ?></td>
                  <td><?php echo $b->valore ?></td>
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

  <div class="modal fade" id="modal_importa_bom">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titolo_modal_mgmov">Importa Distinte Basi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Importa file</label>
                <input type="file" name="file" class="form-control">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
          <button id="importa_file" type="submit" name="importa_bom" value="Importa" class="btn btn-primary">Importa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>


<script type="text/javascript">

  function importa_bom(){

    $('#modal_importa_bom').modal('show');
  }

</script>
