<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"
            integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="jquery.h5validate.js"></script>

    <script>
        $(document).ready(function () {
            $("body").h5Validate();
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dhonko </title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.css">
    <link rel="stylesheet" href="/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo URL::asset('icona_dhokno.png') ?>">
    <link rel="stylesheet" href="/IconPicker/dist/fontawesome-5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/IconPicker/dist/iconpicker-1.5.0.css">

    <link href="/admin/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet"/>
    <link href="/admin/plugins/datepicker/bootstrap-datepicker3.css" rel="stylesheet"/>


    <link rel="stylesheet" type="text/css" href="/css/rowReorder.dataTables.min.css">

    <link href="<?php echo URL::asset('fullcalendar-5.6.0/lib/main.css') ?>" rel='stylesheet'/>
    <script src="<?php echo URL::asset('fullcalendar-5.6.0/lib/main.js') ?>"></script>
    <script src="<?php echo URL::asset('fullcalendar-5.6.0/lib/locales-all.js') ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap"
          rel="stylesheet">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('/sfondo_login.png');
            background-size: auto;
            width: 100vw;
            overflow-y: visible !important;
            -ms-overflow-y: visible !important;
            overflow-x: hidden !important;
            -ms-overflow-x: hidden !important;
        }

        .scroll-element,
        .scroll-element {
            min-height: 300px;
            height: 100%;
        }

        @media screen and (max-width: 650px) {
            .scroll-container,
            .scroll-container:nth-of-type(even) {
                flex-direction: column;
                justify-content: center;
                align-content: inherit;
            }

            .scroll-element {
                height: 100%;
            }

            .scroll-element,
            .scroll-caption {
                width: 100%;
            }

            #json13{
                width: 80%;
                transform: scale(1.5)!important;
                margin: 0 auto 140px auto;
            }

            #json24{
                width: 80%!important;
                margin: -20% auto 0 auto;
                display: block;
                -webkit-transform: none!important;
            }

            #json15{
                margin-top: -20%;
                -webkit-transform: none!important;
                margin-bottom:0%!IMPORTANT;

            }

        }

        .js-scroll {
            opacity: 0;
            transition: opacity 500ms;
        }

        .js-scroll.scrolled {
            opacity: 1;
        }

        .scrolled.fade-in {
            animation: fade-in 1s ease-in-out both;
        }

        @keyframes slide-in-left {
            0% {
                -webkit-transform: translateX(-100px);
                transform: translateX(-100px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slide-in-right {
            0% {
                -webkit-transform: translateX(100px);
                transform: translateX(100px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fade-in-bottom {
            0% {
                -webkit-transform: translateY(50px);
                transform: translateY(50px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

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

        .textarea_dhonko {
            border-radius: 7px;
            width: 100%;
            border: none;
            background: #D9D9D9;
        }

        .input_dhonko {
            height: 30px;
            border-radius: 7px;
            width: 100%;
            border: none;
            background: #D9D9D9;
        }

        .header_text {
            font-family: Lato, sans-serif !important;
            font-size: 1.4375em;
            font-style: italic;
            font-weight: 800 !important;
            line-height: 28px;
            letter-spacing: 0em;
            text-align: center;
            color: white;
        }

        .dhonko_button {
            border: none;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
            background-color: #FF7900;
            color: white;
            width: 100%;
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

        .dhonko_chat_3 {
            font-family: Lato, sans-serif !important;
            font-size: 3.25em;
            color: #FFFFFF;
            line-height: 1.500em;
            letter-spacing: 0.02em;
        }

        .telefono {
            display: none !important;
        }

        .telefono2 {
            display: none !important;
        }

        .telefono3 {
            display: none !important;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .prima_foto {
            background: url('<?php echo  URL::ASSET('images/SAGGIO DHONKO LANDING PAGE.png')?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: stretch;
            justify-content: center;
            height: 100vh !important;
            width: -webkit-fill-available;

        }

        .video {
            display: flex;
            justify-content: center;
            min-height: 250px;
            width: -webkit-fill-available;
        }

        .no_foto {
            <?php /*overflow-x: hidden;*/?>
             display: flex;
            align-items: stretch;
            justify-content: center;
            height: 100%;
            width: -webkit-fill-available;
        }

        .overimage {
            width: 100%;
            text-align: center;
            display: flex;
            align-items: stretch;
            height: auto;
            background-size: cover;
            opacity: 0.9;
        }

        .overimage2 {
            width: 100%;
            text-align: center;
            display: flex;
            align-items: stretch;
            height: 50vh;
            background-size: cover;
            opacity: 0.9;
        }

        @media (min-width: 769px) {
            #dhonko_2 {
                margin-top: 0%;
            }

            #diventa_un_pioniere {
                font-weight: 900 !important;
                font-style: italic;
                width: 100%;
                color: #FF7900;
            }

            #dhonko_3 {
                font-size: 2.5em !important;
                font-weight: 400 !important;
                font-style: italic;
            }

            #desktop_1 {
                width: 120%;
            }

            #desktop_2 {
                width: 125%;
                margin-left: -10%;
            }

            #json8 {
                width: 75%;
                height: 75%;
            }

            #json1 {
                -webkit-transform: translate3d(-8em, 0, 0);
                transform: translate3d(-8em, 0, 0);
            }

            #text11 {
                -webkit-transform: translate3d(-3em, 0, 0);
                transform: translate3d(-3em, 0, 0);
            }

            #json5 {
                width: 100%;
                height: 100%;
                margin-top: -10%;
                -webkit-transform: translate3d(-4em, 0px, 0px);
                transform: translate3d(-4em, 0px, 0px);
            }

            #linea_4 {
                margin-top: -8%;
            }

            .video {
                height: 100vh !important;
                width: -webkit-fill-available !important;
            }
        }

        @media (max-width: 768px) {
            .label_input {
                font-family: Lato, sans-serif !important;
                font-size: 16px !important;
            }

            #diventa_un_pioniere {
                font-weight: 700 !important;
                font-style: italic;
                width: 100%;
                color: #FF7900;
            }

            #json12 {
                width: 70%;
                margin: 0 auto;
                display: block;
                /*
                width: 40%;
                height: 40%;
                -webkit-transform: translate3d(-3em, 0px, 0px);
                transform: translate3d(-3em, 0px, 0px);

                 */
            }

            #dhonko_2 {
                margin-top: 5%;
                overflow: hidden!important;
            }

            #json1 {
                -webkit-transform: scale(1.35);
                transform: scale(1.35);
            }

            #dhonko_3 {
                font-size: 1.3125em !important;
                font-weight: 400 !important;
                font-style: italic;
            }

            #come_funziona_2 {
                overflow: hidden !important;
                margin-top: -10%;
            }

            #come_funziona_3 {
                overflow: hidden !important;
            }

            #come_funziona_4 {
                margin-top: 5em !important;
            }

            #come_funziona_4_dhonko {
                /*margin-top: 5em !important;*/
            }

            #come_funziona_5 {
                margin-top: 6em !important;
            }

            #json5 {
                -webkit-transform: scale(1.40);
                transform: scale(1.40);
                width: 99vw;
                height: 100%;
            }

            #funziona_3 {
                margin-top: 5%;
            }

            .no_foto {
                <?php /* overflow-x:hidden;
                -ms-overflow-x:hidden;*/?>
                 display: flex;
                align-items: stretch;
                justify-content: center;
                height: 100%;
                width: -webkit-fill-available;
            }

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
                font-size: 0.75em;
                font-weight: 400 !important;
                color: #FFFFFF;
                line-height: 150%;
                letter-spacing: 0.02em;
            }

            .dhonko_chat_3 {
                font-family: Lato, sans-serif !important;
                font-size: 1.75em;
                color: #FFFFFF;
                line-height: 150%;
                letter-spacing: 0.02em;
            }

            .dhonko_foto {
                height: 100%;
                width: 100%;
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

            .telefono3 {
                display: block !important;
            <?php /* overflow: initial;*/?>

            }

            .telefono2 {
                background: white;
                display: block !important;
                opacity: 0.90;
                background-size: auto;
            }

            .telefono4 {
                display: none !important;
            }
        }

    </style>
