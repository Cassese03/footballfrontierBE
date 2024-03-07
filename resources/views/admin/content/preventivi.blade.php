
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

                        <?php $tipologia = 'Preventivi'; ?>
                        <?php if($stato == 1) $tipologia = 'Ordini'; ?>
                        <?php if($stato == 2) $tipologia = 'Ordini Completati'; ?>
                        <?php if($stato == 3) $tipologia = 'Ordini in Ritardo'; ?>
                        <h2 style="float:left">Lista <?php echo $tipologia ?> <?php echo ($fatturato == 0)?'Da Fatturare':'Fatturato' ?></h2>

                        <?php if($stato == 0){ ?>
                            <a style="float:right;margin-bottom:20px;" class="btn btn-success" onclick="aggiungi()">Aggiungi Preventivi</a>
                        <?php } ?>

                        <a style="float:right;margin-bottom:20px;margin-right:10px;" class="btn btn-primary" onclick="esporta(0)">Esporta</a>
                        <a style="float:right;margin-bottom:20px;margin-right:10px;" class="btn btn-primary" onclick="genera_fattura()">Genera Fattura</a>

                        <div class="clearfix"></div>

                        <table class="table table-bordered table-hover datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="no-sort">Numero</th>
                                    <th class="no-sort">Data</th>
                                    <th class="no-sort">Cliente</th>
                                    <th class="no-sort" style="width:200px;">Totale</th>
                                    <th class="no-sort" style="width:400px;"></th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($preventivi as $p){ $background = ''; ?>

                            <?php
                            if($p->stato == 0) $background = 'rgba(231, 76, 60,0.2)';
                            if($p->stato == 1) $background = 'rgba(39, 174, 96,0.2)';
                            if($p->stato == 2) $background = 'rgba(243, 156, 18,0.2)';
                            ?>


                            <tr>
                                <td><?php echo $p->numero.'/'.$p->anno ?><br></td>
                                <td><?php echo date('d/m/Y',strtotime($p->data)) ?></td>
                                <td>
                                    <?php echo $p->nominativo ?><br>
                                    Automezzo: <?php echo $p->automezzo ?><br>
                                    Localita: <?php echo $p->localita ?><br>
                                    <?php if($p->operatore != ''){ ?>
                                        Operatore: <?php echo $p->operatore ?><br>
                                        <?php echo nl2br($p->note_operatore) ?>
                                    <?php } ?>
                                </td>
                                <td>

                                    <?php if($p->sconto > 0){ ?>
                                    Sconto: <?php echo $p->sconto ?>%<br>
                                    Imponibile:<span style="  text-decoration: line-through;">&euro;<?php echo $p->imponibile ?></span>
                                    <span style="color:red">&euro;<?php echo number_format((($p->imponibile/100)*$p->sconto),2,'.','') ?></span>
                                    <br>
                                    Imposta:<span style="  text-decoration: line-through;">&euro;<?php echo $p->imposta ?></span>
                                    <span style="color:red">&euro;<?php echo number_format((($p->imposta/100)*$p->sconto),2,'.','') ?></span>
                                    <br>
                                    Imposta:<span style="  text-decoration: line-through;">&euro;<?php echo $p->totale ?></span>
                                    <span style="color:red">&euro;<?php echo number_format((($p->totale/100)*$p->sconto),2,'.','') ?></span>
                                    <br>
                                    <?php } else { ?>
                                    Imponibile: &euro;<?php echo $p->imponibile ?><br>
                                    Imposta: &euro;<?php echo $p->imposta ?><br>
                                    Totale: &euro;<?php echo $p->totale ?><br>
                                    <?php } ?>

                                </td>
                                <td>
                                    <a style="float:left" onclick="modifica(<?php echo $p->id ?>)" class="btn btn-primary btn-sm">MODIFICA</a>
                                    <?php if($p->template == 1){ ?>
                                        <a style="float:left;margin-left:5px;" onclick="aggiungi_riga_touax(<?php echo $p->id ?>)"  class="btn btn-success btn-sm">+ RIGHE</a>
                                        <a style="float:left;margin-left:5px;" onclick="modifica_righe_touax(<?php echo $p->id ?>)" class="btn btn-primary btn-sm">x RIGHE</a>
                                        <a style="float:left;margin-left:5px;" onclick="esporta(<?php echo $p->id_cliente ?>)" class="btn btn-primary btn-sm">EXCEL</a>
                                    <?php } else { ?>
                                        <a style="float:left;margin-left:5px;" onclick="aggiungi_riga(<?php echo $p->id ?>)"  class="btn btn-success btn-sm">+ RIGHE</a>
                                        <a style="float:left;margin-left:5px;" onclick="modifica_righe(<?php echo $p->id ?>)" class="btn btn-primary btn-sm">x RIGHE</a>
                                        <a style="float:left;margin-left:5px;" target="_blank" href="<?php echo URL::asset('admin/stampa/preventivo/'.$p->id) ?>" class="btn btn-primary btn-sm">STAMPA</a>
                                        <a style="float:left;margin-left:5px;" target="_blank" href="<?php echo URL::asset('admin/stampa/preventivo_excel/'.$p->id) ?>" class="btn btn-primary btn-sm">EXCEL</a>
                                    <?php } ?>

                                    <?php if($p->stato == 0){ ?>
                                        <?php if($p->id_fattura == ''){ ?>
                                            <form method="post" onsubmit="return confirm('vuoi generare la fattura ?')" style="float:left;margin-left:5px;margin-top:10px;">
                                                <input type="hidden" name="id" value="<?php echo $p->id ?>">
                                                <input type="submit" name="genera_fattura" value="GENERA FATTURA" class="btn btn-primary btn-sm">
                                            </form>
                                        <?php } else { ?>
                                            <a style="float:left;margin-left:5px;margin-top:10px;" target="_blank" href="<?php echo URL::asset('admin/fatture/'.date('Y')) ?>" class="btn btn-primary btn-sm">FATTURA <?php echo $p->numero_fattura ?></a>
                                        <?php } ?>
                                    <?php } ?>

                                    <br>

                                    <form method="post" onsubmit="return confirm('vuoi eliminare questo preventivo ?')" style="float:left;margin-top:10px;margin-left:5px;">
                                        <input type="hidden" name="stato" value="<?php echo $p->stato ?>">
                                        <input type="hidden" name="id" value="<?php echo $p->id ?>">
                                        <input type="submit" name="elimina" value="ELIMINA" class="btn btn-danger btn-sm">
                                    </form>

                                    <form method="post" onsubmit="return confirm('vuoi duplicare questo preventivo ?')" style="float:left;margin-left:5px;margin-top:10px;">
                                        <input type="hidden" name="id" value="<?php echo $p->id ?>">
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

<form method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal_aggiungi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crea Preventivo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">

                    <div class="col-sm-6">
                        <label>Cliente <b style="color:red">*</b></label>
                        <select name="id_cliente" class="form-control select2" required style="width:100%">
                            <?php foreach($clienti as $c) { ?>
                            <option value="<?php echo $c->id ?>"><?php echo $c->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label>Numero <b style="color:red">*</b></label>
                        <input type="text" name="numero" class="form-control" id="numero" placeholder="Numero" value="<?php echo $num_preventivo ?>">
                    </div>

                    <div class="col-sm-3">
                        <label>Data <b style="color:red">*</b></label>
                        <input type="text" name="data" class="form-control date-picker" id="data" placeholder="data" value="<?php echo date('d/m/Y') ?>" required>
                    </div>

                    <div class="col-sm-6">
                        <label>Stato<b style="color:red">*</b></label>
                        <select name="stato" class="form-control select2" required style="width:100%">
                            <option value="0">Preventivo</option>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label>Nr. Automezzo</label>
                        <input type="text" name="automezzo" class="form-control" id="acconto" placeholder="Acconto" value="">
                    </div>

                    <div class="col-sm-6">
                        <label>Nr. Ordine Rif.</label>
                        <input type="text" name="numero_ordine_rif" class="form-control" id="numero_ordine_rif" placeholder="Numero Ordine Rif." value="">
                    </div>

                    <div class="col-sm-6">
                        <label>Localita</label>
                        <input type="text" name="localita" class="form-control" placeholder="Localita" value="">
                    </div>

                    <div class="col-sm-12">
                        <label>Guasto 1 <b style="color:red">*</b></label>
                        <select name="id_guasto" class="form-control select2" style="width:100%">
                            <option value="0">Nessun Guasto Predefinito</option>
                            <?php foreach($guasti as $g) { ?>
                            <option value="<?php echo $g->id ?>"><?php echo $g->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label>Guasto 2 <b style="color:red">*</b></label>
                        <select name="id_guasto2" class="form-control select2" style="width:100%">
                            <option value="0">Nessun Guasto Predefinito</option>
                            <?php foreach($guasti as $g) { ?>
                            <option value="<?php echo $g->id ?>"><?php echo $g->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label>Guasto 3 <b style="color:red">*</b></label>
                        <select name="id_guasto3" class="form-control select2" style="width:100%">
                            <option value="0">Nessun Guasto Predefinito</option>
                            <?php foreach($guasti as $g) { ?>
                            <option value="<?php echo $g->id ?>"><?php echo $g->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="aggiungi_testata" value="Aggiungi Testata">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</form>

<form method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal_esporta">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Esportazione Massiva</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">

                    <div class="col-sm-12" style="margin-bottom:20px;">
                        <label>Cliente <b style="color:red">*</b></label>
                        <select id="id_cliente_esporta" name="id_cliente" class="form-control select2" required style="width:100%">
                            <?php foreach($clienti as $c) { ?>
                            <option value="<?php echo $c->id ?>"><?php echo $c->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label>Data Inizio<b style="color:red">*</b></label>
                        <input type="text" name="data_inizio" class="form-control date-picker" id="data_inizio" placeholder="data_inizio" value="<?php echo date('1/m/Y') ?>" required>
                    </div>

                    <div class="col-sm-6">
                        <label>Data Fine<b style="color:red">*</b></label>
                        <input type="text" name="data_fine" class="form-control date-picker" id="data_fine" placeholder="data_fine" value="<?php echo date('1/m/Y', strtotime("+1 month")) ?>" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="esportazione_massiva" value="Esporta">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</form>

<form method="post" enctype="multipart/form-data">
    <div class="modal fade" id="modal_genera_fattura">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Genera Fattura</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">

                    <div class="col-sm-12" style="margin-bottom:20px;">
                        <label>Cliente <b style="color:red">*</b></label>
                        <select id="id_cliente" name="id_cliente" class="form-control select2" required style="width:100%" onchange="carica_preventivi()">
                            <option value="">Seleziona Un Cliente</option>
                            <?php foreach($clienti as $c) { ?>
                                <option value="<?php echo $c->id ?>"><?php echo $c->descrizione ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="col-md-12" id="ajax_preventivi">

                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="id_preventivi" name="id_preventivi" value="" required>
                    <input type="submit" id="pulsante_genera_fatture" class="btn btn-primary" name="genera_fatture" value="Genera Fatture" disabled>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</form>


<div class="clearfix"></div>
<div id="ajax_loader"></div>

<script type="text/javascript">

    function aggiungi(){
        $('#modal_aggiungi').modal('show');
    }

    function esporta(id_cliente){
        $('#modal_esporta').modal('show');

        if(id_cliente != 0){
            $('#id_cliente_esporta').val(id_cliente);
            $('#id_cliente_esporta').trigger('change');
        }
    }

    function genera_fattura(){
        $('#modal_genera_fattura').modal('show');
    }

    function carica_preventivi(id){
        $.get( "<?php echo URL::asset('admin/ajax/carica_preventivi') ?>/"+$('#id_cliente').val(), function( data ) {
            $( "#ajax_preventivi" ).html( data );
            $('#id_preventivi').val('');
            $('pulsante_genera_fatture').attr('disabled',true);

            $('#preventivi').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "scrollX": true,

                "oLanguage": {
                    "sLengthMenu": "<span> Risultati :</span> _MENU_",
                    "oPaginate": { "sFirst": "Primo", "sLast": "Ultimo", "sNext": ">", "sPrevious": "<" }
                },

                "columnDefs": [
                    { targets: 'no-sort', orderable: false }
                ]
            });

        });
    }

    function calcola_fatture(){

        var output = $('.checkbox_fatture:checked').map(function() {return this.value;}).get().join(',');
        $('#id_preventivi').val(output);

        if(output != ''){
            $('#pulsante_genera_fatture').removeAttr('disabled');
        }
    }

    function estratti_conto(){
        $('#modal_estratti_conto').modal('show');
    }

    function modifica(id){
        $.get( "<?php echo URL::asset('admin/ajax/modifica_righe') ?>/"+id, function( data ) {
            $( "#ajax_loader" ).html( data );
            $('#modal_modifica_testata_'+id).modal('show');
        });
    }

    function mostra_operatori(id){
        stato = $('#stato_'+id).val();
        if(stato > 0){
            $('#operatori_'+id).fadeIn();
            $('#note_operatore_'+id).fadeIn();
        } else {
            $('#operatori_'+id).fadeOut();
            $('#note_operatore_'+id).fadeOut();
            $('#id_utente_'+id).val(0);
            $('#id_utente_'+id).trigger('change');
        }
    }

    function aggiungi_riga(id){

        $.get( "<?php echo URL::asset('admin/ajax/modifica_righe') ?>/"+id, function( data ) {
            $( "#ajax_loader" ).html( data );
            $('#modal_aggiungi_riga_'+id).modal('show');
        });

    }

    function aggiungi_riga_touax(id){
        $.get( "<?php echo URL::asset('admin/ajax/modifica_righe') ?>/"+id, function( data ) {
            $( "#ajax_loader" ).html( data );
            $('#modal_aggiungi_riga_touax_'+id).modal('show');
        });

    }

    function modifica_righe(id){
        $.get( "<?php echo URL::asset('admin/ajax/modifica_righe') ?>/"+id, function( data ) {
            $( "#ajax_loader" ).html( data );
            $('#modal_modifica_riga').modal('show');
        });
    }

    function modifica_righe_touax(id){
        $.get( "<?php echo URL::asset('admin/ajax/modifica_righe_touax') ?>/"+id, function( data ) {
            $( "#ajax_loader" ).html( data );
            $('#modal_modifica_riga').modal('show');
        });
    }

    function cambia_totale(id){

        pu = parseFloat($('#pu_'+id).val()).toFixed(2);
        qta = $('#qta_'+id).val();
        pt = pu*qta
        $('#pt_'+id).val(parseFloat(pt).toFixed(2));

    }
    function cambia_totale_touax(id){

        pu = parseFloat($('#pu_'+id).val()).toFixed(2);
        minuti = (parseFloat($('#minuti_'+id).val())/60);
        pt = pu*minuti;
        $('#pt_'+id).val(parseFloat(pt).toFixed(2));

    }

    function modifica_totale(id){

        pu = parseFloat($('#pu_'+id).val()).toFixed(2);
        qta = $('#qta_'+id).val();
        pt = pu*qta
        $('#pt_'+id).val(parseFloat(pt).toFixed(2));
    }


    <?php if(isset($_GET['id_pratica'])){ ?>

    aggiungi_fattura_da_pratiche();

    <?php } ?>


    function cambia_rif(id){


        testo_N1 = 'Anticipazione su Servizi';
        testo_N2 = '';
        testo_N4 = 'Provvigioni per serv. assicurativi- esente (art.10 dpr n.633/72)';
        testo_N5 = 'ex art. 74-ter';

        if(id == 0){

            if($('#codice_iva').val() == 'N1') $('#rif_normativo').val(testo_N1)
            if($('#codice_iva').val() == 'N2') $('#rif_normativo').val(testo_N2);
            if($('#codice_iva').val() == 'N4') $('#rif_normativo').val(testo_N4);
            if($('#codice_iva').val() == 'N5') $('#rif_normativo').val(testo_N5)

        } else {

            if($('#codice_iva_'+id).val() == 'N1') $('#rif_normativo_'+id).val(testo_N1);
            if($('#codice_iva_'+id).val() == 'N2') $('#rif_normativo_'+id).val(testo_N2);
            if($('#codice_iva_'+id).val() == 'N4') $('#rif_normativo_'+id).val(testo_N4);
            if($('#codice_iva_'+id).val() == 'N5') $('#rif_normativo_'+id).val(testo_N5);

        }
    }


    function impostazioni_fattura(id,tipologia_testata,tipologia_righe,id_struttura,nome_struttura){

        $('#modal_impostazioni_fattura').modal('show');
        $('#if_id_pratica').html(id+' - '+nome_struttura);
        $('#if_id_pratica_val').val(id);
        $('#if_tipologia_intestazione').val(tipologia_testata);
        $('#if_tipologia_intestazione').trigger('change');
        $('#if_tipologia_righe').val(tipologia_righe);
        $('#if_tipologia_righe').trigger('change');



        /*
         $('#if_tipologia_intestazione option[value="2"]').text(nome_struttura);
         $('#if_tipologia_intestazione').trigger('change');
         */

        $("#if_altre_pratiche option").each(function()
        {
            $(this).removeAttr('selected');
            $(this).attr('disabled',true);

            if($(this).val() != id) {
                if ($(this).attr('struttura') == id_struttura) {
                    $(this).removeAttr('disabled');
                }
            }

            // Add $(this).val() to your list
        });

        $('#if_altre_pratiche').val(null).trigger('change');
    }

    function espandi(id){

        $('.riga').css('display','none');
        if(old_id != id) {
            $('.riga_' + id).css('display', 'table-row');
        } else id = 0;
        old_id = id;

    }

    function aggiorna_campi_aggiungi(id_articolo,id_pratica){

        $.get( "<?php echo URL::asset('ajax/articoli_aggiorna_campi_aggiungi') ?>/"+id_articolo+"/"+id_pratica, function( data ) {
            $( "#ajax_loader" ).html( data );
        });

    }



</script>