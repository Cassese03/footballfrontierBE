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
    <title> Football Frontier </title>

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
<body>
<img src="/raimon.png" alt="footballfrontier">
</body>

<script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"countryDetection":true,"enableLgpd":true,"enableUspr":true,"floatingPreferencesButtonDisplay":"bottom-right","lang":"en","lgpdAppliesGlobally":false,"perPurposeConsent":true,"siteId":3074202,"whitelabel":false,"cookiePolicyId":28433866, "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"position":"float-bottom-center","rejectButtonDisplay":true,"showPurposesToggles":true }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
