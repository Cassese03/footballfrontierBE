<?php foreach($guasti as $g){ ?>

    <form method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal_aggiungi_riga_<?php echo $g->id ?>">
        <div class="modal-dialog modal-lg" style="max-width:90%">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Aggiungi Righe Guasto <?php echo $g->id ?></h4>
                </div>
                <div class="modal-body row">

                    <div class="clearfix" style="margin-bottom:20px;"></div>

                    <?php for($i = 0;$i<10;$i++){ ?>


                    <div class="col-md-1">
                        <div class="form-group">
                            <?php if($i == 0){ ?><label>Servizio</label> <?php } ?>
                            <input type="text" class="form-control" id="servizio_<?php echo $i ?>" name="servizio[<?php echo $i ?>]" placeholder="Servizio" onkeyup="cambia_totale(<?php echo $i ?>)">
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php if($i == 0){ ?><label>Cod. Art.</label> <?php } ?>
                            <input type="text" min="0" class="form-control" id="codice_<?php echo $i ?>" name="codice[<?php echo $i ?>]" placeholder="Codice Articolo" onkeyup="cambia_totale(<?php echo $i ?>)">
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php if($i == 0){ ?><label>Setup Task</label> <?php } ?>
                            <select class="form-control select2" id="setup_tank_<?php echo $i ?>" name="setup_tank[<?php echo $i ?>]">
                                <option value="0">NO</option>
                                <option value="1">SI</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?php if($i == 0){ ?><label>Descrizione</label> <?php } ?>
                            <input type="text" min="0" class="form-control" id="descrizione_<?php echo $i ?>" name="descrizione[<?php echo $i ?>]" placeholder="Descrizione">
                        </div>
                    </div>


                    <div class="col-sm-1">
                        <?php if($i == 0){ ?><label>Attività<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="1" name="attivita[<?php echo $i ?>]" class="form-control" id="attivita_<?php echo $i ?>" placeholder="Attivita" value="1" required>
                    </div>

                    <div class="col-sm-1">
                        <?php if($i == 0){ ?><label>Qta<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="0.01" name="qta[<?php echo $i ?>]" class="form-control" id="qta_<?php echo $i ?>" placeholder="qta" value="1" required onkeyup="$('#minuti_<?php echo $i ?>').val(0);cambia_totale(<?php echo $i ?>)">
                    </div>


                    <div class="col-sm-1">
                        <?php if($i == 0){ ?><label>Minuti<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="0.001" name="minuti[<?php echo $i ?>]" class="form-control" id="minuti_<?php echo $i ?>" placeholder="Minuti" value="0" onkeyup="cambia_totale(<?php echo $i ?>)">
                    </div>


                    <div class="col-sm-1">
                        <?php if($i == 0){ ?><label>P.U.<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="0.01" name="pu[<?php echo $i ?>]" class="form-control" id="pu_<?php echo $i ?>" placeholder="Prezzo Unitario" value="33.75" required onkeyup="cambia_totale(<?php echo $i ?>)">
                    </div>

                    <div class="col-sm-1">
                        <?php if($i == 0){ ?><label>Iva<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="1" name="aliquota[<?php echo $i ?>]" class="form-control" id="imposta_<?php echo $i ?>" placeholder="Aliquota" value="0" required>
                    </div>


                    <div class="col-sm-2">
                        <?php if($i == 0){ ?><label>Prezzo Totale<b style="color:red">*</b></label> <?php } ?>
                        <input type="number" min="0" step="0.01" name="pt[<?php echo $i ?>]" class="form-control" id="pt_<?php echo $i ?>" placeholder="Prezzo Totale" value="0" required readonly>
                    </div>

                    <?php } ?>


                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_guasto" value="<?php echo $g->id ?>">
                    <input type="submit" class="btn btn-primary" name="aggiungi_riga" value="Aggiungi Riga">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</form>

    <form method="post">
        <div class="modal fade" id="modal_modifica_<?php echo $g->id ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifica Guasto <?php echo $g->id ?></h4>
                    </div>
                    <div class="modal-body row">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descrizione <b style="color:red">*</b></label>
                                <input type="text" class="form-control" name="descrizione" value="<?php echo $g->descrizione ?>" placeholder="Descrizione" required>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?php echo $g->id ?>">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
                        <input type="submit" class="btn btn-primary pull-right" name="modifica" value="Modifica" style="margin-right:5px;">
                    </div>
                </div>
            </div>
        </div>
    </form>

<form method="post" enctype="multipart/form-data">
    <div class="modal" id="modal_modifica_righe_guasto_<?php echo $g->id  ?>">
        <div class="modal-dialog modal-lg" style="max-width:95%">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modifica Righe Guasto <?php echo $g->id ?></h4>
                </div>
                <div class="modal-body">

                    <table id="tabella_immagini" class="table table-bordered table-hover" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="no-sort" style="width:10px;display:none">ID</th>
                                <th class="no-sort" style="width:20px;">Ord</th>
                                <th class="no-sort" style="width:20px;">Servizio</th>
                                <th class="no-sort" style="width:80px;">Cod. Art</th>
                                <th class="no-sort" style="width:70px;">Setup</th>
                                <th class="no-sort" style="width:300px;">Desc.</th>
                                <th class="no-sort">Attività</th>
                                <th class="no-sort" style="width:60px;">Qta</th>
                                <th class="no-sort" style="width:60px;">Minuti</th>
                                <th class="no-sort" style="width:60px;">P.U.</th>
                                <th class="no-sort">Iva</th>
                                <th class="no-sort">Totale</th>
                                <th class="no-sort" style="width:50px;"></th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach($g->righe as $r){ ?>
                                <tr>
                                    <td style="display:none"><?php echo $r->id ?></td>
                                    <td><?php echo $r->ordinamento ?></td>
                                    <td><input type="text" class="form-control" id="servizio_<?php echo $r->id ?>" value="<?php echo $r->servizio ?>" name="servizio[<?php echo $r->id ?>]" placeholder="Servizio"></td>
                                    <td><input type="text" class="form-control" id="codice_<?php echo $r->id ?>" value="<?php echo $r->codice ?>" name="codice[<?php echo $r->id ?>]" placeholder="Codice Articolo"></td>
                                    <td>
                                        <select class="form-control select2" id="setup_tank_<?php echo $r->id ?>" name="setup_tank[<?php echo $r->id ?>]">
                                            <option value="0" <?php echo ($r->setup_tank == 0)?'selected':'' ?>>NO</option>
                                            <option value="1" <?php echo ($r->setup_tank == 1)?'selected':'' ?>>SI</option>
                                        </select>
                                    </td>
                                    <td><textarea class="form-control" id="descrizione_<?php echo $r->id ?>" name="descrizione[<?php echo $r->id ?>]" placeholder="Descrizione" style="height:90px;resize: none;"><?php echo $r->descrizione ?></textarea></td>
                                    <td><input type="number" min="0" step="1" name="attivita[<?php echo $r->id ?>]" class="form-control" id="attivita_<?php echo $r->id ?>" placeholder="Attivita" value="<?php echo $r->attivita ?>" required></td>
                                    <td><input type="number" min="0" step="0.01" name="qta[<?php echo $r->id ?>]" class="form-control" id="qta_<?php echo $r->id ?>" placeholder="qta" value="<?php echo $r->qta ?>" required onkeyup="$('#minuti_<?php echo $r->id ?>').val(0);cambia_totale_modifica(<?php echo $r->id ?>)"></td>
                                    <td><input type="number" min="0" step="0.001" name="minuti[<?php echo $r->id ?>]" class="form-control" id="minuti_<?php echo $r->id ?>" placeholder="Minuti" value="<?php echo $r->minuti ?>" required onkeyup="cambia_totale_modifica(<?php echo $r->id ?>)"></td>
                                    <td><input type="number"  step="0.01" name="pu[<?php echo $r->id ?>]" class="form-control" id="pu_<?php echo $r->id ?>" value="<?php echo $r->pu ?>" placeholder="Prezzo Unitario" required onkeyup="cambia_totale_modifica(<?php echo $r->id ?>)"></td>
                                    <td><input type="number" min="0" step="1" name="aliquota[<?php echo $r->id ?>]" class="form-control" id="imposta_<?php echo $r->id ?>" value="<?php echo $r->aliquota ?>" placeholder="Aliquota" value="22" required></td>
                                    <td><input type="number"  step="0.01" name="pt[<?php echo $r->id ?>]" class="form-control" id="pt_<?php echo $r->id ?>" placeholder="Prezzo Totale" value="<?php echo $r->pt ?>" required readonly></td>
                                    <td><a class="btn btn-danger btn-sm" onclick="elimina_riga_guasto(<?php echo $r->id ?>)">ELIMINA</a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_guasto" value="<?php echo $g->id ?>">
                    <input type="submit" class="btn btn-primary" name="modifica_righe_guasto" value="Modifica Righe">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</form>

<?php } ?>


<script type="text/javascript">


    function cambia_totale_modifica(id){

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


    function sposta_riga(id,direzione){

        $.get( "/admin/ajax/sposta_riga_guasto/"+id+"/"+direzione, function( data ) {
            if(data == "ok"){
                $.get( "/admin/ajax/modifica_guasto/<?php echo $g->id ?>", function( data ) {
                    $("#ajax_loader").html(data);
                    $('.modal-backdrop').remove();
                    $('#modal_modifica_righe_guasto_<?php echo $g->id ?>').modal('show');
                });
            }
        });
    }

    function elimina_riga_guasto(id){

        $.get( "/admin/ajax/elimina_riga_guasto/"+id, function( data ) {
            if(data == "ok"){
                $.get( "/admin/ajax/modifica_guasto/<?php echo $g->id ?>", function( data ) {
                    $("#ajax_loader").html(data);
                    $('.modal-backdrop').remove();
                    $('#modal_modifica_righe_guasto_<?php echo $g->id ?>').modal('show');
                });
            }
        });

    }

    var tabella_immagini = $('#tabella_immagini').DataTable({
        rowReorder: true,
        paging: false,
        ordering: false,
        info: false,
        searching: false,

        columnDefs: [
            { targets: [0], visible: false }
        ],
    });


    tabella_immagini.on('row-reorder', function (e, diff, edit) {

        for (var i = 0, ien = diff.length; i < ien; i++) {
            var rowData = tabella_immagini.row(diff[i].node).data();

            console.log(diff[i]);


            $.get("<?php echo URL::ASSET('admin/ajax/aggiorna_posizione_guasto') ?>/"+rowData[0]+"/"+diff[i].newPosition, function( data ) {
            });

        }

        $('#result').html('Risultato:<br>' + result);
    });

    setTimeout(function(){
        tabella_immagini.columns.adjust();
    }, 200);




</script>

<style>
    .arrows{
        display: inline;
    }

    .fa-chevron-circle-down,
    .fa-chevron-circle-up{
        cursor:pointer;
    }

    #tabella_immagini td, #tabella_immagini th {
        padding: 5px;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

</style>

