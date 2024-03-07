@include("common.header")

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"
        integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery.h5validate.js"></script>

<script> $(document).ready(function () {
        $('#body').h5Validate();
    });</script>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap');

    html {
        scroll-behavior: smooth !important;
    }

    .nav-pills .nav-link.active {
        background-color: transparent
    }

    .nav-link_footer {
        font-family: Lato, sans-serif !important;
        font-style: normal;
        font-weight: 600;
        font-size: 1em;
        line-height: 1.1875em;
        color: #2D2E2E !important;
        padding: 1em;
    }

    .nav-link {
        font-family: Lato, sans-serif !important;
        font-weight: 700 !important;
        font-size: 1.5em;
        line-height: 150%;
        letter-spacing: 0.02em;
        color: #FF7900 !important;
    }

    .dhonko_title {
        font-family: Lato, sans-serif !important;
        font-style: italic;
        font-weight: 900 !important;
        font-size: 0.6666666666666666em;
        line-height: 150%;
        letter-spacing: 0.02em;
    }

    .dhonko_chat {
        font-family: Lato, sans-serif !important;
        font-weight: 700 !important;
        font-size: 48px;
        line-height: 150%;
        letter-spacing: 0.02em;
        color: #00C1B3;
    }

    .dhonko_chat_2 {
        font-family: Lato, sans-serif !important;
        font-size: 0.5833333333333334em;
        font-weight: 400 !important;
        color: #FFFFFF;
        line-height: 150%;
        letter-spacing: 0.02em;
    }

    .telefono {
        display: none !important;
    }

    .telefono2 {
        display: none !important;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }


    @media (min-width: 769px) {
        .desktop {
            display: block;
        }

        .telefono3 {
            display: none;
        }
    }

    @media (max-width: 768px) {

        .dhonko_title {
            font-family: Lato, sans-serif !important;
            font-style: italic;
            font-weight: 900 !important;
            font-size: 0.8333333333333334em;
            line-height: 150%;
            letter-spacing: 0.02em;
        }

        .dhonko_chat {
            font-family: Lato, sans-serif !important;
            font-weight: 700 !important;
            font-size: 1.5em;
            line-height: 150%;
            letter-spacing: 0.02em;
            color: #00C1B3;
        }

        .dhonko_chat_2 {
            font-family: Lato, sans-serif !important;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 188%;
            text-align: justify;

            color: #000000;
        }

        .nav-pills {
            display: none !important;
        }

        .nav {
            flex-direction: column;
        }

        .telefono {
            display: block !important;
            margin-left: 70%;
        }

        .telefono2 {
            background: white;
            display: block !important;
            opacity: 0.90;
            background-size: auto;
        }

        .telefono3 {
            display: block;
        }

        .desktop {
            display: none;
        }
    }

</style>

<nav id="navbar-example2" class=" navbar navbar-light bg-light"
     style="box-shadow: 0px 15px 24px rgba(0,0,0,0.25)!important;z-index: 5;position: fixed;height:4.37em;flex-wrap:nowrap;justify-content:flex-start;padding:0;width: 100vw;background-size: auto;">
    <a class="navbar-brand" href="https://dhonko.it/landing">
        <img width="45" height="45" style="margin-left:35%;" src="<?php echo URL::ASSET('images/Logo_Dhonko.svg')?>">
    </a>
    <ul class="nav nav-pills" style="margin-left:2%;">
        <li class="nav-item">
            <a class="nav-link" href="https://dhonko.it#Video">Cos’è Dhonko</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://dhonko.it#ComeFunziona">Come Funziona ?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://dhonko.it#Contatti">Contatti</a>
        </li>
    </ul>
    <a class="nav-link telefono" data-widget="pushmenu" href="https://dhonko.it#" onclick="scrollOnTop()"
       role="button"><i
                class="fas fa-bars"></i></a>
</nav>

<aside class="telefono2 main-sidebar sidebar-dark-primary elevation-4 ">

    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 100vh;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content" style="padding: 0px 8px; height: 100vh; width: 100%;">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info" style="margin-top: 4em">
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center"
                               href="https://dhonko.it#Video">Cos’è
                                Dhonko?</a>
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center"
                               href="https://dhonko.it#ComeFunziona">Come Funziona</a>
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center"
                               href="https://dhonko.it#Contatti">Contatti</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</aside>

