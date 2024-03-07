@include("admin.common.header")
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js" integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .prima_foto {
        background: url('<?php echo  URL::ASSET('images/pexels_dibakar_roy_5598616_1.png')?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: stretch;
        justify-content: center;
        overflow: hidden;
        min-height: 750px;
        width: 100%;
    }

    .no_foto {
        display: flex;
        align-items: stretch;
        justify-content: center;
        overflow: hidden;
        min-height: 750px;
        width: 100%;
    }

    .dhonko_chat {
        font-style: italic;
        font-weight: 700;
        color: #FFFFFF;
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
</style>
<nav id="navbar-example2" class="navbar navbar-light bg-light"
     style="width: 100%;background: url('/sfondo_login.png');background-size: auto;">
    <a class="navbar-brand" href="#">
        <img width="75" height="75" src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>">
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" style="color:#FF7900;" href="#CoseDhonko">Cos’è Dhonko?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:#FF7900;" href="#Video">Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:#FF7900;" href="#ComeFunziona">Come Funziona</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:#FF7900;" href="#Contatti">Contatti</a>
        </li>
        <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#one">one</a>
                <a class="dropdown-item" href="#two">two</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#three">three</a>
            </div>
        </li>-->
    </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div id="CoseDhonko" class="prima_foto">
        <div class="row text-center overimage" style="background: #132742;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div style="margin: 10%">
                    <img width="250" height="250"
                         src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>">
                </div>
                <h4 class="my-3 dhonko_chat">FAI MATCH CON LA VITA</h4>
                <h4 class="my-3 dhonko_chat">Sogna, crea, pianifica,
                    parti,
                    Vivi
                    Il mondo è lì fuori che ti aspetta!
                </h4>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <p>&nbsp&nbsp&nbsp</p>
    <div id="Video" class="no_foto">
        <iframe class="no_foto" src="https://www.youtube.com/embed/I1xTRZqdkkw?autoplay=1&loop=1&controls=0">
        </iframe>
    </div>
    <p>&nbsp&nbsp&nbsp</p>
    <div id="ComeFunziona" class="no_foto">
        <div class="row text-center overimage">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4 class="my-3 dhonko_chat" style="padding-top: 3%;color: #FF7900;">Come Funziona?</h4>
                <div class="row" >
                    <div class="col-6">
                        <div class="container" id="animation-container">
                            <script>
                                var animation = bodymovin.loadAnimation({

                                    container: document.getElementById('animation-container'),

                                    path: 'https://dhonko.it/3_Crea viaggio.json',

                                    renderer: 'svg',

                                    loop: true,

                                    autoplay: true,

                                    name: "Demo Animation",

                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4 class="my-3 dhonko_chat justify-content-center text-center" style="padding-top:10%;color:#00C1B3;">
                            CREA IL VIAGGIO DEI TUOI SOGNI O UNISCITI A QUELLO DI ALTRI VIAGGIATORI:
                        </h4>
                        <h5 class="my-3 dhonko_chat" style="padding-top:10%;color:black">
                            scegli dove andare, compila la tua scheda viaggio
                            o cerca tra le varie mete presenti nella Home
                            e unisciti agli altri gruppi.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <p>&nbsp&nbsp&nbsp</p>
</div>
@include("admin.common.footer")
<?php /*

<nav style="background: url('/sfondo_login.png');background-size: auto;"
     class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img width="50" height="50"
                                          src="<?php echo  URL::ASSET('images/logo_dhonko_def_1.png')?>"> </a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>-->
            <li class="nav-item">
                <a class="nav-link" style="color:#FF7900;" href="#">Cos’è Dhonko?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#FF7900;" href="#">Come Funziona</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#FF7900;" href="#">Contatti</a>
            </li>

            <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->
        </ul>
    </div>
</nav>
 */?>