<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-0">Benvenuto <?php echo $utente->nominativo ?></h1>
                <strong> TUTORIAL PER <?php echo $tipo->descrizione ?> </strong>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <select style="border-top:transparent;border-right:transparent;border-left:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px;width: 100%;text-align: center"
                        name="select_tipo" id="select_tipo" onchange="changed()">
                    <?php foreach ($tipologie as $t) { ?>
                    <option
                        <?php if ($t->id == $tipo->id) echo 'selected'?> value="<?php echo $t->id;?>"><?php echo $t->descrizione;?></option>
                    <?php } ?>
                </select>

            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <button onclick="$('#modal_inserisci').modal('show')" class="btn btn-block btn-success btn-flat">
                        Aggiungi Nuova Pagina di Tutorial
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

            <?php foreach ($tutorial as $t)  {?>


            <div class="col-md-6 col-sm-6 col-12">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $t->ordinamento; ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>

                    </div>


                    <div class="card-body">

                        <!--
                       <div class="form-group" style="margin-top: -10%">
                            <label class="col-form-label" for="inputSuccess"></label>

                            <div style="display: flex">
                                <input type="text" class="form-control" id="input_<?php echo $t->id;?>"
                                       placeholder="Inserisci un nuovo elemento..."
                                       style="border-right:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                                <button type="button" onclick="aggiungi_oggetto('<?php echo $t->id;?>')"
                                        class="form-control"
                                        style="width:15%;height: auto;border-left:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        -->

                        <div style="display: flex;">
                            <?php if ($t->descrizione != ''){ ?>
                            <input type="text" class="form-control" id="oggetto_<?php echo $t->id;?>"
                                   placeholder="Inserisci un nuovo elemento..."
                                   value="<?php echo $t->descrizione;?>"
                                   style="width: 85%;height: auto;border:transparent;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                            <button type="button" onclick="delete_descrizione_tutorial('<?php echo $t->id;?>')"
                                    class="btn btn-tool" data - card - widget="remove"
                                    style="width:15%;height: auto;border:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                <i class="fas fa-times"></i>
                            </button>
                            <?php }else{?>
                            <form method="post" enctype="multipart/form-data" style="width: 100%">
                                <div style="display: flex;">
                                    <input type="text" class="form-control" name="descrizione_<?php echo $t->id;?>"
                                           placeholder="Inserisci una nuova descrizione..."
                                           style="width:85%;border-right:transparent;height: auto;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                                    <button type="submit"
                                            class="form-control"
                                            style="width:15%;height: auto;border-left:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $t->id;?>">
                                </div>
                            </form>
                            <?php } ?>

                        </div>

                        <div style="display: flex;">
                            <?php if ($t->img != ''){ ?>
                            <input type="text" onfocus="blur()" class="form-control" id="oggetto_<?php echo $t->id;?>"
                                   placeholder="Inserisci un nuovo elemento..."
                                   value="<?php echo $t->img;?>"
                                   style="width: 85%;height: auto;border:transparent;flex: 1;border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                            <button type="button" onclick="delete_img_tutorial('<?php echo $t->id;?>')"
                                    class="btn btn-tool" data - card - widget="remove"
                                    style="width:15%;height: auto;border:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                <i class="fas fa-times"></i>
                            </button>
                            <?php } else { ?>
                            <form method="post" enctype="multipart/form-data" style="width: 100%">
                                <div style="display: flex;">
                                    <input type="file" class="form-control" name="img_<?php echo $t->id;?>"
                                           placeholder="Inserisci una nuova immagine..."
                                           style="width:85%;height: auto;border:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                    <button type="submit"
                                            class="form-control"
                                            style="width:15%;height:auto;border:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $t->id;?>">
                                </div>
                            </form>
                            <?php } ?>
                        </div>


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
                <p class="text-center">Tutorial eliminato.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="location.reload()" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_eliminato_descrizione" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Descrizione eliminato.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="location.reload()" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_eliminato_img" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Immagine eliminata.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="location.reload()" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<form method="post" enctype="multipart/form-data">
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
                    <p class="text-center">Inserisci la descrizione</p>
                    <input type="text" name="descrizione_new" id="descrizione_new"
                           style="width: 100%;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci la descrizione..." required>
                    <br>
                    <br>
                    <p class="text-center">Inserisci Imamgine</p>
                    <input type="file" id="img_new" name="img_new"
                           style="width: 100%;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci l'immagine..." required>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" type="submit">OK</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--
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
                <p class="text-center">Tutorial inserito!</p>
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
-->

<div class="modal" id="modal_aggiungi_descrizione" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Descrizione Inserita!</p>
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
                <p class="text-center">Tutorial inserito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal" onclick="location.reload()">OK</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


    function changed() {
        location.href =
            top.location.href.substring(0, (top.location.href.length - 1)) + document.getElementById('select_tipo').value;
    }

    function delete_tutorial(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/delete_tutorial') ?>/" + id,
            context: document.body,
            success: $('#modal_eliminato').modal('show'),
            error: (function (result) {
                alert('Errore! Tutorial non eliminato.');
                location.reload();
            })
        });
    }

    function delete_descrizione_tutorial(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/delete_descrizione_tutorial') ?>/" + id,
            context: document.body,
            success: $('#modal_eliminato_descrizione').modal('show'),
            error: (function (result) {
                alert('Errore! Descrizione non eliminata.');
                location.reload();
            })
        });
    }

    function delete_img_tutorial(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/delete_img_tutorial') ?>/" + id,
            context: document.body,
            success: $('#modal_eliminato_img').modal('show'),
            error: (function (result) {
                alert('Errore! Immagine non eliminata.');
                location.reload();
            })
        });
    }

    /*function update_tutorial(id) {

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
    }*/
    /*
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
    }*/

</script>


