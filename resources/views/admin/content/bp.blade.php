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
            <h3 class="card-title">Clienti / Fornitori</h3>


            <a class="btn btn-success" onclick="importa_bp()" style="float:right;">Importa BP</a>
            <div class="clearfix"></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Codice</th>
                  <th>Nome</th>
                  <th>Azioni</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($bp as $a){ ?>
                <tr>
                  <td><?php echo $a->codice ?></td>
                  <td><?php echo $a->nome ?></td>
                  <td><a class="btn btn-success" target="_blank" href="<?php echo URL::asset('/admin/cliente/'.$a->id ) ?>">Dettagli</a></td>
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

  <div class="modal fade" id="modal_importa_bp">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titolo_modal_mgmov">Importa BP</h4>
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
          <button id="importa_file" type="submit" name="importa_bp" value="Importa" class="btn btn-primary">Importa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>


<script type="text/javascript">

  function importa_bp(){

    $('#modal_importa_bp').modal('show');
  }

</script>
