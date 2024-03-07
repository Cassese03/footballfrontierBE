<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Benvenuto <?php echo $utente->nominativo ?></h1>
                <small>Dashboard Admin </small>
            </div><!--
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <button onclick="$('#modal_inserisci').modal('show')" class="btn btn-block btn-success btn-flat">
                        Aggiungi
                    </button>
                </ol>
            </div> -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<script>
    $(document).ready(function () {
        $('#id_utente').select2({
            dropdownParent: $('#modal_aggiungi_partecipante')
        });
    });
</script>
<?php // echo date('Y-m-d H:i:s', strtotime('365 days'));?>
        <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/logo_dhonko.png"
                                 alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $dettaglio->localita; ?> </h3>
                        <!-- <p class="text-muted text-center">Software Engineer</p>-->
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Partenza</b> <a class="float-right"><?php echo $dettaglio->data_andata;?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Arrivo</b> <a class="float-right"><?php echo $dettaglio->data_ritorno;?></a>
                            </li>
                        </ul>
                        <a href="#"
                           class="btn btn-<?php echo ($dettaglio->stato == 1)?'primary':'danger'?> btn-block"><b><?php echo ($dettaglio->stato == 1) ? 'Aperto' : 'Chiuso';?></b></a>
                    </div>

                </div>


                <div class="card card-primary">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <div>Info Viaggio</div>
                        <div style="margin-left: 75%" onclick="$('#modal_info').modal('show')"><i
                                    class="fas fa-info mr-1"></i></div>
                    </div>

                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Tipo Viaggio</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->tipo_viaggio) and $info->tipo_viaggio != '') ? $info->tipo_viaggio : 'N/D'?>
                        </p>
                        <hr>
                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Budget</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->budget) and $info->budget != '') ? number_format($info->budget, 2, '.', '') : 'N/D'?>
                        </p>
                        <hr>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Pernottamento</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->pernottamento) and $info->pernottamento != '') ? $info->pernottamento : 'N/D'?>

                        </p>
                        </hr>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Lingue</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->lingue) and $info->lingue != '') ? $info->lingue : 'N/D'?>
                        </p>
                        </hr>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Social</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->social) and $info->social != '') ? $info->social : 'N/D'?>
                        </p>
                        </hr>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Eta'</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->eta_min) and $info->eta_min != '') ? $info->eta_min . '/' : '(N/D) / '?>
                            <?php echo (isset($info->eta_max) and $info->eta_max != '') ? $info->eta_max : '(N/D)'?>
                        </p>
                        </hr>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Tipo Gruppo</strong>
                        <p class="text-muted">
                            <?php echo (isset($info->gruppo) and $info->gruppo != '') ? $info->gruppo : 'N/D'?>
                        </p>
                        </hr>
                    </div>

                </div>

                <div class="card card-primary">
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <div>Partecipanti</div>
                        <!-- onclick="$('#modal_info').modal('show')" -->
                        <div style="margin-left: 75%" onclick="$('#modal_aggiungi_partecipante').modal('show')"><i
                                    class="fas fa-plus mr-1"></i></div>
                    </div>

                    <div class="card-body">
                        <?php foreach($partecipanti as $p){?>
                        <div style="width: 100%;" class="user-block">
                            <img class="img-circle img-bordered-sm"
                                 src="<?php echo ($p->img != '')? $p->img:'/logo_dhonko.png'?>" alt="user image">
                            <span class="username">
                                <a href="#"><?php echo $p->nome . ' ' . $p->cognome;?></a>
                                <a onclick="<?php echo ($p->ruolo != 'CREATORE') ? '$(\'#modal_elimina_partecipante_'.$p->id_utente.'\').modal(\'show\');':'alert(\'Impossibile eliminare il Creatore del Viaggio\')'?>"
                                   class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description"><?php echo $p->citta . ' - ' . $p->nazione ?></span>
                        </div>
                        <br>
                        <br>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#foto" data-toggle="tab">Foto Viaggio</a>
                            </li>
                            <li class="nav-item"><a class="nav-link active" href="#roadmap"
                                                    data-toggle="tab">RoadMap</a></li>
                            <li class="nav-item"><a class="nav-link" href="#consigli" data-toggle="tab">Consigli
                                    Roadmap</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="foto">
                                <div style="text-align: right">
                                    <button class="btn-danger" onclick="$('#modal_aggiungi_foto').modal('show');">
                                        Aggiungi Foto
                                    </button>
                                </div>
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                             src="<?php echo $partecipanti[0]->img; ?>"
                                             alt="user image">
                                        <span class="username">
                                        <a href="#"><?php echo $partecipanti[0]->nome . ' ' . $partecipanti[0]->cognome  ?></a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description"><?php echo $partecipanti[0]->ruolo . ' del Viaggio';?></span>
                                    </div>

                                    <div class="timeline-body">
                                        <?php foreach($immagini_viaggio as $iv){?>
                                        <img width="200" height="200" src="<?php echo $iv->link;?>" alt="...">
                                        <?php } ?>
                                    </div>
                                    <!--<p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
                                    </p>
                                    <input class="form-control form-control-sm" type="text"
                                           placeholder="Type a comment">
                                </div>


                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg"
                                             alt="User Image">
                                        <span class="username">
<a href="#">Sarah Ross</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>

                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>
                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                                             alt="User Image">
                                        <span class="username">
<a href="#">Adam Jones</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="../../dist/img/photo2.png"
                                                         alt="Photo">
                                                    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                                </div>

                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg"
                                                         alt="Photo">
                                                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
                                    </p>
                                    <input class="form-control form-control-sm" type="text"
                                           placeholder="Type a comment">-->
                                </div>

                            </div>

                            <div class="tab-pane active" id="roadmap">
                                <div style="text-align: right">
                                    <button class="btn-danger" onclick="$('#modal_aggiungi').modal('show');">
                                        Aggiungi Tappa RoadMap
                                    </button>
                                </div>
                                <?php foreach ($date_roadmap as $d) { ?>
                                <div class="timeline timeline-inverse">
                                    <div class="time-label">
                                        <span class="bg-danger">
                                            <?php echo date('d M Y', strtotime($d->data_inizio))?>
                                        </span>
                                    </div>
                                    <?php foreach ($roadmap as $r) { ?>
                                    <?php if($d->data_inizio == date('Y-m-d', strtotime($r->data_inizio))){?>
                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>
                                        <div class="timeline-item">
                                                <span class="time"><i
                                                            class="far fa-clock"></i> <?php echo date('H.i', strtotime($r->data_inizio))?><?php echo ($r->data_fine) ? ' / ' . date('H.i', strtotime($r->data_fine)) : '';?></span>
                                            <h3 class="timeline-header"><a href="#"><?php echo $r->tipo_roadmap ?></a>
                                            </h3>
                                            <div class="timeline-body">
                                                <?php echo $r->content?>
                                                <div class="timeline-body" style="color: grey">
                                                    <?php echo $r->indirizzo?>
                                                </div>
                                            </div>
                                            <div class="timeline-footer" style="text-align: right">
                                                <a onclick="$('#modal_modifica_road_<?php echo $r->id;?>').modal('show');"
                                                   class="btn btn-primary btn-sm">Modifica</a>
                                                <a onclick="$('#modal_elimina_road_<?php echo $r->id;?>').modal('show');"
                                                   class="btn btn-danger btn-sm">Elimina Attività</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <?php /*
                                            <!-- QUI FINISCE IL FOREACH -->
                                    <div class="time-label">
                                            <span class="bg-danger">
                                                12 Gen 2023
                                            </span>
                                    </div>


                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i></span>
                                            <h3 class="timeline-header"><a href="#">Pernottamento</a></h3>
                                            <div class="timeline-body">
                                                Albergo "B&B Mario" Via Franchini
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Modifica</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fas fa-camera bg-purple"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 12.30 / 14.30</span>
                                            <h3 class="timeline-header"><a href="#">Attrazioni</a></h3>
                                            <div class="timeline-body">
                                                Museo del Vacolo Rosso
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Modifica</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fas fa-train bg-primary"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> </span>
                                            <h3 class="timeline-header"><a href="#">Trasporti</a></h3>
                                            <div class="timeline-body">
                                                Italo Treno
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Modifica</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <i class="fas fa-user bg-info"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
                                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted
                                                your friend request
                                            </h3>
                                        </div>
                                    </div>


                                    <div>
                                        <i class="fas fa-comments bg-warning"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
                                            </h3>
                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="time-label">
<span class="bg-success">
    13 Gen 2023
</span>
                                    </div>


                                    <div>
                                        <i class="fas fa-camera bg-purple"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                            </h3>
                                            <div class="timeline-body">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <i class="far fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div>
<div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
*/?>
                            </div>

                            <div class="tab-pane" id="consigli">
                                <!--
                                                                <div class="post">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                                                             alt="user image">
                                                                        <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                                                    </div>

                                                                    <p>
                                                                        Lorem ipsum represents a long-held tradition for designers,
                                                                        typographers and the like. Some people hate it and argue for
                                                                        its demise, but others ignore the hate as they create awesome
                                                                        tools to help create filler text for everyone from bacon lovers
                                                                        to Charlie Sheen fans.
                                                                    </p>
                                                                    <p>
                                                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                                                            Share</a>
                                                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                                                            Like</a>
                                                                        <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                                </span>
                                                                    </p>
                                                                    <input class="form-control form-control-sm" type="text"
                                                                           placeholder="Type a comment">
                                                                </div>


                                                                <div class="post clearfix">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg"
                                                                             alt="User Image">
                                                                        <span class="username">
                                <a href="#">Sarah Ross</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                                                        <span class="description">Sent you a message - 3 days ago</span>
                                                                    </div>

                                                                    <p>
                                                                        Lorem ipsum represents a long-held tradition for designers,
                                                                        typographers and the like. Some people hate it and argue for
                                                                        its demise, but others ignore the hate as they create awesome
                                                                        tools to help create filler text for everyone from bacon lovers
                                                                        to Charlie Sheen fans.
                                                                    </p>
                                                                    <form class="form-horizontal">
                                                                        <div class="input-group input-group-sm mb-0">
                                                                            <input class="form-control form-control-sm" placeholder="Response">
                                                                            <div class="input-group-append">
                                                                                <button type="submit" class="btn btn-danger">Send</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>


                                                                <div class="post">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                                                                             alt="User Image">
                                                                        <span class="username">
                                <a href="#">Adam Jones</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-sm-6">
                                                                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <img class="img-fluid mb-3" src="../../dist/img/photo2.png"
                                                                                         alt="Photo">
                                                                                    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                                                                </div>

                                                                                <div class="col-sm-6">
                                                                                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg"
                                                                                         alt="Photo">
                                                                                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <p>
                                                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                                                            Share</a>
                                                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                                                            Like</a>
                                                                        <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                                </span>
                                                                    </p>
                                                                    <input class="form-control form-control-sm" type="text"
                                                                           placeholder="Type a comment">
                                                                </div>
                                -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<div class="modal" id="modal_info" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="post" enctype="multipart/form-data">
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
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Tipo Viaggio</strong>
                        </p>
                        <input type="text" name="info_tipo_viaggio"
                               value="<?php echo (isset($info->tipo_viaggio) and $info->tipo_viaggio!='') ? $info->tipo_viaggio:''?>"
                               style="width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci il tipo di viaggio...">
                    </div>
                    <br><br>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Budget</strong>
                        </p>
                        <input type="text" name="info_budget"
                               value="<?php echo (isset($info->budget) and $info->budget!='') ? number_format($info->budget,2,'.',''):''?>"
                               style="margin-left: 10%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci il budget del viaggio...">
                    </div>
                    <br><br>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Pernottamento</strong>
                        </p>
                        <input type="text" name="info_pernottamento"
                               value="<?php echo (isset($info->pernottamento) and $info->pernottamento!='') ? $info->pernottamento:''?>"
                               style="margin-left: 10%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci pernottamento del viaggio...">
                    </div>
                    <br><br>
                    <?php $lingua = explode(',', $info->lingue)?>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Lingue</strong>
                        </p>
                        <select name="info_lingua_1" class="form-control select2" style="width:45%"
                                required>
                            <option value="">Nessuna Lingua Selezionata</option>
                            <?php foreach($lingue as $l){?>
                            <option
                                <?php echo (isset($lingua[0]) and $lingua[0] != '' and $lingua[0] == $l->lingua) ? 'selected' : ''?> value="<?php echo $l->lingua?>"><?php echo $l->lingua;?></option>
                            <?php } ?>
                        </select>
                        <select name="info_lingua_2" class="form-control select2" style="width:45%">
                            <option value="">Nessuna Lingua Selezionata</option>
                            <?php foreach($lingue as $l){?>
                            <option
                                <?php echo (isset($lingua[1]) and $lingua[1] != '' and $lingua[1] == $l->lingua) ? 'selected' : ''?> value="<?php echo $l->lingua?>"><?php echo $l->lingua;?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <br><br>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Social</strong>
                        </p>
                        <input type="text" name="info_social"
                               value="<?php echo (isset($info->social) and $info->social!='') ? $info->social:''?>"
                               style="margin-left: 10%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci i social del viaggio...">
                    </div>
                    <br><br>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Eta'</strong>
                        </p>
                        <input type="text" name="info_eta_min"
                               value="<?php echo (isset($info->eta_min) and $info->eta_min!='') ? $info->eta_min:''?>"
                               style="margin-left: 5%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci eta minima del viaggio...">
                        <input type="text" name="info_eta_max"
                               value="<?php echo (isset($info->eta_max) and $info->eta_max!='') ? $info->eta_max:''?>"
                               style="margin-left: 5%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci eta massima del viaggio...">
                    </div>
                    <br><br>
                    <div class="card-header" style="display: flex;justify-content: space-between;">
                        <p class="text-left">
                            <strong><i class="fas fa-book mr-1"></i> Tipo Gruppo</strong>
                        </p>
                        <input type="text" name="info_tipo_gruppo"
                               value="<?php echo (isset($info->gruppo) and $info->gruppo!='') ? $info->gruppo:''?>"
                               style="margin-left: 10%;width: 100%;border-top: none;border-left: none;border-right:none"
                               placeholder="Inserisci il tipo del gruppo del viaggio...">
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="submit" name="modifica" value="modifica">Modifica
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php foreach ($partecipanti as $p){?>

<div class="modal" id="modal_elimina_partecipante_<?php echo $p->id_utente;?>" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Sei sicuro di eliminare <?php echo $p->nome . ' ' . $p->cognome;?> da questo
                    Viaggio ?</p>
            </div>
            <div class="modal-footer" style="display: flex;justify-content: space-between;">
                <button style="width: 48%" class="btn btn-danger btn-block"
                        data-dismiss="modal">No
                </button>
                <button style="width: 48%" class="btn btn-success btn-block"
                        onclick="elimina_partecipante(<?php echo $p->id_utente;?>)">Si
                </button>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php foreach($roadmap as $r){ ?>

<div class="modal" id="modal_elimina_road_<?php echo $r->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header" style="height: 100000%">
                <div class="icon-box"
                     style="color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                    <i class="fa fa-solid fa-check"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Sei sicuro di eliminare questa attività ?</p>
            </div>
            <div class="modal-footer" style="display: flex;justify-content: space-between;">
                <button style="width: 48%" class="btn btn-danger btn-block"
                        data-dismiss="modal">No
                </button>
                <button style="width: 48%" class="btn btn-success btn-block"
                        onclick="delete_road(<?php echo $r->id;?>)">Si
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_modifica_road_<?php echo $r->id?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                <p class="text-center">Inserisci tipo di Attività da svolgere </p>
                <select id="id_tipo_roadmap_<?php echo $r->id?>" class="form-control select2" style="width:100%"
                        required>
                    <?php foreach($tipo_roadmap as $t){?>
                    <option
                        <?php echo ($r->id_tipo_roadmap == $t->id) ? 'selected' : ''?> value="<?php echo $t->id?>"><?php echo $t->title;?></option>
                    <?php } ?>
                </select>
                <br>
                <br>
                <p class="text-center">Inserisci il contenuto</p>
                <input value="<?php echo $r->content ;?>" type="text" id="content_<?php echo $r->id?>"
                       style="width: 100%;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci l'attività da svolgere...">
                <br>
                <br>
                <p class="text-center">Inserisci l' indirizzo</p>
                <input value="<?php echo $r->indirizzo ;?>" type="text" id="indirizzo_<?php echo $r->id?>"
                       style="width: 100%;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci l'indirizzo della roadmap...">
                <br>
                <br>
                <p class="text-center">Inserisci data inizio</p>
                <input value="<?php echo $r->data_inizio ;?>" type="datetime-local" id="data_inizio_<?php echo $r->id?>"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di inizio attivita'...">
                <br><br>
                <p class="text-center">Inserisci data fine (facoltativo)</p>
                <input value="<?php echo $r->data_fine ;?>" type="datetime-local" id="data_fine_<?php echo $r->id?>"
                       style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                       placeholder="Inserisci la data di fine attivita'...">
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_viaggio_<?php echo $r->id?>" value="<?php echo $id; ?>">
                <button class="btn btn-success btn-block" type="button" value="modifica_road" name="modifica_road"
                        onclick="modifica_road(<?php echo $r->id;?>)">
                    Modifica
                </button>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div class="modal" id="modal_aggiungi" role="dialog" aria-hidden="true">
    <form method="post" enctype="multipart/form-data">
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
                    <p class="text-center">Inserisci tipo di Attività da svolgere </p>
                    <select name="id_tipo_roadmap" class="form-control select2" style="width:100%" required>
                        <?php foreach($tipo_roadmap as $t){?>
                        <option value="<?php echo $t->id?>"><?php echo $t->title;?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <p class="text-center">Inserisci il contenuto</p>
                    <input type="text" name="content"
                           style="width: 100%;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci l'attività da svolgere...">
                    <br>
                    <br>
                    <p class="text-center">Inserisci l' indirizzo</p>
                    <input type="text" name="indirizzo"
                           style="width: 100%;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci l'indirizzo della roadmap...">
                    <br>
                    <br>
                    <p class="text-center">Inserisci data inizio</p>
                    <input type="datetime-local" name="data_inizio"
                           style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci la data di inizio attivita'...">
                    <br><br>
                    <p class="text-center">Inserisci data fine (facoltativo)</p>
                    <input type="datetime-local" name="data_fine"
                           style="width: 100%;text-align:center;border-top: none;border-left: none;border-right:none"
                           placeholder="Inserisci la data di fine attivita'...">
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_viaggio" value="<?php echo $id;?>">
                    <button class="btn btn-success btn-block" type="submit" value="crea_road" name="crea_road">
                        Inserisci
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal" id="modal_aggiungi_partecipante" role="dialog" aria-hidden="true">
    <form method="post" enctype="multipart/form-data">
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
                    <p class="text-center">Inserisci Nome o Cognome del Partecipante da inserire</p>
                    <select name="id_utente" onchange="select_partecipante()" id="id_utente"
                            class="form-control select2" style="width:100%" required>
                        <?php //TODO LOAD AJAX DI PARTECIPANTI ?>
                        <option value="21">Lorenzo Cassese</option>
                        <option value="4">Fabio Danubbio</option>
                        <option value="1">Fabio Giovine</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_viaggio" value="<?php echo $id;?>">
                    <input type="hidden" name="ruolo" value="PARTECIPANTE">
                    <button class="btn btn-success btn-block" type="submit" value="aggiungi_partecipante"
                            name="aggiungi_partecipante">
                        Aggiungi
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>


<div class="modal" id="modal_aggiungi_foto" role="dialog" aria-hidden="true">
    <form method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box"
                         style="padding-top:1%;color: #fff;position: absolute;margin: 0 auto;left: 0;right: 0;width:10%;height: auto;border-radius: 50%;z-index: 9;background: #82ce34;text-align: center;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                        <i class="fa fa-solid fa-lightbulb"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p style="text-align: center"> Inserisci la nuova Foto </p>
                    <div style="display: flex">
                        <input type="file" name="file_<?php echo $id;?>"
                               class="form-control"
                               placeholder="Inserisci un nuovo elemento..."
                               style="width:80%;height:auto;border-right:transparent;border-top-right-radius: 0px;border-bottom-right-radius: 0px" required>
                        <button type="submit" name="insert_image" value="submit"
                                class="form-control"
                                style="width:15%;height: auto;border-left:transparent;border-top-left-radius: 0px;border-bottom-left-radius: 0px">
                            <i class="fas fa-plus"></i>
                        </button>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">

    function select_partecipante() {
        like = document.getElementById('id_utente').value;

        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/search_partecipante') ?>/" + encodeURIComponent(like),
            context: document.body,
            success: (function (result) {
                document.getElementById('id_utente').innerHTML = result;
            }),
            error: (function (result) {
            })
        });

    }

    function delete_road(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/delete_road') ?>/" + id,
            context: document.body,
            success: (function (result) {
                location.reload()
            }),
            error: (function (result) {
                alert('Errore! Roadmap non eliminata.');
                location.reload();
            })
        });
    }

    function elimina_partecipante(id) {
        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/elimina_partecipante') ?>/" + id + "/" + <?php echo $id;?>,
            context: document.body,
            success: (function (result) {
                location.reload()
            }),
            error: (function (result) {
                alert('Errore! Utente non eliminato dal viaggio.');
                location.reload();
            })
        });
    }

    function modifica_road(id) {
        content = document.getElementById('content_' + id).value;
        data_inizio = document.getElementById('data_inizio_' + id).value;
        data_fine = document.getElementById('data_fine_' + id).value;
        id_tipo_roadmap = document.getElementById('id_tipo_roadmap_' + id).value;
        indirizzo = document.getElementById('indirizzo_' + id).value;

        $.ajax({
            url: "<?php echo URL::asset('admin/ajax/update_road') ?>/" + id + "/" + encodeURIComponent(content) + "/" + data_inizio + "/" + data_fine + "/" + id_tipo_roadmap + "/" + encodeURIComponent(indirizzo),
            context: document.body,
            success: (function (result) {
                location.reload()
            }),
            error: (function (result) {
                alert('Errore! Roadmap non modificata.');
                location.reload();
            })
        });
    }
</script>



