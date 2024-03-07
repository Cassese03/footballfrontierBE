@include("common.header")

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"
        integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery.h5validate.js"></script>

<script> $(document).ready(function () {
        $('form').h5Validate();
    });</script>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap');

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
        height: 100vh;
        width: 100vm;
    }

    .video {
        display: flex;
        align-items: stretch;
        justify-content: center;
        height: 100vh;
        width: 99vw;
    }

    .no_foto {
        overflow: hidden;
        display: flex;
        align-items: stretch;
        justify-content: center;
        height: 100%;
        width: 100vm;
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

    /*#json5 {
        width: 75%;
        height: 100%;
        transform: translate3d(-2.5em, -1em, 0px);
    }*/


    @media (min-width: 769px) {
        #json8 {
            width: 75%;
            height: 75%;
        }

        #json5 {
            width: 83%;
            height: 100%;
            transform: translate3d(0px, 0px, 0px);
        }

        #linea_4 {
            margin-top: -8%;
        }
    }

    @media (max-width: 768px) {

        #come_funziona_2 {
            margin-top: -10%
        }

        #come_funziona_4 {
            margin-top: 5em !important;
        }

        #come_funziona_4_dhonko {
            margin-top: 5em !important;
        }

        #come_funziona_5 {
            margin-top: 6em !important;
        }

        #json5 {
            width: 70vw;
            height: 100%;
            transform: translate3d(0em, 3em, 0px);
        }
        #funziona_3 {
            margin-top:5%;
        }

        /*#linea_1 {
            margin-left: -7em !important;
            margin-top: -25em !important;
        }

        #linea15 {
            width: 200vw;
            height: auto;
            min-height: auto;
        }

        #top_linea_15 {
            margin-left: -26em;
            margin-top: -31em;
        }

        #come_funziona_2 {
            margin-top: -9em;
        }

        #come_funziona_5 {
            margin-top: -22em;
        }

        */
        .no_foto {
            overflow: initial !important;
            display: flex;
            align-items: stretch;
            justify-content: center;
            height: 100%;
            width: 100vm;
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
            font-size:0.75em;
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
            overflow: initial;
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

<nav id="navbar-example2" class=" navbar navbar-light bg-light"
     style="box-shadow: 0px 15px 24px rgba(0,0,0,0.25)!important;z-index: 5;position: fixed;height:4.37em;flex-wrap:nowrap;justify-content:flex-start;padding:0;width: 100vw;/*background: url('https://dhonko.it/sfondo_login.png');*/background-size: auto;">
    <a class="navbar-brand" href="#">
        <img width="45" height="45" style="margin-left:35%;" src="<?php echo URL::ASSET('images/Logo_Dhonko.svg')?>">
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
                    <img width="275" height="275"
                         src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>">
                </div>
                <h4 class="my-3 dhonko_chat_3" style="font-weight: 700!important;">FAI MATCH CON LA VITA</h4>
                <h4 class="my-3 dhonko_chat_3" style="font-weight: 400!important;">Sogna, crea, pianifica,
                    parti,
                    Vivi<br>
                    Il mondo è lì fuori che ti aspetta!
                </h4>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div id="Video" class="video telefono4">
        <iframe class="video" src="https://www.youtube.com/embed/I1xTRZqdkkw?autoplay=1&loop=1&controls=0"></iframe>
    </div>

    <div id="Video" class="video telefono3">
        <iframe class="video" src="https://www.youtube.com/embed/N6fM9lp7CIY?autoplay=1&loop=1&controls=0"></iframe>
    </div>

    <div id="ComeFunziona" class="no_foto">
        <div class="row text-center overimage">
            <div class="col-md-1 telefono4"></div>
            <div class="col-md-1 telefono3"></div>
            <div class="col-md-1 telefono3"></div>
            <div class="col-md-10">
                <div style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                    <h4 class="my-3 dhonko_chat" style="color: #FF7900;">Come Funziona?</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-10">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json1">
                            <script>
                                var json1 = bodymovin.loadAnimation({

                                    container: document.getElementById('json1'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 1.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="telefono3 col-2 dhonko_chat"></div>
                    <div class="telefono3 col-12 dhonko_chat" style="position:absolute;transform: translate3d(0,9em,0px);">
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
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            CREA IL VIAGGIO DEI TUOI SOGNI O UNISCITI A QUELLO DI ALTRI VIAGGIATORI:
                            <br>
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            scegli dove andare, compila la tua scheda viaggio
                            o cerca tra le varie mete presenti nella Home
                            e unisciti agli altri gruppi.
                        </a>
                    </div>
                    <div class="telefono3 col-6 dhonko_chat">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json12">
                            <script>
                                var json12 = bodymovin.loadAnimation({

                                    container: document.getElementById('json12'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 2.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="telefono3 col-6 dhonko_chat"></div>

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

                                        path: 'https://dhonko.it/images/LINEA 1_desktop.json',

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
                         style="width: 107%;height: 109%;transform: translate3d(-2.4375em,-1em,0px);">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json2">
                            <script>
                                var json2 = bodymovin.loadAnimation({

                                    container: document.getElementById('json2'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 2.json',

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

        <div id="linea_1" class="no_foto telefono3">
            <div class="row text-center overimage2">
                <div class="col-md-12" style="position: absolute;transform: translate3d(0px,9em,0px);">
                    <div class="row">
                        <div class="telefono3 col-12 dhonko_chat" <?php /*style="height: 1px;margin-left: -50%"*/?>>
                            <div class="scroll-element js-scroll fade-in scrolled container" <?php /*
                             style="width: 187vw;height: auto;min-height:auto" */?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center overimage" <?php /*stylestyle="background: #BDFF0080"*/?>>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="telefono3 col-12">
                        <div class="scroll-element js-scroll fade-in scrolled container" id="json13"
                             style="transform: translate3d(0.5em,-2em,0px);">
                            <script>
                                var json13 = bodymovin.loadAnimation({

                                    container: document.getElementById('json13'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 3.json',

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
                            SCEGLI I TUOI COMPAGNI DI AVVENTURA GRAZIE AI TRAVEL MATCH:
                            <br>
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            compila il form di compatibilità. Ti consentirà di trovare compagni di viaggio che
                            abbiano i
                            tuoi stessi interessi, tipologia di vacanza e mindset. Una volta creato il tuo viaggio
                            potrai accedere ai Travel Match e invitare altri viaggiatori.
                        </a>

                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 telefono4">
                        <div class="dhonko_foto">
                            <div class="scroll-element js-scroll fade-in scrolled container"
                                 style="width: 127%;height: 100%;transform: translate3d(0px,0px,0px);"
                                 id="json3">
                                <script>
                                    var json3 = bodymovin.loadAnimation({

                                        container: document.getElementById('json3'),

                                        path: 'https://dhonko.it/images/ILLUSTRAZIONE 3.json',

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
                             style="width: 100%;height: 100%;transform: translate3d(6.1875em,-8.125em,0px);" id="json4">
                            <script>
                                var json4 = bodymovin.loadAnimation({

                                    container: document.getElementById('json4'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 4.json',

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

                                        path: 'https://dhonko.it/images/LINEA 2_desktop.json',

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

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 5.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>

                    <div class="telefono3 col-12"
                         style="overflow-x:hidden;position: absolute;transform: translate3d(0px,225px,0)">
                        <div class="telefono3 col-12 dhonko_chat">
                            <div class="scroll-element js-scroll fade-in scrolled container"
                                 id="linea13">
                                <script>
                                    var linea13 = bodymovin.loadAnimation({

                                        container: document.getElementById('linea13'),

                                        path: 'https://dhonko.it/images/LINEA 3_MOBILE.json',

                                        renderer: 'svg',

                                        loop: false,

                                        autoplay: false,

                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            PIANIFICA TUTTO IN POCHI CLICK CON LA ROAD MAP:
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            ti aiuterà, insieme al tuo gruppo, nelle varie fasi di prenotazione fin quando il
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

                                        path: 'https://dhonko.it/images/LINEA 3_DESKTOP.json',

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
                             style="width: 150%;height: 100%;transform: translate3d(-6.3125em,0px,0px);"
                             class="scroll-element js-scroll fade-in scrolled container" id="json6">
                            <script>
                                var json6 = bodymovin.loadAnimation({

                                    container: document.getElementById('json6'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 6.json',

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
                    <div class="col-6 telefono3">
                    </div>
                    <div class="col-6 telefono3" style="transform: translate3d(-4em, -1em, 0px);">
                        <div class="scroll-element js-scroll fade-in scrolled container" style="margin-top: -20%"
                             id="json24">
                            <script>
                                var json24 = bodymovin.loadAnimation({

                                    container: document.getElementById('json24'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 4.json',

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


            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-4 telefono3">
                    </div>
                    <div class="col-8 telefono3">
                        <div class="scroll-element js-scroll fade-in scrolled container" style="margin-top: -5%"
                             id="json15">
                            <script>
                                var json15 = bodymovin.loadAnimation({

                                    container: document.getElementById('json15'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZONE 7.json',

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
                            ACCEDI ALLE ESPERIENZE DEI NOSTRI LOCAL:
                            <br>

                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            Non puoi dire di aver viaggiato se non entri a contatto con la cultura del posto. Prima
                            di
                            arrivare a destinazione, potrai scegliere tra le esperienze che i local metteranno a tua
                            disposizione e sentirti un vero autoctono.
                        </a>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 telefono4">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             style="width: 73%;height: 100%;transform: translate3d(0px,0px,0px);" id="json7">
                            <script>
                                var json7 = bodymovin.loadAnimation({

                                    container: document.getElementById('json7'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZONE 7.json',

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
        </div>
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

                                        path: 'https://dhonko.it/images/LINEA 4_DESKTOP.json',

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

                                    path: 'https://dhonko.it/images/.json',

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

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 8.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-8 telefono3"
                         style="display: flex;align-items: center;flex-wrap: wrap;margin-top:5%">
                        <div class="scroll-element js-scroll fade-in scrolled container"
                             id="json28">
                            <script>
                                var json28 = bodymovin.loadAnimation({

                                    container: document.getElementById('json28'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 8.json',

                                    renderer: 'svg',

                                    loop: false,

                                    autoplay: false,

                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-4 telefono3">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dhonko_chat"
                         style="display: flex;align-items: center;flex-wrap: wrap;flex-direction: column;justify-content: center;">
                        <br>
                        <br>
                        <p class="my-3 dhonko_title" style="color:#00C1B3;">
                            COLLEZIONA RICORDI SUL TUO PROFILO E CREA I TUOI ALBUM:
                        </p>
                        <a class="my-3 dhonko_chat_2" style="color:black">
                            quando tornerai dal tuo viaggio potrai creare il tuo album di ricordi. Le tue foto
                            potranno
                            essere di ispirazione per gli altri Dhonkers.
                        </a>

                    </div>

                    <div class="col-12 telefono3">
                        <div style="height: 100%;transform: translate3d(0.6875em,0px,0px);"
                            class="scroll-element js-scroll fade-in scrolled container" id="json26">
                            <script>
                                var json26 = bodymovin.loadAnimation({

                                    container: document.getElementById('json26'),

                                    path: 'https://dhonko.it/images/ILLUSTRAZIONE 6.json',

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
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4 class="my-3 dhonko_chat" style="color: #FF7900;">Get in Touch</h4>
                <div class="row">
                    <div class="col-1 telefono4"></div>
                    <div class="col-10 telefono4">
                        <img class="dhonko_foto" style="width: 90%;height: 100%"
                             src="<?php echo URL::ASSET('images/CONTACT/BIGLIETTO_CONTACT_DESKTOP.png')?>">
                    </div>
                    <div class="col-1 telefono3"></div>
                    <div class="col-10 telefono3">
                        <img class="dhonko_foto" style="width: 90vw;height: 100vh"
                             src="<?php echo URL::ASSET('images/CONTACT/BIGLIETTO_MOBILE.png')?>">
                    </div>
                    <div class="col-1 telefono3"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
</div>

<script type="text/javascript">

    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }

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
        eval(element.id + '.play()');
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

</script>

@include("common.footer")