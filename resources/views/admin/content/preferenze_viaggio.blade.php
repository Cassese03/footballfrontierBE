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

            <?php foreach ($preferenze as $p)  {?>


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


            <div class="col-md-3 col-sm-6 col-12">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $p->title . ' (' . $p->count . ')'; ?></h3>
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
                            <?php if($p->max_count == 0){ ?>
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
                            <?php }} ?>
                        </div>
                        <?php foreach ($oggetti as $o) {?>
                        <?php if($p->id == $o->id_preferenza){?>
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
                        <?php } ?>
                    </div>

                </div>
            </div>
            <?php } ?>
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
                <p class="text-center">Oggetto eliminato.</p>
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
                <p class="text-center">Inserisci il titolo</p>
                <input type="text" id="new_title"
                       style="width: 100%;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci il titolo...">
                <br>
                <br>
                <p class="text-center">Inserisci il tipo di Preferenza</p>
                <select type="text" id="new_type"
                        style="width: 100%;border-top: none;border-left: none;border-right:none">
                    <?php foreach ($tipo_preferenze as $t){ ?>
                    <option value="<?php echo $t->id;?>"><?php echo $t->type;?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="new_preferenza()" data-dismiss="modal">OK</button>
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
                <p class="text-center">Preferenza inserita!</p>
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
            url: "<?php echo URL::asset('admin/ajax/delete_oggetto_viaggio') ?>/" + id,
            context: document.body,
            success: $('#modal_eliminato').modal('show'),
            error: (function (result) {
                alert('Errore! Oggetto non eliminato.');
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

    function new_preferenza() {

        title = document.getElementById('new_title').value;
        type = document.getElementById('new_type').value;

        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/aggiungi_preferenza_viaggio') ?>/" + type + "/" + encodeURIComponent(title),
            context: document.body,
            success: $('#modal_success_P').modal('show'),
            error: (function (result) {
                alert('Errore! Preferenza non inserita.');
                location.reload();
            })
        });
    }
</script>


