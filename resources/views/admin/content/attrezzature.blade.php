<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">



        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">

            <h1 style="float:left">Attrezzature</h1>

            <a style="float:right;margin-bottom:20px;" class="btn btn-success" onclick="aggiungi()">Aggiungi Attrezzatura</a>

            <form method="post" onsubmit="return confirm('Vuoi Inviare la Mail ?')">
              <input type="submit" name="invia_mail" value="Invia Mail" style="float:right;margin-bottom:20px;margin-right:5px;" class="btn btn-primary">
            </form>

            <div class="clearfix"></div>

            <table class="table table-bordered table-hover" style="width:100%">
              <thead>

              <tr>
                <th>Codice</th>
                <th>Descrizione</th>
                <th style="width:100px">Ultima Rev.</th>
                <th>Scadenza Mesi</th>
                <th style="width:100px">Data</th>
                <th>Cantiere</th>
                <th style="width:150px;"></th>
              </tr>

              </thead>

              <tbody>

              <?php foreach($attrezzature as $att){ ?>

                <?php
                    $background = '';
                    if($att->ultima_revisione != '' && $att->scadenza_revisione >= $att->scadenza_mesi) {
                      $background = 'rgba(231, 76, 60,0.1)';
                      $differenza = $att->scadenza_revisione - $att->scadenza_mesi;
                      if($differenza >= 0 && $differenza <= 3){
                        $background = 'rgba(241, 196, 15,0.1)';
                      }
                    }
                    if($att->ultima_revisione == '' && $att->scadenza_mese >= $att->scadenza_mesi) {

                      $background = 'rgba(231, 76, 60,0.1)';

                      $differenza = $att->scadenza_mese - $att->scadenza_mesi;
                      if($differenza >= 0 && $differenza <= 3){
                        $background = 'rgba(241, 196, 15,0.1)';
                      }
                    }
                ?>

                <tr style="background: <?php echo $background ?>">
                  <td><?php echo $att->codice ?></td>
                  <td><?php echo $att->descrizione ?><br><?php echo $att->marca ?><br><?php echo $att->seriale ?></td>
                  <td><?php echo ($att->ultima_revisione != '')?date('d/m/Y',strtotime($att->ultima_revisione)):'' ?></td>
                  <td><?php echo $att->scadenza_mesi ?></td>
                  <td><?php echo ($att->data != '')?date('d/m/Y',strtotime($att->data)):'' ?></td>
                  <td><?php echo $att->cantiere ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-primary btn-sm" onclick="modifica(<?php echo $att->id ?>)" style="float:left;">Modifica</a>
                    <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questa attrezzatura ?')">
                      <input type="hidden" name="id" value="<?php echo $att->id ?>">
                      <button type="submit" name="elimina" class="btn btn-danger btn-sm" value="elimina" style="float:left;margin-left:5px;">Elimina</button>
                    </form>
                  </td>
                </tr>

              <?php } ?>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


<form method="post">
  <div class="modal fade" id="modal_aggiungi">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crea una Nuova Attrezzatura</h4>
        </div>
        <div class="modal-body row">


          <div class="col-md-12">
            <div class="form-group">
              <label>Codice <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="codice" placeholder="codice" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label>Descrizione <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="descrizione" placeholder="Descrizione" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Marca</label>
              <input type="text" class="form-control" name="marca" placeholder="Marca">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Seriale</label>
              <input type="text" class="form-control" name="seriale" placeholder="Seriale">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Data</label>
              <input type="text" class="form-control date-picker" name="data" placeholder="Data">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Ultima Revisione</label>
              <input type="text" class="form-control date-picker" name="ultima_revisione" placeholder="Ultima Revisione">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Scadenza Mesi</label>
              <input type="number" class="form-control" name="scadenza_mesi" placeholder="Scadenza Mesi">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Cantiere</label>
              <input type="text" class="form-control" name="cantiere" placeholder="Cantiere">
            </div>
          </div>


          <div class="clearfix"></div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
          <input type="submit" class="btn btn-primary pull-right" name="aggiungi" value="Aggiungi" style="margin-right:5px;">
        </div>
      </div>
    </div>
  </div>
</form>

<?php foreach($attrezzature as $att){ ?>
  <form method="post">
  <div class="modal fade" id="modal_modifica_<?php echo $att->id ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modifica Attrezzatura</h4>
        </div>
        <div class="modal-body row">


          <div class="col-md-12">
            <div class="form-group">
              <label>Codice <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="codice" value="<?php echo $att->codice ?>" placeholder="codice" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label>Descrizione <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="descrizione" value="<?php echo $att->descrizione ?>" placeholder="Descrizione" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Marca</label>
              <input type="text" class="form-control" name="marca" value="<?php echo $att->marca ?>" placeholder="Marca">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Seriale</label>
              <input type="text" class="form-control" name="seriale" value="<?php echo $att->seriale ?>" placeholder="Seriale">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Data</label>
              <input type="text" class="form-control date-picker" name="data" value="<?php echo ($att->data != '')?date('d/m/Y',strtotime($att->data)):'' ?>" placeholder="Data">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Ultima Revisione</label>
              <input type="text" class="form-control date-picker" name="ultima_revisione" value="<?php echo ($att->ultima_revisione != '')?date('d/m/Y',strtotime($att->ultima_revisione)):'' ?>"placeholder="Ultima Revisione">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Scadenza Mesi</label>
              <input type="number" class="form-control" name="scadenza_mesi" value="<?php echo $att->scadenza_mesi ?>" placeholder="Scadenza Mesi">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Cantiere</label>
              <input type="text" class="form-control" name="cantiere" value="<?php echo $att->cantiere ?>" placeholder="Cantiere">
            </div>
          </div>


          <div class="clearfix"></div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
          <input type="hidden" name="id" value="<?php echo $att->id ?>">
          <input type="submit" class="btn btn-primary pull-right" name="modifica" value="Modifica" style="margin-right:5px;">
        </div>
      </div>
    </div>
  </div>
</form>
<?php } ?>

<div id="ajax_loader"></div>


<script type="text/javascript">

  function aggiungi(){
    $('#modal_aggiungi').modal('show');
  }

  function modifica(id){
      $('#modal_modifica_'+id).modal('show');
  }


  document.title = "Lista Clienti"
</script>

