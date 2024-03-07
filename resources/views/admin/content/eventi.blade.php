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
            <h3 class="card-title">Eventi</h3>

            <a class="btn btn-success" style="float:right;" onclick="aggiungi()">Crea Evento</a>
            <div class="clearfix"></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="clearfix" style="margin-bottom:10px"></div>

            <table class="table table-bordered datatable nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Descrizione</th>
                  <th>Tipologia</th>
                  <th>Status</th>
                  <th>Azioni</th>
                </tr>
              </thead>
              <tbody>
              <?php  foreach($eventi as $e){ ?>

                <?php
                      $status = 'Da Confermare';
                      if($e->status == 1) $status = 'Confermato';
                      if($e->status == 2) $status = 'Completato';
                ?>

                <tr>
                  <td><?php echo $e->id ?></td>
                  <td><?php echo $e->descrizione ?></td>
                  <td><?php echo $e->tipologia ?></td>
                  <td><?php echo $status ?></td>
                  <td>
                      <a class="btn btn-primary btn-sm" onclick="modifica(<?php echo $e->id ?>)" style="float:left;">Modifica</a>
                      <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo evento ?')">
                        <input type="hidden" name="id" value="<?php echo $e->id ?>">
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
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


<form method="post">
  <div class="modal fade" id="modal_aggiungi">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crea un Nuovo Evento</h4>
        </div>
        <div class="modal-body row">

          <div class="col-md-12">
            <div class="form-group">
              <label>Descrizione <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="descrizione" placeholder="Descrizione" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label>Tipologia <b style="color:red">*</b></label>
              <select name="tipologia" class="form-control select2" style="width:100%" required>
                <option value="Matrimonio">Matrimonio</option>
                <option value="Battesimo">Battesimo</option>
                <option value="Compleanno">Compleanno</option>
                <option value="Altro">Altro</option>

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

    $.get( "/admin/ajax/modifica_evento/"+id, function( data ) {
      $("#ajax_loader").html(data);
      $('#modal_modifica_'+id).modal('show');
    });


  }

  document.title = "Lista Eventi"
</script>