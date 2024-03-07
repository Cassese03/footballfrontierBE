
<form method="post">

  <div class="modal fade" id="modal_lista_movimenti_giacenza">
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
                    </tr>
                <?php } ?>


                <tr>
                    <td colspan="6"></td>
                    <td style="font-weight:bold;font-size:20px;"><?php echo number_format($totale,2,'.','') ?> </td>
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