<div data-offset="0" class="container" style="padding-top: 6.5em">
    <div class="col-12 dhonko_chat"
         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
        <p class="my-3 dhonko_title" style="color:#FF7900;">
            Informativa - Art. 13 Regolamento UE 2016/679 (“Regolamento”) <br>
        </p>
        </p>
        <a class="my-3 dhonko_chat_2" style="color:black">
            DHONKO di Infante Anna (di seguito anche solo &ldquo;DHONKO&rdquo;), con sede legale in Via Nazionale 125 ,
            83024, Monteforte Irpino(AV), p. iva 03151520644, pec dhonko@pec.it, in persona del legale rappresentante
            Anna Infante, in qualit&agrave; di Titolare del trattamento, La informa che i tuoi dati saranno trattati per
            le seguenti finalit&agrave;:<br>
            i) Invio, tramite email o SMS, di newsletter e comunicazioni promozionali sui servizi e sulle iniziative di
            DHONKO, la cui base giuridica &egrave; il consenso dell&rsquo;interessato ai sensi dell&rsquo;art. 6.1.a)
            del Regolamento.<br>
            <br>
            Il conferimento dei tuoi Dati Personali per la finalit&agrave; sopra indicata &egrave; facoltativo, ma in
            mancanza dei dati non sar&agrave; possibile per il Titolare inviarti alcuna newsletter.<br>
            Fra i Dati Personali che possono essere raccolti, in modo autonomo o tramite terze parti, ci sono: nome,
            cognome, indirizzo email e numero telefonico.<br>
            <br>
            I tuoi Dati Personali potranno essere condivisi con:<br>
            &bull; persone fisiche autorizzate dal Titolare al trattamento di dati personali in ragione delle loro
            mansioni lavorative e previa sottoscrizione di un accordo di riservatezza (es. dipendenti e amministratori
            di sistema) <br>
            &bull; altri soggetti esterni (a titolo indicativo: istituti di credito, studi professionali, consulenti,
            fornitori di servizi tecnici terzi, corrieri postali, hosting provider, societ&agrave; informatiche, agenzie
            di comunicazione, ecc.) appositamente nominati Responsabili del Trattamento da parte del Titolare ai sensi
            dell&rsquo;art. 28 GDPR.<br>
            &bull; soggetti, enti o autorit&agrave; a cui sia obbligatorio comunicare i tuoi Dati Personali in forza di
            disposizioni di legge o di ordini delle autorit&agrave;.<br>
            <br>
            Per quanto concerne l&rsquo;eventuale trasferimento dei dati verso Paesi Terzi, il Titolare rende noto che
            il trattamento avverr&agrave; secondo una delle modalit&agrave; consentite dalla legge vigente, quali ad
            esempio il consenso dell&rsquo;interessato, l&rsquo;adozione di Clausole Standard approvate dalla
            Commissione Europea, la selezione di soggetti operanti in Paesi considerati sicuri dalla Commissione
            Europea. &Egrave; possibile avere maggiori informazioni, su richiesta, presso il Titolare ai contatti
            sopraindicati.<br>
            <br>
            In relazione alle indicate finalit&agrave;, il trattamento dei dati personali avviene mediante strumenti
            manuali, informatici e telematici con logiche strettamente correlate alle finalit&agrave; stesse e,
            comunque, con modalit&agrave; tali da garantire la sicurezza e la riservatezza dei dati stessi, oltre al
            rispetto degli specifici obblighi sanciti dalla legge.<br>
            <br>
            La durata del trattamento dei Tuoi dati personali &egrave; stabilita per un arco di tempo non superiore al
            conseguimento delle finalit&agrave; per le quali sono raccolti. In ogni caso, i tuoi Dati Personali saranno
            conservati sino alla revoca del consenso.<br>
            <br>
            Ai sensi degli articoli 15 e seguenti del Regolamento, hai diritto di chiedere al Titolare, in qualunque
            momento, l&rsquo;accesso ai tuoi Dati, la rettifica o la cancellazione degli stessi o di richiedere la
            limitazione del trattamento, o di ottenere in un formato strutturato, di uso comune e leggibile da
            dispositivo automatico i dati che ti riguardano nei casi previsti dall&rsquo;art. 20 del Regolamento.<br>
            <br>
            &Egrave; possibile formulare una richiesta di opposizione al trattamento dei tuoi dati ex articolo 21 del
            GDPR nella quale dare evidenza delle ragioni che giustifichino l&rsquo;opposizione: il Titolare si riserva
            di valutare l&rsquo;istanza, che non verrebbe accettata in caso di esistenza di motivi legittimi cogenti per
            procedere al trattamento che prevalgano sui tuoi interessi, diritti e libert&agrave;.<br>
            <br>
            In qualsiasi momento potrai revocare ex art. 7 del Regolamento, il consenso gi&agrave; prestato, senza che
            ci&ograve; pregiudichi la liceit&agrave; del trattamento effettuato anteriormente alla revoca del
            consenso.<br>
            In ogni caso hai sempre diritto di proporre reclamo all&rsquo;autorit&agrave; di controllo competente
            (Garante per la Protezione dei Dati Personali), ai sensi dell&rsquo;art. 77 del Regolamento, qualora
            ritenessi che il trattamento dei tuoi dati sia contrario alla normativa in vigore.<br>
            <br>
            Le richieste vanno rivolte per iscritto al Titolare all&rsquo;indirizzo: privacy@dhonko.it
        </a>
    </div>
    <br>
