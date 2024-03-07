<?php foreach($clienti as $c){ ?>
    <form method="post">
        <div class="modal fade" id="modal_modifica_<?php echo $c->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modifica Cliente <?php echo $c->descrizione ?></h4>
                </div>
                <div class="modal-body row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Descrizione <b style="color:red">*</b></label>
                            <input type="text" class="form-control" name="descrizione" value="<?php echo $c->descrizione ?>" placeholder="Descrizione" required>
                        </div>
                    </div>

                    <h4 style="width:100%">Posizione</h4>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Indirizzo</label>
                            <input type="text" class="form-control" name="indirizzo" value="<?php echo $c->indirizzo ?>" placeholder="Indirizzo">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Comune</label>
                            <input type="text" class="form-control" name="comune" value="<?php echo $c->comune ?>" placeholder="Comune">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Provincia</label>
                            <input type="text" class="form-control" name="provincia" value="<?php echo $c->provincia ?>" placeholder="Provincia">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Regione</label>
                            <input type="text" class="form-control" name="regione" value="<?php echo $c->regione ?>" placeholder="Regione">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CAP</label>
                            <input type="text" class="form-control" name="cap" value="<?php echo $c->cap ?>" placeholder="CAP">
                        </div>
                    </div>


                    <h4 style="width:100%">Recapiti</h4>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nome Recapito</label>
                            <input type="text" class="form-control" name="nome_recapito" value="<?php echo $c->nome_recapito ?>" placeholder="Nome Recapito">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $c->email ?>" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $c->telefono ?>" placeholder="Telefono">
                        </div>
                    </div>

                    <h4 style="width:100%">Fatturazione</h4>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>P.IVA</label>
                            <input type="piva" class="form-control" name="piva" value="<?php echo $c->piva ?>" placeholder="P.Iva">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Codice Fiscale</label>
                            <input type="text" class="form-control" name="cf" value="<?php echo $c->cf ?>" placeholder="CF">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>SDI</label>
                            <input type="text" class="form-control" name="sdi" value="<?php echo $c->sdi ?>" placeholder="SDI">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>PEC</label>
                            <input type="email" class="form-control" name="pec" value="<?php echo $c->pec ?>" placeholder="PEC">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Template</label>
                            <select name="template" class="form-control" >
                                <option class="form-control" value="0" <?php if($c->template == 0) echo 'selected';?>>VTG</option>
                                <option class="form-control" value="1" <?php if($c->template == 1) echo 'selected';?>>TOUAX</option>
                                <option class="form-control" value="2" <?php if($c->template == 2) echo 'selected';?>>STANDARD</option>
                            </select>
                           <?php /* <input type="text" class="form-control" name="template" value="<?php if($c->template == 0) echo 'VTG'; if($c->template == 1) echo 'TOUAX'; if($c->template == 2) echo 'STANDARD';?>" placeholder="template">*/?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Abilitato</label>
                            <select name="abilitato" class="form-control select2" style="width:100%" required>
                                <option value="1" <?php echo ($c->abilitato == 1)?'SI':'NO' ?>>SI</option>
                                <option value="0" <?php echo ($c->abilitato == 0)?'SI':'NO' ?>>NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $c->id ?>">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Chiudi</button>
                    <input type="submit" class="btn btn-primary pull-right" name="modifica" value="Modifica" style="margin-right:5px;">
                </div>
            </div>
        </div>
    </div>
    </form>
<?php } ?>

