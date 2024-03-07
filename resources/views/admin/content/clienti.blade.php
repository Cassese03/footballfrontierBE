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

            <h1 style="float:left">Lista Clienti</h1>

            <a style="float:right;margin-bottom:20px;" class="btn btn-success" onclick="aggiungi()">Aggiungi Cliente</a>


            <table class="table table-bordered table-hover dataTable">
              <thead>

              <tr>
                <th style="width:20px;">ID</th>
                <th>Descrizione</th>
                <th>Posizione</th>
                <th>Recapiti</th>
                <th>Fatturazione</th>
                <th>Template</th>
                <th>Abilitato</th>

                <th style="width:250px;"></th>
              </tr>

              </thead>

              <tbody>

              <?php foreach($clienti as $c){ ?>

                <tr>
                  <td><?php echo $c->id ?></td>
                  <td><?php echo $c->descrizione ?></td>
                  <td><?php echo $c->indirizzo ?></td>
                  <td><?php echo $c->email ?></td>
                  <td><?php echo $c->sdi ?></td>
                  <td><?php if($c->template == 0) echo 'VTG'; if($c->template == 1) echo 'TOUAX'; if($c->template == 2) echo 'STANDARD';?></td>
                  <td><?php echo ($c->abilitato == 1)?'SI':'NO' ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-primary btn-sm" onclick="modifica(<?php echo $c->id ?>)" style="float:left;">Modifica</a>
                    <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo utente ?')">
                      <input type="hidden" name="id" value="<?php echo $c->id ?>">
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
          <h4 class="modal-title">Crea un Nuovo Cliente</h4>
        </div>
        <div class="modal-body row">

          <div class="col-md-12">
            <div class="form-group">
              <label>Descrizione <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="descrizione" placeholder="Descrizione" required>
            </div>
          </div>

          <h4 style="width:100%">Posizione</h4>


          <div class="col-md-12">
            <div class="form-group">
              <label>Indirizzo</label>
              <input type="text" class="form-control" name="indirizzo" placeholder="Indirizzo">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Comune</label>
              <input type="text" class="form-control" name="comune" placeholder="Comune">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Provincia</label>
              <input type="text" class="form-control" name="provincia" placeholder="Provincia">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Regione</label>
              <input type="text" class="form-control" name="regione" placeholder="Regione">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>CAP</label>
              <input type="text" class="form-control" name="cap" placeholder="CAP">
            </div>
          </div>


          <h4 style="width:100%">Recapiti</h4>

          <div class="col-md-12">
            <div class="form-group">
              <label>Nome Recapito</label>
              <input type="text" class="form-control" name="nome_recapito" placeholder="Nome Recapito">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
          </div>

          <h4 style="width:100%">Fatturazione</h4>

          <div class="col-md-6">
            <div class="form-group">
              <label>P.IVA</label>
              <input type="piva" class="form-control" name="piva" placeholder="P.Iva">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Codice Fiscale</label>
              <input type="text" class="form-control" name="cf" placeholder="CF">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>SDI</label>
              <input type="text" class="form-control" name="sdi" placeholder="SDI">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>PEC</label>
              <input type="email" class="form-control" name="pec" placeholder="PEC">
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group">
              <label>Abilitato</label>
              <select name="abilitato" class="form-control select2" style="width:100%" required>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
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

<div id="ajax_loader"></div>


<script type="text/javascript">

  function aggiungi(){
    $('#modal_aggiungi').modal('show');
  }

  function modifica(id){

    $.get( "/admin/ajax/modifica_cliente/"+id, function( data ) {
      $("#ajax_loader").html(data);
      $('#modal_modifica_'+id).modal('show');
    });


  }


  document.title = "Lista Clienti"
</script>

