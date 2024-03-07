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
            <h3 class="card-title">Magazzini</h3>

            <a class="btn btn-success" onclick="importa_magazzino()" style="float:right;">Importa Magazzino</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable" style="width:100%;">
              <thead>
              <tr>
                <th>Codice</th>
                <th>Descrizione</th>
                <th>Lotto</th>
                <th>Quantità</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach($magazzini as $m){ ?>
              <tr>
                <td><?php echo $m->codice_articolo ?></td>
                <td><?php echo $m->descrizione ?></td>
                <td><?php echo $m->lotto ?></td>
                <td><?php echo $m->quantita ?></td>
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

  <div class="modal fade" id="modal_importa_magazzini">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titolo_modal_mgmov">Importa Magazzini</h4>
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
          <button id="importa_file" type="submit" name="importa_magazzino" value="Importa" class="btn btn-primary">Importa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>


<script type="text/javascript">

  function importa_magazzino(){

    $('#modal_importa_magazzini').modal('show');
  }

</script>