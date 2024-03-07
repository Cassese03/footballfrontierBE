
<div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Appuntamenti <?php echo $utente->nominativo ?></h1>
            <small>Appuntamenti</small>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-body p-0">
                        <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<form method="post">

    <div class="modal fade" id="modal_crea_evento">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="titolo_modal_evento">Crea Evento</h4>
                </div>
                <div class="modal-body row">


                    <div class="col-md-12">
                        <label>Titolo</label>
                        <input type="text" class="form-control" name="title"  value="" required>
                    </div>

                    <div class="col-md-6">
                        <label>Inizio</label>
                        <input type="text" id="crea_evento_inizio" class="form-control datetime-picker" name="start"  required>
                    </div>

                    <div class="col-md-6">
                        <label>Fine</label>
                        <input type="text" id="crea_evento_fine" class="form-control datetime-picker"  name="end" required>
                    </div>

                    <div class="col-md-12">
                        <label>Fine</label>
                        <select name="calendar_id" class="form-control" >
                            <option value="sviluppo.softmaint@gmail.com">Calendario Softmaint</option>
                        </select>
                    </div>



                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="crea_evento" value="Crea Evento">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>

</form>

<form method="post">

    <div class="modal fade" id="modal_evento">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="titolo_modal_evento">Modifica Evento</h4>
                </div>
                <div class="modal-body">

                    <div class="col-md-12">
                        <label>Titolo</label>
                        <input type="text" class="form-control" name="title" id="event_title" value="">
                    </div>

                    <div class="col-md-6">
                        <label>Inizio</label>
                        <input type="text" class="form-control datetime-picker" name="start" id="event_start">
                    </div>

                    <div class="col-md-6">
                        <label>Fine</label>
                        <input type="text" class="form-control datetime-picker"  name="end" id="event_end">
                    </div>

                    <input type="hidden" id="calendar_id" name="calendar_id" value="">
                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" id="event_id" value="">
                    <input type="submit" class="btn btn-danger pull-left" style="margin-left:10px;" name="elimina_evento" value="Elimina Evento">
                    <input type="submit" class="btn btn-primary" name="modifica_evento" value="Modifica">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script type="text/javascript">

    (function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {


            initialView: 'timeGridWeek',
            nowIndicator: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            selectable: true,
            googleCalendarApiKey: 'AIzaSyC_62daEAeded_RAJ1lvm9EqFxKzej_L3Q',
            locale: 'it',


            eventSources: [
                {
                    googleCalendarId: 'it.italian#holiday@group.v.calendar.google.com',
                    color: '#e74c3c',
                },

                {
                    googleCalendarId: 'sviluppo.softmaint@gmail.com',
                    color: '#367fa9',
                },
            ],

            eventClick: function (arg) {

                arg.jsEvent.preventDefault();

                console.log(arg.event);
                calendar_id = arg.event.source.internalEventSource.meta.googleCalendarId;
                id = arg.event.id;
                title = arg.event.title;

                start = arg.event.start.toLocaleString().replace('T',' ').replace(',',' ');

                console.log(start);
                end = arg.event.end.toLocaleString().replace('T',' ').replace(',',' ');

                apri_evento(id, title, start, end, calendar_id);


                // window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

                // arg.jsEvent.preventDefault() // don't navigate in main tab


            },

            select: function(info) {

                console.log(info);
                data_inizio = info.startStr.substring(0,10).replace('T',' ');
                dArr = data_inizio.split("-");  // ex input "2010-01-18"
                data_inizio = dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"

                if(info.startStr.substring(11,19) != '') {
                    data_inizio = data_inizio + ' ' + info.startStr.substring(11, 19);
                } else data_inizio = data_inizio + ' 09:00:00';

                data_fine = info.endStr.substring(0,10).replace('T',' ');
                dArr = data_fine.split("-");  // ex input "2010-01-18"
                data_fine = dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"

                if(info.endStr.substring(11,19) != '') {
                    data_fine = data_fine + ' ' + info.endStr.substring(11, 19);
                } else {
                    temp = info.startStr.substring(0,10).replace('T',' ');
                    dArr = temp.split("-");  // ex input "2010-01-18"
                    temp = dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"

                    data_fine = temp + ' 19:30:00';
                }


                $('#crea_evento_inizio').val(data_inizio);
                $('#crea_evento_fine').val(data_fine);
                crea_evento()
            },

            loading: function (bool) {
                //document.getElementById('loading').style.display = bool ? 'block' : 'none';
            }

        });
        calendar.render();
    })();


    function apri_evento(id,title,start,end,calendar_id){
        $('#modal_evento').modal('show');
        $('#event_id').val(id);
        $('#event_title').val(title);
        $('#event_start').val(start);
        $('#event_end').val(end);
        $('#calendar_id').val(calendar_id);
    }

    function crea_evento(){
        $('#modal_crea_evento').modal('show');
    }

</script>