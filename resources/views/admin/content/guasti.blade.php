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

            <h1 style="float:left">Lista Guasti</h1>

            <a style="float:right;margin-bottom:20px;" class="btn btn-success" onclick="aggiungi()">Aggiungi Guasto</a>

            <div class="clearfix"></div>

            <table class="table table-bordered table-hover datatable" style="width:100%">
              <thead>

              <tr>
                <th style="width:20px;">ID</th>
                <th>Descrizione</th>
                <th style="width:100px;">Totale</th>
                <th style="width:380px;"></th>
              </tr>

              </thead>

              <tbody>

              <?php foreach($guasti as $g){ ?>

                <tr>
                  <td><?php echo $g->id ?></td>
                  <td><?php echo $g->descrizione ?></td>
                  <td>&euro; <?php echo number_format($g->totale,2,'.','') ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-primary btn-sm" onclick="modifica(<?php echo $g->id ?>)" style="float:left;">Modifica</a>
                    <a style="float:left;margin-left:5px;" onclick="aggiungi_riga(<?php echo $g->id ?>)"  class="btn btn-success btn-sm">+ RIGHE</a>
                    <a class="btn btn-primary btn-sm" onclick="modifica_righe(<?php echo $g->id ?>)" style="float:left;margin-left:5px;">X RIGHE</a>
                    <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo guasto ?')">
                      <input type="hidden" name="id" value="<?php echo $g->id ?>">
                      <button type="submit" name="elimina" class="btn btn-danger btn-sm" value="elimina" style="float:left;margin-left:5px;">Elimina</button>
                    </form>

                    <form method="post" onsubmit="return confirm('vuoi duplicare questo guasto ?')" style="float:left;margin-left:5px;">
                      <input type="hidden" name="id" value="<?php echo $g->id ?>">
                      <input type="submit" name="duplica" value="DUPLICA" class="btn btn-success btn-sm">
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
          <h4 class="modal-title">Crea un Guasto</h4>
        </div>
        <div class="modal-body row">

          <div class="col-md-12">
            <div class="form-group">
              <label>Descrizione <b style="color:red">*</b></label>
              <input type="text" class="form-control" name="descrizione" placeholder="Descrizione" required>
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

<?php foreach($guasti as $g){ ?>

<?php } ?>

<div id="ajax_loader"></div>


<script type="text/javascript">

  function aggiungi(){
    $('#modal_aggiungi').modal('show');
  }

  function modifica(id){

    $.get( "/admin/ajax/modifica_guasto/"+id, function( data ) {
      $("#ajax_loader").html(data);
      $('#modal_modifica_'+id).modal('show');
    });
  }

  function aggiungi_riga(id){


    $.get( "/admin/ajax/modifica_guasto/"+id, function( data ) {
      $("#ajax_loader").html(data);
      $('#modal_aggiungi_riga_'+id).modal('show');
    });

  }


  function modifica_righe(id){

    $.get( "/admin/ajax/modifica_guasto/"+id, function( data ) {
      $("#ajax_loader").html(data);
      $('#modal_modifica_righe_guasto_'+id).modal('show');
    });
  }


  document.title = "Lista Guasti"



  function cambia_totale(id){

    costo_orario = (parseFloat($('#minuti_'+id).val())/60);
    console.log(costo_orario);
    if(costo_orario != 0){
      $('#qta_' + id).val(0);
      pu = parseFloat($('#pu_'+id).val());
      costo_orario = (parseFloat($('#minuti_'+id).val())/60);
      pt = (pu*costo_orario)
      $('#pt_'+id).val(parseFloat(pt).toFixed(2));
    } else {
      $('#minuti_'+id).val(0);
      pu = parseFloat($('#pu_' + id).val()).toFixed(2);
      qta = $('#qta_' + id).val();
      pt = pu * qta
      $('#pt_' + id).val(parseFloat(pt).toFixed(2));
    }

  }


</script>

