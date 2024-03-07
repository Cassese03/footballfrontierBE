<?php foreach($eventi as $e){ ?>

    <form method="post">
        <div class="modal fade" id="modal_modifica_<?php echo $e->id ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifica Evento <?php echo $e->descrizione ?></h4>
                    </div>
                    <div class="modal-body row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descrizione <b style="color:red">*</b></label>
                                <input type="text" class="form-control" name="descrizione" value="<?php echo $e->descrizione ?>" placeholder="Descrizione" required>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tipologia <b style="color:red">*</b></label>
                                <select name="tipologia" class="form-control select2" style="width:100%" required>
                                    <option value="0" <?php echo ($e->tipologia == 'Matrimonio')?'selected':'' ?>>Matrimonio</option>
                                    <option value="1" <?php echo ($e->tipologia == 'Battesimo')?'selected':'' ?>>Battesimo</option>
                                    <option value="2" <?php echo ($e->tipologia == 'Compleanno')?'selected':'' ?>>Compleanno</option>
                                    <option value="3" <?php echo ($e->tipologia == 'Altro')?'selected':'' ?>>Altro</option>

                                </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
                        <input type="hidden" name="id" value="<?php echo $e->id ?>">
                        <input type="submit" class="btn btn-primary pull-right" name="modifica" value="Modifica" style="margin-right:5px;">
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php } ?>

