
<form method="post">

  <div class="modal fade" id="modal_lista_movimenti_rettifica">
    <div class="modal-dialog modal-lg" style="min-width: 90%;">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Giacenze Articolo <?php $articolo->codice.' '.$articolo->descrizione ?></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table table-bordered datatable" style="width:100%;">
                    <thead>
                    <tr>
                      <th>Articolo</th>
                      <th>Magazzino</th>
                      <th>Operatore</th>
                      <th>Posizione</th>
                      <th>Piano</th>
                      <th>Lotto</th>
                      <th>Qta</th>
                      <th>Qta Rilevata</th>
                      <th>Diff.</th>
                    </tr>
                </thead>
            <tbody>
                <?php $totale = 0; ?>
                <?php foreach($movimenti as $lm){ $totale += $lm->quantita; ?>
                    <tr>
                      <td><?php echo $lm->articolo ?></td>
                      <td><?php echo $lm->magazzino ?></td>
                      <td><?php echo $lm->operatore ?></td>
                      <td><?php echo $lm->posizione ?></td>
                      <td><?php echo $lm->piano ?></td>
                      <td><?php echo $lm->lotto ?></td>
                      <td><?php echo $lm->quantita ?></td>
                      <td><input class="form-control" type="text" id="quantita_rilevata_<?php echo $lm->id ?>" value="<?php echo $lm->quantita ?>" onkeyup="rettifica_quantita(<?php echo $lm->id ?>,<?php echo $lm->quantita ?>)"></td>
                      <td>
                          <form method="post">
                            <input class="form-control" type="hidden" name="id" value="<?php echo $lm->id ?>"  >
                            <input style="float:left;width:100px;" type="text" id="quantita_differenza_<?php echo $lm->id ?>" name="quantita" value="0" readonly required class="form-control">
                            <input disabled id="bottone_rettifica_<?php echo $lm->id ?>" type="submit" class="btn btn-success btn-sm" style="float:left;margin-left:5px;" name="rettifica" value="Rettifica">
                          </form>
                      </td>
                    </tr>
                <?php } ?>


                <tr>
                    <td colspan="7"></td>
                    <td style="font-weight:bold;font-size:20px;"><?php echo number_format($totale,2,'.','') ?> </td>
                    <td></td>
                </tr>

            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</form>

<script type="text/javascript">

    function rettifica_quantita(id,quantita){

        quantita_rilevata = $('#quantita_rilevata_'+id).val();
        differenza = parseInt(quantita_rilevata) - parseInt(quantita);

        $('#quantita_differenza_'+id).val(differenza);

        if(differenza != 0){
            $('#bottone_rettifica_'+id).removeAttr('disabled');
        } else {
            $('#bottone_rettifica_'+id).attr('disabled',true);
        }

    }
</script>