</div>

<script type="text/javascript">

    window.onbeforeunload = function () {
        $(document.body).setAttribute('id', 'body');
        window.scrollTo(0, 0);
    }

    function closeSidebar() {
        $("body").removeClass("sidebar-open");
        $(document.body).addClass("sidebar-closed sidebar-collapse");
    }

    function scrollOnTop() {
        window.scrollTo(0, 0);
    }
</script>

<!-- /.content-wrapper -->
<footer class="main-footer" style="box-shadow: 0 -7px 24px rgba(0, 0, 0, 0.25);margin-left: 0;text-align: center">
    <div class="row" style="display: flex;align-items: stretch;justify-content: center;flex-wrap: nowrap;">
        <ul class="nav">
            <li class="nav-item" style="padding:1em">
                <a class="nav-link_footer" href="https://dhonko.it#Video">Cos’è Dhonko</a>
            </li>
            <li class="nav-item" style="padding:1em">
                <a class="nav-link_footer" href="https://dhonko.it#ComeFunziona">Come Funziona ?</a>
            </li>
            <li class="nav-item" style="padding:1em">
                <a class="nav-link_footer" href="https://dhonko.it#Contatti">Contatti</a>
            </li>
        </ul>
    </div>
    <br>
    <div class="row" style="display: flex;align-items: stretch;justify-content: center;">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">
                    <svg style="color: #00C1B3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-instagram"
                         viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </div>

                <div class="col-3">
                    <svg style="color: #00C1B3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-facebook"
                         viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <br>
    <img width="104" height="104" src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>">
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/plugins/select2/js/select2.full.min.js"></script>
<script src="/admin/dist/js/adminlte.js"></script>
<script src="/admin/dist/js/demo.js"></script>
<script src="/admin/dist/js/pages/dashboard.js"></script>

<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/admin/plugins/datepicker/bootstrap-datepicker.it.min.js"></script>

<script type="text/javascript" src="/js/dataTables.rowReorder.min.js"></script>


</body>
</html>


<script type="text/javascript">

    $(function () {

        $('.datatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "stateSave": true,

            "oLanguage": {
                "sLengthMenu": "<span> Risultati :</span> _MENU_",
                "oPaginate": {"sFirst": "Primo", "sLast": "Ultimo", "sNext": ">", "sPrevious": "<"}
            },

            "columnDefs": [
                {targets: 'no-sort', orderable: false}
            ]
        });


        $('.select2').select2();

        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });

        $('.date-picker').datepicker({
            format: 'dd/mm/yyyy',
            language: 'it'
        });

    });

</script>