</head>


<nav id="navbar-example2" class=" navbar navbar-light bg-light"
     style="width: 100%;box-shadow: 0px 15px 24px rgba(0,0,0,0.25)!important;z-index: 5;position: fixed;height:4.37em;flex-wrap:nowrap;justify-content:flex-start;padding:0;width: -webkit-fill-available;/*background: url('https://dhonko.it/sfondo_login.png');*/background-size: auto;">
    <a class="navbar-brand" href="#">
        <img width="45" alt="dhonko_foto" height="45" style="margin-left:35%;"
             src="<?php echo URL::ASSET('images/Logo_Dhonko.svg')?>">
    </a>
    <ul class="nav nav-pills" style="margin-left:2%;">
        <li class="nav-item">
            <a class="nav-link" href="#Video">Cos’è Dhonko</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ComeFunziona">Come Funziona ?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Contatti">Contatti</a>
        </li>
    </ul>
    <a class="nav-link telefono" data-widget="pushmenu" href="#" onclick="scrollOnTop()" role="button"><i
                class="fas fa-bars"></i></a>
</nav>

<aside class="telefono2 main-sidebar sidebar-dark-primary elevation-4 ">

    <div class="sidebar os-host os-theme-light <?php /*os-host-overflow os-host-overflow-y*/?> os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 100vh;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="/*overflow-y: hidden;*/">
                <div class="os-content" style="padding: 0px 8px; height: 100vh; width: 100%;">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info" style="margin-top: 4em">
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center" href="#Video">Cos’è
                                Dhonko?</a>
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center"
                               href="#ComeFunziona">Come Funziona</a>
                            <a class="nav-link" onclick="closeSidebar()" style="text-align: center" href="#Contatti">Contatti</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</aside>

