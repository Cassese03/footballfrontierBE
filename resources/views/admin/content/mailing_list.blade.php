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
            <div class="col-md-12" style="padding:0;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mailing List</h3>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                        <thead>

                        <tr>
                            <th style="width:20px;">ID</th>
                            <th style="width:200px;">Azione</th>
                            <th style="width:1000px;">Invio Mail</th>
                        </tr>

                        </thead>

                        <tbody>

                        <?php foreach($regole as $r){ ?>

                        <tr>
                            <td><?php echo $r->id ?></td>
                            <td><?php echo $r->azione ?></td>
                            <td>
                                <form method="post">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <b>Invia A:</b>
                                            <select name="destinatari[]" class="form-control select2" multiple style="width: 100%">
                                                <?php foreach($utenti as $u){ ?>
                                                <option value="<?php echo $u->id ?>" <?php echo in_array($u->id,array_filter(explode(',',$r->destinatari)))?'selected':'' ?>><?php echo $u->cognome.' '.$u->nome ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <b>Invia CC:</b>
                                            <select name="cc[]" class="form-control select2" multiple style="width: 100%">
                                                <?php foreach($utenti as $u){ ?>
                                                <option value="<?php echo $u->id ?>" <?php echo in_array($u->id,array_filter(explode(',',$r->cc)))?'selected':'' ?>><?php echo $u->cognome.' '.$u->nome ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-12" style="margin-top:5px;">
                                        <input type="hidden" name="id" value="<?php echo $r->id ?>">
                                        <input type="submit" class="btn btn-success pull-right" name="salva" value="Salva" style="margin-right:5px;">
                                    </div>

                                </form>
                            </td>


                        </tr>

                        <?php } ?>

                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #3c8dbc!important;
        border-color: #367fa9!important;
        padding: 1px 10px!important;
        color: #fff!important;
    }
</style>
