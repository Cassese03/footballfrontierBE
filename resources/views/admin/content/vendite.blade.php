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
            <h2 class="card-title" style="font-size: 2rem;"><?php echo $descrizione ?></h2>


            <form method="post" onsubmit="return confirm('Vuoi Ripulire le vendite ?');">
              <input type="submit" name="ripulisci_vendite" value="Ripulisci Le Vendite" class="btn btn-success" style="float:right;">
            </form>
            <a class="btn btn-success" onclick="importa_vendite()" style="float:right;margin-right:5px;">Importa Vendite</a>
            <div class="clearfix"></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Data Doc.</th>
                  <th>Codice BP</th>
                  <th>Codice Articolo</th>
                  <th>Quantità</th>
                  <th>Totale</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($vendite as $v){ ?>
                <tr>
                  <td><?php echo date('d/m/Y',strtotime($v->data_documento)).' - '.$v->numero_documento ?></td>
                  <td><?php echo $v->codice_bp ?></td>
                  <td><?php echo $v->codice_articolo ?></td>
                  <td><?php echo $v->quantita ?></td>
                  <td>&euro; <?php echo $v->imponibile_in_euro ?></td>
                  <td>
                    <a class="btn btn-success" target="_blank" href="<?php echo URL::asset('/admin/articolo/'.$v->id_articolo ) ?>">Articolo</a>
                    <a class="btn btn-success" target="_blank" href="<?php echo URL::asset('/admin/cliente/'.$v->id_cliente ) ?>">Cliente</a>
                  </td>

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

  <div class="modal fade" id="modal_importa_vendite">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="titolo_modal_mgmov">Importa Vendite</h4>
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
          <button id="importa_file" type="submit" name="importa_vendite" value="Importa" class="btn btn-primary">Importa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>


<script type="text/javascript">

  function importa_vendite(){

    $('#modal_importa_vendite').modal('show');
  }

</script>