<div data-offset="0">

    <div id="CoseDhonko" class="prima_foto">
        <div class="row text-center overimage">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div style="padding-top: 6.5em">
                    <img width="275" alt="dhonko_foto" height="275"
                         src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>">
                </div>
                <?php if($messaggio != ''){ ?>
                    <h4 class="my-3 dhonko_chat_3" style="font-size:1.5em;line-height: normal;margin-bottom:0!important;font-weight: 700!important;"><?php echo $messaggio ?></h4><br>
                <?php } ?>
                <h4 class="my-3 dhonko_chat_3" style="    line-height: normal;margin-bottom:0!important;font-weight: 700!important;">FAI MATCH CON LA VITA</h4>
                <h4 class="dhonko_chat_3" id="dhonko_3">Sogna, crea, pianifica,
                    parti.
                    VIVI.<br>
                    Il mondo è lì fuori che ti aspetta!
                </h4>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div id="Video" class="video">
        <iframe style="width: 100%;" class="video scroll-element js-scroll scrolled" id="video"
                src="https://www.youtube.com/embed/rgUkVFFHkq4?enablejsonapi=1&controls=1&rel=0"></iframe>
    </div>

    <!--
    <div id="Video" class="video telefono3">
        <iframe class="video scroll-element js-scroll scrolled" id="video"
                src="https://www.youtube.com/embed/6Gx8m6FmD7k?autoplay=1&mute=1&enablejsapi=1"></iframe>
    </div>
    -->

    <div id="ComeFunziona" class="no_foto">
        <div class="row text-center overimage">
            <div class="col-md-1 telefono4"></div>
            <div class="col-md-1 telefono3"></div>
            <div class="col-md-1 telefono3"></div>
            <div class="col-md-10">
                <div style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                    <h4 class="my-3 dhonko_chat" style="color: #FF7900;">Come Funziona?</h4>
                </div>
                <div class="row" id="dhonko_2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json1">
                            <script>
                                var json1 = bodymovin.loadAnimation({

                                    container: document.getElementById('json1'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 1.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <?php /*<div class="telefono3 col-2 dhonko_chat"></div>
                    <div class="telefono3 col-12 dhonko_chat"
                         style="position:absolute;transform: translate3d(0,9em,0px);">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="linea12">
                            <script>
                                var linea12 = bodymovin.loadAnimation({

                                    container: document.getElementById('linea12'),

                                    path: 'https://dhonko.it/images/LINEA 11_MOBILE.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>*/?>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat" id="text11"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                        <p class="my-3 dhonko_title" id="desktop_1" style="color:#00C1B3;">
                            CREA IL VIAGGIO DEI TUOI SOGNI O UNISCITI A QUELLO DI ALTRI VIAGGIATORI
                            <br>
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            Scegli dove andare, compila la tua scheda viaggio
                            o cerca tra le varie mete presenti nella Home
                            e unisciti agli altri gruppi.
                        </a>
                    </div>
                    <div class="telefono3 col-md-6 dhonko_chat">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json12">
                            <script>
                                var json12 = bodymovin.loadAnimation({

                                    container: document.getElementById('json12'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 2.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="telefono3 col-md-6 dhonko_chat"></div>

                </div>
            </div>
            <div class="col-md-1 telefono4"></div>
        </div>
    </div>

    <div id="linea_1" class="no_foto telefono4">
        <div class="row text-center overimage2" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2 col-xs-2 telefono4"></div>
                    <div class="col-sm-8 col-xs-8 telefono4">
                        <div class="dhonko_foto" style="height: 85%;">
                            <div class="scroll-element js-scroll fade-in scrolled container" id="linea1">
                                <script>
                                    var linea1 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea1'),

                                        path: '<?php echo URL::asset('images/LINEA 1_desktop.json') ?>',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                        progressiveLoad: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-2 telefono4"
                         style="width: 100%;height: 100%;transform: translate3d(-7.4375em,6em,0px);-webkit-transform: translate3d(-7.4375em,6em,0px);">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json2">
                            <script>
                                var json2 = bodymovin.loadAnimation({

                                    container: document.getElementById('json2'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 2.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="come_funziona_2" class="no_foto">

        <?PHP /*<div id="linea_1" class="no_foto telefono3">
            <div class="row text-center overimage2">
                <div class="col-md-12" style="position: absolute;transform: translate3d(0px,4.5em,0px);-webkit-transform: translate3d(0px,4.5em,0px);">
                    <div class="row">
                        <?php /* <div class="telefono3 col-12 dhonko_chat" <?php /*style="height: 1px;margin-left: -50%"*//*?>>
                            <div class="scroll-element js-scroll fade-in scrolled container" <?php /*
                             style="width: 187vw;height: auto;min-height:auto" *//*?>
                            id="linea22">
                                <script>
                                    var linea22 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea22'),

                                        path: 'https://dhonko.it/images/LINEA 2_MOBILE.json',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                    });
                                </script>
                            </div>
                        </div>*//* ?>
                    </div>
                </div>
            </div>
        </div>
*/?>
        <div class="row text-center overimage" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="telefono3 col-md-12">
                        <div class="scroll-element js-scroll fade-in scrolled" id="json13"
                             style="-webkit-transform: scale(1.5) translate3d(1.6em,0,0);transform: scale(1.5) translate3d(1.6em,0,0);">
                            <script>
                                var json13 = bodymovin.loadAnimation({

                                    container: document.getElementById('json13'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 3.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;">
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            SCEGLI I TUOI COMPAGNI DI AVVENTURA GRAZIE AI TRAVEL MATCH
                            <br>
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            Compila il form di compatibilità. Ti consentirà di trovare compagni di viaggio che
                            abbiano i
                            tuoi stessi interessi, tipologia di vacanza e mindset. Una volta creato il tuo viaggio
                            potrai accedere ai Travel Match e invitare altri viaggiatori.
                        </a>

                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 telefono4">
                        <div class="dhonko_foto">
                            <div class="scroll-element js-scroll fade-in scrolled container"
                                 style="width: 135%;height: 100%;transform: translate3d(-2em,1em,0px);-webkit-transform: translate3d(-2em,1em,0px);"
                                 id="json3">
                                <script>
                                    var json3 = bodymovin.loadAnimation({

                                        container: document.getElementById('json3'),

                                        path: '<?php echo URL::asset('images/ILLUSTRAZIONE 3.json') ?>',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                        progressiveLoad: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <div id="linea_2" class="no_foto telefono4" style="margin-top: -7%;">
        <div class="row text-center overimage2" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-1 telefono4"></div>
            <div class="col-md-10 telefono4">
                <div class="row">
                    <div class="col-sm-2 col-xs-2 telefono4">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             style="width: 100%;height: 100%;-webkit-transform: translate3d(8.1875em,-5.125em,0px);transform: translate3d(8.1875em,-5.125em,0px);"
                             id="json4">
                            <script>
                                var json4 = bodymovin.loadAnimation({

                                    container: document.getElementById('json4'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 4.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>

                    </div>
                    <div class="col-sm-8 col-xs-8 telefono4">{{--
                        <img class="dhonko_foto" src="<?php echo  URL::ASSET('images/TUTORIAL-TRAVELER 1.jpg')?>">--}}
                        <div class="dhonko_foto">
                            <div class="scroll-element js-scroll fade-in scrolled container" id="linea2">
                                <script>
                                    var linea2 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea2'),

                                        path: '<?php echo URL::asset('images/LINEA 2_desktop.json') ?>',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                        progressiveLoad: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 telefono4"></div>
                </div>
            </div>
            <div class="col-md-1 telefono4"></div>
        </div>
    </div>

    <div id="come_funziona_3" class="no_foto">
        <div class="row text-center overimage" <?php /*style="background: #24FF0080;"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6" id="funziona_3">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="json5">
                            <script>
                                var json5 = bodymovin.loadAnimation({

                                    container: document.getElementById('json5'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 5.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>

                    <div class="telefono3 col-12"
                         style="/*overflow-x:hidden;*/position: absolute;-webkit-transform: translate3d(0px,225px,0);transform: translate3d(0px,225px,0)">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;margin-top:5%">
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            PIANIFICA TUTTO IN POCHI CLICK CON LA ROAD MAP
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            Ti aiuterà, insieme al tuo gruppo, nelle varie fasi di prenotazione fin quando il
                            viaggio
                            non prenderà il volo.
                        </a>
                    </div>


                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div id="linea_3" style="margin-top: -10%;" class="telefono4 no_foto">
        <div class="row text-center overimage2" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">{{--
                    <div class="telefono3 col-4"></div>
                    <div class="telefono3 col-8">

                        <div class="scroll-element js-scroll fade-in scrolled container" id="linea14">
                            <script>
                                var linea14 = bodymovin.loadAnimation({

                                    container: document.getElementById('linea14'),

                                    path: 'https://dhonko.it/images/LINEA 4_MOBILE.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                        <!--<img class="dhonko_foto" src="<?php echo URL::ASSET('images/TUTORIAL-TRAVELER 1.jpg')?>">-->
                    </div>--}}

                    <div class="col-sm-2 col-xs-2 telefono4"></div>
                    <div class="col-sm-8 col-xs-8 telefono4">{{--
                        <img class="dhonko_foto" src="<?php echo  URL::ASSET('images/TUTORIAL-TRAVELER 1.jpg')?>">--}}
                        <div class="dhonko_foto">
                            <div style="height: 50vh;" class="scroll-element js-scroll fade-in scrolled container"
                                 id="linea3">
                                <script>
                                    var linea3 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea3'),

                                        path: '<?php echo URL::asset('images/LINEA 3_DESKTOP.json') ?>',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                        progressiveLoad: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 telefono4">
                        <div <?php /*style="width: 200%;height: 100%;margin-top: -40%;margin-left: -40%;"*/?>
                             style="width: 250%;height: 100%;-webkit-transform: translate3d(-13.3125em,-5em,0px);transform: translate3d(-13.3125em,-5em,0px);"
                             class="scroll-element js-scroll fade-in scrolled container" id="json6">
                            <script>
                                var json6 = bodymovin.loadAnimation({

                                    container: document.getElementById('json6'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 6.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div id="come_funziona_4" class="no_foto">
        <div class="row text-center overimage" <?php /*style="background: #0066FF80;"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 telefono3">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             style="margin-top: -20%;width: 50%;transform: translate3d(-4em,-1em,0);-webkit-transform: translate3d(-4em,-1em,0);"
                             id="json24">
                            <script>
                                var json24 = bodymovin.loadAnimation({

                                    container: document.getElementById('json24'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 4.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6 telefono3"></div>
                </div>
            </div>
            <div class="col-md-1"></div>


            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-12 telefono3">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="json15" style="margin-bottom: -20%;transform: translate3d(0,1em,0);-webkit-transform: translate3d(0,1em,0);">
                            <script>
                                var json15 = bodymovin.loadAnimation({

                                    container: document.getElementById('json15'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZONE 7.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>

                    <div id="come_funziona_4_dhonko" class="col-lg-6 col-md-6 col-sm-12 col-xs-12  dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            ACCEDI ALLE EXPERIENCE DEI NOSTRI LOCAL O PROPONI LA TUA
                            <br>

                        </p>
                        <a class="my-3 dhonko_chat_2" id="desktop_2" style="color:black">
                            Prima di arrivare a destinazione, potrai scegliere tra le varie esperienze che i nostri
                            Local mettono a disposizione e sentirti un vero autoctono. Se invece sei un Local (privato o
                            azienda) puoi proporre la tua experience agli altri viaggiatori e fargli vivere momenti
                            indimenticabili.
                        </a>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 telefono4">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             style="width: 85%;height: 100%;-webkit-transform: translate3d(0px,0px,0px);transform: translate3d(0px,0px,0px);"
                             id="json7">
                            <script>
                                var json7 = bodymovin.loadAnimation({

                                    container: document.getElementById('json7'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZONE 7.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                        {{--
                    <img class="dhonko_foto" src="<?php echo  URL::ASSET('images/GIF-LOCAL_1.png')?>">--}}
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <div id="linea_4" <?php /* style="margin-top: -8%;"*/?> class="no_foto">
        <?php /*
        <div class="telefono3 col-12" id="top_linea_15"
             style="position: absolute;transform:translate3d(0, -25.5em, 0px);">

            <div class="scroll-element js-scroll fade-in scrolled container" id="linea15">
                <script>
                    var linea15 = bodymovin.loadAnimation({

                        container: document.getElementById('linea15'),

                        path: 'https://dhonko.it/images/LINEA 4_MOBILE.json',

                        renderer: 'svg',

                        loop: false,

                        autoplay: false,

                    });
                </script>
            </div>
        </div>*/?>
        <div class="row text-center overimage2 telefono4"
             style="height: 65vh!important;" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-sm-2 col-xs-2 telefono4"></div>
                    <div class="col-sm-8 col-xs-8 telefono4">
                        <div class="dhonko_foto">
                            <div class="scroll-element js-scroll fade-in scrolled container" id="linea4">
                                <script>
                                    var linea4 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea4'),

                                        path: '<?php echo URL::asset('images/LINEA 4_DESKTOP.json') ?>',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                        progressiveLoad: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-2 telefono4">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json">
                            <script>
                                var json = bodymovin.loadAnimation({

                                    container: document.getElementById('json'),

                                    path: '<?php echo URL::asset('images/.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div id="come_funziona_5" class="no_foto" style="margin-top: -10%">
        <div class="row text-center overimage" <?php /*style="background: #24FF0080;"*/?>>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-lg-6 col-md-6 telefono4"
                         style="display: flex;align-items: center;flex-wrap: wrap;">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="json8">
                            <script>
                                var json8 = bodymovin.loadAnimation({

                                    container: document.getElementById('json8'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 8.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-12 telefono3"
                         style="margin-bottom: -20%;padding: 10%;display: flex;align-items: center;flex-wrap: wrap;margin-top: -30%;">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="json28">
                            <script>
                                var json28 = bodymovin.loadAnimation({

                                    container: document.getElementById('json28'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 8.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;">
                        <br>
                        <br>
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            COLLEZIONA RICORDI SUL TUO PROFILO E CREA I TUOI ALBUM
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            Quando tornerai dal tuo viaggio potrai creare il tuo album di ricordi. Le tue foto
                            potranno
                            essere di ispirazione per gli altri Dhonkers.
                        </a>

                    </div>

                    <div class="col-12 telefono3">
                        <div style="height: 100%;width: 100%;margin-top:-15%;margin-bottom: -30%"
                             class="scroll-element js-scroll fade-in scrolled container" id="json26">
                            <script>
                                var json26 = bodymovin.loadAnimation({

                                    container: document.getElementById('json26'),

                                    path: '<?php echo URL::asset('images/ILLUSTRAZIONE 6.json') ?>',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div id="Contatti" class="no_foto">
        <div class="row text-center overimage" <?php /*style="background-color: #BDFF0080;"*/?>>
            <div class="col-md-12">
                <h4 class="my-3 dhonko_chat" id="diventa_un_pioniere">
                    Diventa un
                    Pioniere!</h4>
                <div class="row" style="padding-top: 2.5%;">
                    <div class="col-12 telefono4">
                        <form method="post" enctype="multipart/form-data">
                            <div style="width: 90%;height: 100%;">
                                <div class="header_text"
                                     style="width:75%;left:12%;top:3%;position:absolute;text-align: center;font-size: 26px;line-height: 36px;font-weight: 800">
                                    <label>Se vuoi essere uno dei primi <label style="font-size: 32px!important;">DHONKERS</label>
                                        a viaggiare o tra i primi <label
                                                style="font-size: 32px!important;">LOCAL</label> a
                                        proporre la tua experience, compila il Form. <label
                                                style="font-size: 32px!important;">DHONKO STA ARRIVANDO!</label></label>
                                </div>
                                <div class="passenger_name"
                                     style="width:15%;height:100%;left:15%;top:26%;position:absolute;text-align: left">
                                    <label for="text1"
                                           style="font-family: Lato, sans-serif !important;height:4%;font-size: 20px">Passenger
                                        Name</label>
                                    <input type="text" id="text1" name="nome_cognome" required
                                           class="input_dhonko">
                                </div>

                                <div class="number"
                                     style="width:30%;height:100%;left:35%;top:26%;position:absolute;text-align: left">
                                    <label for="text4"
                                           style="font-family: Lato, sans-serif !important;height:4%;font-size: 20px">Numero
                                        di Telefono (Facoltativo)</label>
                                    <input type="text" style="width: 50%" id="text4" name="numero"
                                           class="input_dhonko">
                                </div>

                                <div class="email"
                                     style="width:35%;height:100%;left:15%;top:37%;position:absolute;text-align: left">
                                    <label for="text2" style="font-family: Lato, sans-serif !important;font-size: 20px">Email</label>
                                    <input type="text" id="text2" name="email" required
                                           class="input_dhonko">
                                </div>

                                <div class="message"
                                     style="width:35%;height:5%;left:15%;top:49%;position:absolute;text-align: left">
                                    <label for="text3" style="font-family: Lato, sans-serif !important;font-size: 20px">Message</label>
                                    <textarea rows="8" cols="40" id="text3" name="textarea"
                                              class="textarea_dhonko"></textarea>
                                </div>
                                <div class="check"
                                     style="width:50%;height:5%;left:15%;top:88.5%;position:absolute;text-align: left;display: flex;align-items: flex-start;justify-content: left">
                                    <input type="checkbox" id="check1" name="check1" value="check1" required>
                                    <label style="padding-left:1%;font-family: Lato, sans-serif !important;font-style: normal;font-weight: 700;    font-size: 15px;line-height: 15px;color: #000000;"
                                           for="check1">
                                        Acconsento al trattamento dei dati personali come da <a
                                                style="text-decoration:underline;color:#000000;"
                                                href="<?php echo URL::asset('privacy') ?>">Informativa
                                            Privacy</a>.</label>
                                </div>
                                <div class="check"
                                     style="width:50%;height:5%;left:15%;top:92%;position:absolute;text-align: left;display: flex;align-items: flex-start;justify-content: left">
                                    <input type="checkbox" id="check2" name="check2" value="check2" required>
                                    <label style="padding-left:1%;font-family: Lato, sans-serif !important;font-style: normal;font-weight: 700;    font-size: 15px;line-height: 15px;color: #000000;"
                                           for="check2"> Acconsento all’invio, tramite email o SMS, di
                                        newsletter e comunicazioni promozionali sui servizi e sulle iniziative di
                                        DHONKO.</label>
                                </div>
                                <img class="dhonko_foto" style="width: 80vw;height: 80vh;margin-left: 10%;"
                                     alt="dhonko_foto"
                                     src="<?php echo URL::ASSET('images/CONTACT/BIGLIETTO_CONTACT_DESKTOP.png')?>">
                                <div class="button" style="width: 15%;left: 72%;top: 55%;position: absolute;">
                                    <button id="button" type="submit" value="send_email" name="send_email"
                                            class="dhonko_button">
                                        <a style="font-size: 36px;font-family: Lato, sans-serif!important;">INVIA!</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 telefono3">
                        <form method="post" enctype="multipart/form-data">
                            <div style="width: 100%;height: 100%;">
                                <div class="header_text"
                                     style="width:80%;left:10%;top:5%;position:absolute;text-align: center">
                                    <label style="font-weight: 800!important;font-style: italic!important">Se vuoi
                                        essere uno dei primi DHONKERS o tra i primi LOCAL compila il
                                        form!</label>
                                </div>
                                <div class="passenger_name"
                                     style="width:80%;left:10%;top:20%;position:absolute;text-align: left">
                                    <label for="text1" class="label_input">Passenger Name</label>
                                    <input type="text" id="text1" name="nome_cognome" required
                                           class="input_dhonko">
                                </div>

                                <div class="number"
                                     style="width:80%;left:10%;top:29%;position:absolute;text-align: left;font-size: 12px;">
                                    <label for="text4" class="label_input">Numero di Telefono (Facoltativo)</label>
                                    <input type="text" id="text4" name="numero"
                                           class="input_dhonko">
                                </div>
                                <div class="email"
                                     style="width:80%;left:10%;top:38%;position:absolute;text-align: left">
                                    <label for="text2" class="label_input">Email</label>
                                    <input type="text" id="text2" name="email" required
                                           class="input_dhonko">
                                </div>

                                <div class="message"
                                     style="width:80%;left:10%;top:47%;position:absolute;text-align: left">
                                    <label for="text3" class="label_input">Message</label>
                                    <textarea rows="5" cols="40" id="text3" name="textarea"
                                              class="textarea_dhonko"></textarea>
                                </div>

                                <img class="dhonko_foto"
                                     style="width: 90vw;height: 100vh;" alt="dhonko_foto"
                                     src="<?php echo URL::ASSET('images/CONTACT/BIGLIETTO_MOBILE.png')?>">

                                <div class="check" style="width:85%;height:5%;left:10%;top:76%;position:absolute;text-align: left;display: flex;align-items: center;justify-content: left">

                                    <input type="checkbox" id="check11" name="check1" value="check1" style="width:30px;flex:1.5;" required >

                                    <label style="flex:20;padding-left:1%;font-family: Lato, sans-serif !important;font-style: normal;font-weight: 700;font-size: 15px;line-height: 15px;color: #000000;"  for="check11">
                                        Acconsento al trattamento dei dati personali come da <a style="text-decoration:underline;color:#000000;" href="<?php echo URL::asset('privacy') ?>" target="_blank">Informativa Privacy</a>.
                                    </label>
                                </div>

                                <div class="check" style="width:85%;height:5%;left:10%;top:84%;position:absolute;text-align: left;display: flex;align-items: center;justify-content: left">

                                    <input type="checkbox" id="check22" name="check2" value="check2" style="width:30px;flex:1.5;" required>

                                    <label style="flex:20;-padding-left:1%;font-family: Lato, sans-serif !important;font-style: normal;font-weight: 700;font-size: 15px;line-height: 15px;color: #000000;" for="check22"> Acconsento all’invio, tramite email o SMS, di newsletter e comunicazioni promozionali sui servizi e sulle iniziative di DHONKO.</label>
                                </div>
                                <div class="button"
                                     style="width:55%;left:24%;top:93%;position:absolute;text-align: left">
                                    <button id="button" type="submit" value="send_email" name="send_email"
                                            class="dhonko_button">
                                        <a class="dhonko_chat"
                                           style="font-weight: 700!important;font-size:1.25em!important;color: white;">INVIA!</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>

<script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"countryDetection":true,"enableLgpd":true,"enableUspr":true,"floatingPreferencesButtonDisplay":"bottom-right","lang":"en","lgpdAppliesGlobally":false,"perPurposeConsent":true,"siteId":3074202,"whitelabel":false,"cookiePolicyId":28433866, "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"position":"float-bottom-center","rejectButtonDisplay":true,"showPurposesToggles":true }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>


<script type="text/javascript">

    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
    /*
        window.onload = function () {
            stopYoutube();
        }*/

    const scrollElements = document.querySelectorAll(".js-scroll");

    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;

        return (
            elementTop <=
            (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add("scrolled");
        if (element.id != 'video')
            eval(element.id + '.play()');
        /*
            playYoutube();
        else*/
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 1.25)) {
                displayScrollElement(el);
            }
        })
    }

    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });

    function closeSidebar() {
        $("body").removeClass("sidebar-open");
        $(document.body).addClass("sidebar-closed sidebar-collapse");
    }

    function scrollOnTop() {
        window.scrollTo(0, 0);
    }



    /*
        var playYoutube = () => {
            var iframes = document.querySelectorAll('iframe');
            Array.prototype.forEach.call(iframes, iframe => {
                iframe.contentWindow.postMessage(JSON.stringify({
                    event: 'command',
                    func: 'playVideo'
                }), '*');
            });
        }

        var unMuteYoutube = () => {
            var iframes = document.querySelectorAll('iframe');
            Array.prototype.forEach.call(iframes, iframe => {
                iframe.contentWindow.postMessage(JSON.stringify({
                    event: 'command',
                    func: 'unMute'
                }), '*');
            });
        }

        var stopYoutube = () => {
            var iframes = document.querySelectorAll('iframe');
            Array.prototype.forEach.call(iframes, iframe => {
                iframe.contentWindow.postMessage(JSON.stringify({
                    event: 'command',
                    func: 'stopVideo'
                }), '*');
            });
        }*/
</script>

@include("common.footer")