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

            <h1 style="float:left"><?php echo ($tipologia == 2)?'Host':'Clienti' ?></h1>

            <a style="float:right;margin-bottom:20px;" class="btn btn-success" onclick="aggiungi()">Crea Utente</a>


            <table class="table table-bordered table-hover dataTable">
              <thead>

              <tr>
                <th style="width:20px;">ID</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Ragione Sociale</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Abilitato</th>

                <th style="width:250px;"></th>
              </tr>

              </thead>

              <tbody>

              <?php foreach($utenti as $u){ ?>

              <tr>
                <td><?php echo $u->id ?></td>
                <td><?php echo $u->nome ?></td>
                <td><?php echo $u->cognome ?></td>
                <td><?php echo $u->ragione_sociale ?></td>
                <td><?php echo $u->email ?></td>
                <td><?php echo $u->telefono ?></td>
                <td><?php echo ($u->abilitato == 1)?'SI':'NO' ?></td>
                <td style="text-align: center;">
                  <a class="btn btn-primary btn-sm" onclick="modifica(<?php echo $u->id ?>)" style="float:left;">Modifica</a>
                  <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo utente ?')">
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <button type="submit" name="elimina" class="btn btn-danger btn-sm" value="elimina" style="float:left;margin-left:5px;">Elimina</button>
                  </form>
                  <form method="post" onsubmit="return confirm('Vuoi Inviare i dati di accesso ?')">
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <button type="submit" name="invia_accesso" class="btn-sm btn btn-<?php echo ($u->accesso_inviato == 0)?'warning':'primary' ?>" value="invia_accesso" style="float:left;margin-left:5px;">Invia Accesso</button>
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
          <h4 class="modal-title">Crea un Nuovo Utente</h4>
        </div>
        <div class="modal-body row">

          <div class="col-md-6">
            <div class="form-group">
              <label>Nome <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Cognome <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="cognome" placeholder="Cognome" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Ragione Sociale</label>
              <input type="text" class="form-control" name="ragione_sociale" placeholder="Ragione Sociale">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Telefono" >
            </div>
          </div>

          <h4 style="width:100%">Credenziali di Accesso</h4>

          <div class="col-md-6">
            <div class="form-group">
              <label>Email <b style="color:red">*</b></label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
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

<?php foreach($utenti as $u){ ?>
<form method="post">
  <div class="modal fade" id="modal_modifica_<?php echo $u->id ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Modifica Utente <?php echo $u->cognome.' '.$u->nome ?></h4>
        </div>
        <div class="modal-body row">

          <div class="col-md-6">
            <div class="form-group">
              <label>Nome <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="nome" value="<?php echo $u->nome ?>" placeholder="Nome" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Cognome <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="cognome" value="<?php echo $u->cognome ?>" placeholder="Cognome" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Ragione Sociale <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="ragione_sociale" value="<?php echo $u->ragione_sociale ?>" placeholder="Ragione Sociale" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono</label>
              <input type="text" class="form-control" name="telefono" value="<?php echo $u->telefono ?>" placeholder="Telefono" >
            </div>
          </div>


          <h4 style="width:100%;">Credenziali di Accesso</h4>


          <div class="col-md-6">
            <div class="form-group">
              <label>Email <b style="color:red">*</b></label>
              <input type="email" class="form-control" name="email" value="<?php echo $u->email ?>" placeholder="Email" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Abilitato</label>
              <select name="abilitato" class="form-control select2" style="width:100%" required>
                <option value="1" <?php echo ($u->abilitato == 1)?'selected':'' ?>>SI</option>
                <option value="0" <?php echo ($u->abilitato == 0)?'selected':'' ?>>NO</option>
              </select>
            </div>
          </div>



          <div class="clearfix"></div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
          <input type="hidden" name="id" value="<?php echo $u->id ?>">
          <input type="submit" class="btn btn-primary pull-right" name="modifica" value="Modifica" style="margin-right:5px;">
        </div>
      </div>
    </div>
  </div>
</form>
<?php } ?>


<script type="text/javascript">

  function aggiungi(){
    $('#modal_aggiungi').modal('show');
  }

  function modifica(id){
    $('#modal_modifica_'+id).modal('show');
  }


  document.title = "Lista <?php echo ($tipologia == 2)?'Host':'Clienti' ?>"
</script>

