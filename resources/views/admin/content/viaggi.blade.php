<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Benvenuto <?php echo $utente->nominativo ?></h1>
                <small>Dashboard Admin </small>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <button onclick="$('#modal_inserisci').modal('show')" class="btn btn-block btn-success btn-flat">
                        Aggiungi
                    </button>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<?php // echo date('Y-m-d H:i:s', strtotime('365 days'));?>
        <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <?php foreach ($viaggi as $v)  {?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                    <div class="row">
                        <div class="card-header text-muted border-bottom-0" style="text-align: left">
                            Max_Partecipanti <strong><?php echo $v->max_partecipanti; ?></strong>
                        </div>
                        <div class="card-header text-muted border-bottom-0" style="text-align: center">
                            Partecipanti <strong><?php echo $v->num_partecipanti; ?></strong>
                        </div>
                        <div class="card-header text-muted border-bottom-0" style="text-align: right;">
                            Stato <strong><?php echo ($v->stato == 1) ? 'aperto' : 'chiuso' ?></strong>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b><?php echo $v->localita?></b></h2>
                                <p class="text-muted text-sm">
                                    <b>Info: </b> <?php echo substr($v->descrizione, 0, 300) . '...'; ?></p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-plane-departure"></i></span> <a
                                                style="margin-left: 15%"><?php echo date('d-m-Y', strtotime($v->data_andata)) . ' - ' . $v->partenza; ?></a>
                                    </li>
                                    <br>
                                    <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-plane-arrival"></i></span> <a
                                                style="margin-left: 15%"><?php echo date('d-m-Y', strtotime($v->data_ritorno)) . ' - ' . $v->arrivo;; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="/logo_dhonko.png" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a class="btn btn-sm btn-danger" onclick="delete_oggetto('<?php echo $v->id;?>')">
                                <i class="fas fa-times"></i> Elimina Viaggio
                            </a>
                            <?php /* <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                            </a>*/?>
                            <a href="<?php echo URL::asset('admin/dettaglio_viaggio/'.$v->id)?>"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Mostra Dettagli
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


            {{-- <div class="col-md-3 col-sm-6 col-12" onclick="alert('Oggetti collegati alla preferenza id <?php echo $p->id;?>')">
                 <div class="info-box">
                 <span class="info-box-icon bg-info">
                     <i class="far fa-envelope"></i>
                 </span>
                     <div class="info-box-content">
                         <span class="info-box-text"><strong><?php echo $p->title; ?></strong></span>
                         <span class="info-box-text">Type : <?php echo $p->type; ?></span>
                         <span class="info-box-text">Oggetti : <strong><?php echo $p->count; ?></strong></span>
                     </div>
                 </div>
             </div>--}}

            <?php /* if(1 == 1){
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $v->localita . ' (' . $v->stato . ')'; ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i
                                        class="fas fa-plus"></i>
                            </button>
                        </div>

                    </div>


                    <div class="card-body">
                        <div class="form-group" style="margin-top: -10%">
                            <label class="col-form-label" for="inputSuccess"></label>
                            <?php /* if($p->max_count == 0){ ?>
                            <div style="display: flex">
                                <input type="text" class="form-control" id="input_<?php echo $p->id;?>"
                                       placeholder="Inserisci un nuovo elemento..."
                                       <?php if ($p->id_type == 4) echo 'value="Icons."'?>
                                       style="border-right:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                                <button type="button" onclick="aggiungi_oggetto('<?php echo $p->id;?>')"
                                        class="form-control"
                                        style="width:15%;height: auto;border-left:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <?php } else{ if($p->max_count > $p->count){?>
                            <div style="display: flex">
                                <input type="text" class="form-control" id="input_<?php echo $p->id;?>"
                                       placeholder="Inserisci un nuovo elemento..."
                                       <?php if ($p->id_type == 4) echo 'value="Icons."'?>
                                       style="border-right:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                                <button type="button" onclick="aggiungi_oggetto('<?php echo $p->id;?>')"
                                        class="form-control"
                                        style="width:15%;height: auto;border-left:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <?php }}
                        </div> */?>
            <?php /* foreach ($oggetti as $o) {?>
                        <?php if($p->id == $o->id_filtro){?>
                        <div class="card-header">
                            <h3 class="card-title">
                                <!--<input style="border-right:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px" value=" ">--></h3>
                            <div class="card-tools">
                                <div style="display: flex">
                                    <input type="text" class="form-control" id="oggetto_<?php echo $o->id;?>"
                                           placeholder="Inserisci un nuovo elemento..."
                                           onblur="update_oggetto('<?php echo $o->id;?>')"
                                           value="<?php echo $o->content?>"
                                           style="height: auto;border:transparent;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                                    <button type="button" onclick="delete_oggetto('<?php echo $o->id;?>')"
                                            class="btn btn-tool" data - card - widget="remove"
                                            style="width:15%;height: auto;border:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!--

                                <button type = "button" class="btn btn-tool" data - card - widget = "card-refresh" data - source = "widgets.html" data - source - selector = "#card-refresh-content" data - load - on - init = "false" >
                                    <i class="fas fa-sync-alt" ></i >
                                </button >
                                <button type = "button" class="btn btn-tool" data - card - widget = "maximize" >
                                    <i class="fas fa-expand" ></i >
                                </button >
                                <button type = "button" class="btn btn-tool" data - card - widget = "collapse" >
                                    <i class="fas fa-minus" ></i >
                                </button >

                                -->

                            </div>

                        </div>
                        <?php } ?>
                        <?php }
                    </div>

                </div>
            </div>
            <?php } */ ?>
        </div>
    </div>
</section>


<div class="modal" id="modal_eliminato" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Viaggio eliminato.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="location.reload()" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_inserisci" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box"
                     style="padding-top:1%;color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-lightbulb"></i>
                </div>
            </div>
            <div class="modal-body">
                <br>
                <p class="text-center">Inserisci la localita'</p>
                <input type="text" id="new_localita"
                       style="width: 100%;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci il posto da visitare...">
                <br>
                <br>  <p class="text-center">Inserisci il numero dei Partecipanti</p>
                <input type="number" step="1" min="1" max="100" id="new_max_partecipanti"
                       style="width: 100%;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci il numero di partecipanti...">
                <br>
                <br>
                <p class="text-center">Inserisci data partenza</p>
                <input type="date" id="new_andata"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di partenza...">
                <br><br>
                <p class="text-center">Inserisci data arrivo</p>
                <input type="date" id="new_ritorno"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di arrivo...">
                <br>
                <br>
                <p class="text-center">Inserisci la citta' di partenza</p>
                <input type="text" id="new_partenza"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di partenza...">
                <br><br>
                <p class="text-center">Inserisci la citta' di arrivo</p>
                <input type="text" id="new_arrivo"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di arrivo...">
                <br>
                <br>
                <p class="text-center">Inserisci la descrizione </p>
                <textarea style="text-align: left;width: 100%;" id="new_descrizione" name="new_descrizione" rows="6"
                          cols="50">Inserisci qui la descrizione...
                </textarea>

            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="new_viaggio()" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Oggetto inserito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal" onclick="location.reload()">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_aggiornato" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Oggetto modificato!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal" onclick="location.reload()">OK</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_success_P" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Viaggio inserito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal" onclick="location.reload()">OK</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delete_oggetto(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/delete_viaggio') ?>/" + id,
            context: document.body,
            success: $('#modal_eliminato').modal('show'),
            error: (function (result) {
                alert('Errore! Viaggio non eliminato.');
                location.reload();
            })
        });
    }

    function update_oggetto(id) {

        content = document.getElementById('oggetto_' + id).value;
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/update_oggetto_viaggio') ?>/" + id + "/" + encodeURIComponent(content),
            context: document.body,
            success: $('#modal_aggiornato').modal('show'),
            error: (function (result) {
                alert('Errore! Oggetto non modificato.');
                location.reload();
            })
        });
    }

    function aggiungi_oggetto(id) {

        content = document.getElementById('input_' + id).value;

        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/aggiungi_oggetto_viaggio') ?>/" + id + "/" + content,
            context: document.body,
            success: $('#modal_success').modal('show'),
            error: (function (result) {
                alert('Errore! Oggetto non inserito.');
                location.reload();
            })
        });
    }

    function new_viaggio() {

        localita = document.getElementById('new_localita').value;
        descrizione = document.getElementById('new_descrizione').value;
        andata = document.getElementById('new_andata').value;
        ritorno = document.getElementById('new_ritorno').value;
        partenza = document.getElementById('new_partenza').value;
        arrivo = document.getElementById('new_arrivo').value;
        max_partecipanti = document.getElementById('new_max_partecipanti').value;

        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/aggiungi_viaggio') ?>/" + encodeURIComponent(localita) + "/" + encodeURIComponent(descrizione) + "/" + andata + "/" + ritorno + "/" + encodeURIComponent(partenza) + "/" + encodeURIComponent(arrivo) + "/" + max_partecipanti,
            context: document.body,
            success: $('#modal_success_P').modal('show'),
            error: (function (result) {
                alert('Errore! Viaggio non inserito.');
                location.reload();
            })
        });
    }
</script>


