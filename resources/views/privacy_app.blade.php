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
            PRIVACY POLICY <br><br>
        </p>
        </p>
        <a class="my-3 dhonko_chat_2" style="color:black">
            Titolare del Trattamento dei Dati
            Il titolare al trattamento è DHONKO di Infante Anna (di seguito anche solo “DHONKO”), con sede legale in Via San Marco 3, 83100, Contrada San Marco, p. iva 03151520644, pec dhonko@pec.it, in persona del legale rappresentante Anna Infante (in seguito, "Titolare"). Il titolare del trattamento la informa che, ai sensi dell’art. 13 D.Lgs. 30.6.2003 n. 196 (in seguito, "Codice Privacy") e dell’art. 13 Regolamento UE n. 2016/679 (in seguito, "GDPR"), i Suoi dati saranno trattati con le modalità e per le finalità descritte di seguito:

            <br><br>
            1)	Tipologie di Dati raccolti
            I Dati che posso essere raccolti da questa Applicazione, in modo autonomo o tramite terze parti, sono:
            -	Dati Personali: nome, cognome, ID Facebook o Google, codice fiscale, sesso (genere), passaporto (numero, data di emissione, data di scadenza), data di nascita, luogo di nascita, luogo di residenza, attività lavorativa, interessi personali, immagine profilo, dati contenuti nel certificato medico in caso di cancellazione della prenotazione;
            -	Dati di contatto: numero telefonico, indirizzo e-mail.
            -	Dati Bancari: carta di credito / IBAN.
            -	Dati di accesso e navigazione: informazioni sul browser utilizzato dall’Utente, pagine visitate, data, ora e durata di ciascuna visita, nonché altri parametri relativi al sistema operativo e all’ambiente informatico dell’Utente.

            I Dati Personali e i dati bancari possono essere inseriti volontariamente dall’Utente, o, nel caso di Dati di accesso e navigazione, raccolti automaticamente durante l'uso di questa Applicazione. L’eventuale utilizzo di strumenti di tracciamento da parte di questa Applicazione o dei titolari dei servizi terzi utilizzati da questa Applicazione, ove non diversamente precisato, ha la finalità di identificare l’Utente e registrare le relative preferenze per finalità strettamente legate all’erogazione del servizio richiesto dall’Utente.

            Se non diversamente specificato, tutti i Dati richiesti da questa Applicazione sono obbligatori. Se l’Utente rifiuta di comunicarli, potrebbe essere impossibile per questa Applicazione fornire il Servizio. Nei casi in cui questa Applicazione indichi alcuni Dati come facoltativi, gli Utenti sono liberi di astenersi dal comunicare tali Dati, senza che ciò abbia alcuna conseguenza sulla disponibilità del Servizio o sulla sua operatività.
            Gli Utenti che dovessero avere dubbi, su quali Dati siano obbligatori, sono incoraggiati a contattare il Titolare.
            Nel caso di diniego dei consensi da parte dell’utente, vengono cancellati tutti i suoi Dati, salvo i Dati Personali che dovranno essere mantenuti per adempiere ad obblighi di legge.
            L’Utente si assume la responsabilità dei Dati Personali di terzi ottenuti, pubblicati o condivisi mediante questa Applicazione e garantisce di avere il diritto di comunicarli o diffonderli, liberando il Titolare da qualsiasi responsabilità verso terzi.
            <br><br>
            2)	  finalità del trattamento dei dati
            I Dati dell’Utente sono raccolti per:
            <br><br>•	La corretta esecuzione di obblighi pre-contrattuali e contrattuali di cui l'Interessato è parte ai sensi del Regolamento UE n. 2016/679, art. 6, lett. b), in particolare per l’assistenza e il supporto tecnico in merito ai servizi acquistati o da acquistare;
            <br><br>•	La cancellazione della prenotazione effettuata, la cui base giuridica è il consenso espresso dell'Interessato al trattamento dei dati di pagamento per ottenere un rimborso (art. 6, par. 1, lett. a) GDPR) e dei dati contenuti nel certificato medico (art. 9, par. 2, lett. a) GDPR);
            <br><br>•	Invio di comunicazioni commerciali, per scopi di marketing diretto, come l'invio di newsletter, informazioni e comunicazioni commerciali, aggiornamenti sulle offerte e promozioni relative ai servizi di DHONKO, tramite newsletter, via email o telefono, SMS e social media, la cui base giuridica è il consenso espresso al trattamento dei Dati Personali (art. 6, par. 1, lett. a) GDPR).
            <br><br>•	Fini statistici e di ricerca, in base al legittimo interesse del Titolare (art. 6, par. 1, lett. f) GDPR) a ottenere dati statistici e in forma anonima per migliorare il proprio business ed estrapolati dalle richieste inviate dagli utenti;
            <br><br>•	adempimenti di Legge connessi a norme civilistiche, fiscali, contabili etc. ai sensi del Regolamento UE n. 2016/679, art. 6, lett. c);
            Il trattamento dei dati dell’Utente ha lo scopo di consentire all’applicazione di fornire i propri servizi: interazioni basate sulla posizione geografica, statistica, definizione del profilo utente ed analisi delle abitudini o scelte di consumo del medesimo, al fine della migliore formulazione di offerte di servizi.
            <br><br>
            3)	Modalità di trattamento
            Il Titolare tratta i Dati secondo i principi di correttezza, liceità e trasparenza.
            Il trattamento viene effettuato mediante strumenti informatici e/o telematici, con modalità organizzative e con logiche strettamente correlate alle finalità indicate, adottando le opportune misure di sicurezza volte ad impedire l’accesso, la divulgazione, la modifica o la distruzione non autorizzate dei Dati.
            <br><br>
            4)	Accesso ai dati
            I dati dell’utente potranno essere trattati da: il Titolare, a talune categorie di incaricati coinvolti nell’organizzazione del sito (personale amministrativo, commerciale, marketing, legali, amministratori di sistema); altri soggetti esterni (a titolo indicativo: istituti di credito, studi professionali, consulenti, fornitori di servizi tecnici terzi, corrieri postali, hosting provider, società informatiche, agenzie di comunicazione, ecc.) appositamente nominati Responsabili del Trattamento da parte del Titolare ai sensi dell’art. 28 GDPR.
            L’elenco aggiornato dei Responsabili potrà sempre essere richiesto al Titolare del Trattamento.
            <br><br>
            5)	Luogo
            I Dati sono trattati presso la sede del Titolare del Trattamento, salvo quanto altrimenti specificato nel resto del documento.

            <br><br>
            6)	Tempo
            I Dati sono trattati esclusivamente per il tempo necessario allo svolgimento del servizio richiesto dall’Utente e per l’adempimento degli obblighi di legge.
            In relazione ai dati utilizzati per l’invio di comunicazioni commerciali i Dati saranno trattati per 24 mesi dalla registrazione.
            L’Utente può sempre chiedere l’interruzione del trattamento o la cancellazione dei Dati.

            <br><br>
            7)	Conservazione locale
            Il Titolare potrà raccogliere e conservare informazioni (incluse informazioni personali) localmente sul dispositivo, utilizzando meccanismi quali l’archiviazione web tramite browser (compreso HTML 5) e cache di dati delle applicazioni.
            <br><br>
            8)	Cookie e identificatori anonimi
            Il Titolare utilizza diverse tecnologie per raccogliere e memorizzare informazioni quando un utente e un esercizio commerciale aderente usa un servizio o una funzionalità del servizio (ad esempio, l’invio di uno o più cookie o identificatori anonimi al dispositivo dell’utente).
            Se necessario, chiediamo il consenso prima di immettere cookie facoltativi non (i) strettamente necessari per fornire il sito Web o (ii) allo scopo di facilitare una comunicazione.
            Alcune funzionalità del Sito e dell’App dipendono dai cookie; pertanto, se l’utente sceglie di bloccare i cookie, non gli sarà possibile accedere o utilizzare alcune di queste funzionalità e le preferenze che si basano sui cookie andranno perse. Se si eliminano i cookie, le impostazioni e le preferenze da essi controllate vengono cancellate e potrebbe essere necessario ricrearle.
            I dati raccolti vengono trattati in relazione alle esigenze contrattuali ed ai conseguenti adempimenti degli obblighi legali e contrattuali dalle stesse derivanti, nonché per conseguire una efficace gestione dei rapporti commerciali. In particolare, i dati personali rilasciati dagli utenti e dagli esercizi commerciali aderenti sono indispensabili per l’attività di analisi e di istruttoria finalizzata al miglioramento dei servizi dell’Applicazione. Essi verranno utilizzati per la gestione del rapporto contrattuale nonché per fini statistici, per analisi ed indagini di mercato, per la rilevazione del grado di soddisfazione della clientela.
            <br><br>
            9)	Statistica
            I servizi contenuti nella presente sezione permettono al Titolare del Trattamento di monitorare e analizzare i dati di mobilità e servono a tener traccia del comportamento dell’Utente per fini statistici.
            Dati personali raccolti: nome, cognome e ID Facebook o Google (account gmail) o Apple, percorso e ora della sessione, sesso, età, attività lavorativa, interessi personali.
            Il trattamento di tali dati a fini statistici avviene rispettando i diritti e le libertà dell’Utente e utilizzando i dati in forma completamente anonima, in modo tale da rendere impossibile risalire all’identità dell’interessato, così come disposto dall’art. 89 GDPR.

            <br><br>
            10)	Ulteriori informazioni sui Dati Personali
            Questa Applicazione può inviare notifiche push all’Utente. Identificazione univoca del dispositivo
            Questa Applicazione può tracciare gli Utenti tramite il salvataggio di un codice di identificazione univoco del loro dispositivo, per finalità statistiche o per conservare le preferenze degli Utenti.
            Tale tracciamento avviene nel rispetto delle libertà e dei diritti dell’Utente, garantendo il suo anonimato.

            <br><br>
            11)	Sicurezza delle informazioni e diritti degli utenti
            Il Titolare garantisce la protezione di DHONKO e dei suoi utenti da ogni forma di accesso non autorizzato alle informazioni in suo possesso e dall’alterazione, dalla divulgazione e dalla distruzione non autorizzate di tali informazioni. In particolare:
            <br><br>•	offre agli utenti aderenti una verifica al momento dell’accesso al loro account, impedendo l’accesso non autorizzato ai sistemi (richiesta obbligatoria di password);
            <br><br>•	consente l’accesso alle informazioni personali soltanto ai soggetti appositamente incaricati (dipendenti)  e a coloro che sono stati nominati Responsabili del trattamento dei dati (es. società collaboratrici di DHONKO, nei limiti di quanto sia strettamente necessario al fine del buon funzionamento del servizio offerto e nel rispetto del principio di minimizzazione.
            Tali soggetti sono obbligati a rispettare l’obbligo di riservatezza in ordine al contenuto delle informazioni cui dovessero venire a conoscenza in esecuzione del loro impiego;
            <br><br>•	I dati personali oggetto di trattamento sono custoditi e controllati, anche in relazione alle conoscenze acquisite in base al progresso tecnico, alla natura dei dati e alle specifiche caratteristiche del trattamento, in modo da ridurre al minimo, mediante l’adozione di idonee e preventive misure di sicurezza, i rischi di distruzione o perdita, anche accidentale, dei dati stessi, di accesso non autorizzato o di trattamento non consentito o non conforme alle finalità della raccolta;
            <br><br>•	nel caso in cui si verifichi una delle suddette violazioni ai dati personali degli Utenti è previsto il blocco e l’inutilizzo dell’account sulla piattaforma (stand by dell’account) e l’invio di una specifica comunicazione all’'indirizzo e-mail che l’Utente ha fornito al momento dell’iscrizione alla piattaforma per informarlo della stessa violazione.

            <br><br>
            12)  Difesa in giudizio
            I Dati Personali dell’Utente possono essere utilizzati per la difesa da parte del Titolare in giudizio o nelle fasi propedeutiche alla sua eventuale instaurazione, da abusi nell’utilizzo della stessa o dei servizi connessi da parte dell’Utente.
            <br><br>
            13) Comunicazione dei dati
            Senza la necessità di un espresso consenso (ex art. 24 lett. a), b), d) Codice Privacy e art. 6 lett. b) e c) GDPR), il Titolare potrà comunicare i dati dell’Utente a Organismi di vigilanza, Autorità giudiziarie, a società di assicurazione per la prestazione di servizi assicurativi nonché a quei soggetti ai quali la comunicazione sia obbligatoria per legge per l’espletamento delle finalità dette. Detti soggetti tratteranno i dati nella loro qualità di autonomi titolari del trattamento.
            I Suoi dati non saranno diffusi e saranno utilizzati nei limiti di quanto indicato nella presente informativa.
            <br><br>
            14) Trasferimento dati
            I dati personali sono conservati su server ubicati all’interno dell’Unione Europea. Resta in ogni caso inteso che il Titolare, ove si rendesse necessario, avrà facoltà di spostare i server anche extra-UE. In tal caso, il Titolare assicura sin d’ora che il trasferimento dei dati extra-UE avverrà in conformità agli artt. 44 e 45 GDPR., previa decisione della Commissione UE sull’adeguatezza delle garanzie offerte dallo stato extra-UE per garantire un livello di protezione adeguato.
            In ogni caso il Titolare accerterà la vigenza di una normativa conforme a quella europea, che permetta all’Utente l’esercizio dei diritti riconosciuti dal GDPR e dei mezzi di ricorso effettivi (ai sensi dell’art. 46 GDPR).
            <br><br>
            15) Informative specifiche
            In aggiunta alle informazioni contenute in questa privacy policy, questa Applicazione potrebbe fornire all’Utente delle informative contestuali riguardanti servizi specifici, o la raccolta ed il trattamento di Dati Personali, per cui verrà alternativamente chiesto apposito consenso ovvero fornita adeguata informativa nel rispetto degli obblighi di legge.
            <br><br>
            16) Log di sistema e manutenzione
            Per necessità legate al funzionamento ed alla manutenzione, questa Applicazione e gli eventuali servizi terzi da essa utilizzati potrebbero raccogliere Log di sistema, ossia file che registrano le interazioni e che possono contenere anche Dati Personali, quali l’indirizzo IP Utente.
            <br><br>
            17)  Informazioni non contenute in questa policy
            Maggiori informazioni in relazione al trattamento dei Dati Personali potranno essere richieste in qualsiasi momento al Titolare del Trattamento utilizzando le informazioni di contatto.
            <br><br>
            18) Esercizio dei diritti da parte degli Utenti
            I soggetti cui si riferiscono i Dati Personali hanno il diritto in qualunque momento di ottenere la conferma dell’esistenza o meno degli stessi presso il Titolare del Trattamento, di conoscerne il contenuto e l’origine, di verificarne l’esattezza o chiederne l’integrazione, la cancellazione, l’aggiornamento, la rettifica, la trasformazione in forma anonima o il blocco dei Dati Personali trattati in violazione di legge, nonché di opporsi in ogni caso, per motivi legittimi, al loro trattamento. Le richieste vanno rivolte al Titolare del Trattamento.
            In particolare, nella Sua qualità di interessato, ha i diritti di cui all’art. 7 Codice Privacy e art. 15 e ss. del GDPR e precisamente i diritti di:
            <br><br>•	Accesso, per cui l’interessato può ottenere dal titolare del trattamento la conferma che sia o meno in corso un trattamento di dati personali che lo riguardano e in tal caso, di ottenere l'accesso ai dati personali e alle seguenti informazioni: a) le finalità del trattamento; b) le categorie di dati personali in questione; c) i destinatari o le categorie di destinatari a cui i dati personali sono stati o saranno comunicati, in particolare se destinatari di paesi terzi o organizzazioni internazionali; d) quando possibile, il periodo di conservazione dei dati personali previsto oppure, se non è possibile, i criteri utilizzati per determinare tale periodo; e) l'esistenza del diritto dell'interessato di chiedere al titolare del trattamento la rettifica o la cancellazione dei dati personali o la limitazione del trattamento dei dati personali che lo riguardano o di opporsi al loro trattamento; f) il diritto di proporre reclamo a un'autorità di controllo; g) qualora i dati non siano raccolti presso l'interessato, tutte le informazioni disponibili sulla loro origine; h) l'esistenza di un processo decisionale automatizzato, compresa la profilazione di cui all'articolo 22, paragrafi 1 e 4, e, almeno in tali casi, informazioni significative sulla logica utilizzata, nonché l'importanza e le conseguenze previste di tale trattamento per l'interessato;
            <br><br>•	Rettifica, per cui l’interessato può chiedere la correzione o l’integrazione dei dati personali errati o incompleti;
            <br><br>•	Cancellazione (diritto all’oblio) nel caso in cui; i dati raccolti non sono più necessari, il consenso è stato revocato, i dati sono trattati illecitamente, è necessario adempiere ad un obbligo giuridico;
            <br><br>•	Di limitazione di trattamento, se l’interessato ne contesta l’esattezza, il trattamento è illecito e l’interessato si oppone alla cancellazione, i dati sono necessari all’interessato per l’accertamento, l’esercizio o la difesa di un diritto in sede giudiziaria;
            <br><br>•	Portabilità dei dati, per cui l’interessato può richiedere i dati personali che lo riguardano in un formato leggibile in modo da trasmetterli ad un altro titolare;
            <br><br>•	Opporsi, in tutto o in parte:
            a) per motivi legittimi al trattamento dei dati personali che La riguardano, ancorché pertinenti allo scopo della raccolta;
            b) al trattamento di dati personali che La riguardano a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale, mediante l’uso di sistemi automatizzati di chiamata senza l’intervento di un operatore mediante e-mail e/o mediante modalità di marketing tradizionali mediante telefono e/o posta cartacea. Si fa presente che il diritto di opposizione dell’interessato, esposto al precedente punto b), per finalità di marketing diretto mediante modalità automatizzate si estende a quelle tradizionali e che comunque resta salva la possibilità per l’interessato di esercitare il diritto di opposizione anche solo in parte. Pertanto, l’interessato può decidere di ricevere solo comunicazioni mediante modalità tradizionali ovvero solo comunicazioni automatizzate oppure nessuna delle due tipologie di comunicazione.
            <br><br>•	Reclamo, all'autorità di controllo (Articolo 77 GDPR). Nel caso in cui ritenga che il trattamento dei dati personali effettuato dal Titolare avvenga in violazione di quanto previsto dal Regolamento (UE) 2016/679, l’interessato ha diritto di presentare un reclamo all’Autorità di controllo, in particolare nello Stato membro in cui risiede abitualmente o lavora oppure nel luogo ove si è verificata la presunta violazione del regolamento (in Italia il Garante Privacy https://www.garanteprivacy.it/), o di adire le opportune sedi giudiziarie.
            <br><br>
            19) Modifiche a questa privacy policy
            Il Titolare del Trattamento si riserva il diritto di apportare modifiche alla presente privacy policy in qualunque momento dandone pubblicità agli Utenti su questa pagina e informando appositamente l’Utente. Nel caso di mancata accettazione delle modifiche apportate alla presente privacy policy, l’Utente è tenuto a interrompere l’utilizzo di questa Applicazione e può richiedere al Titolare del Trattamento di cancellare i propri Dati Personali. Salvo quanto diversamente specificato, la precedente privacy policy continuerà ad applicarsi ai Dati Personali sino a quel momento raccolti.
            <br><br>
            20) Informazioni su questa privacy policy
            Il Titolare del Trattamento dei Dati è responsabile per questa privacy policy conservata sui suoi server.
            <br><br>
            21) Riferimenti legali
            La presente informativa privacy è redatta in adempimento degli obblighi previsti dall’Art. 10 della Direttiva n. 95/46/CE, D. Lgs. 30.6.2003 n. 196 ("Codice Privacy") e del Regolamento UE n. 2016/679 ("GDPR")
            Questa informativa privacy riguarda esclusivamente questa Applicazione.
            <br><br>
            22) Modalità di esercizio dei diritti
            Ogni utente potrà in qualsiasi momento esercitare i diritti inviando:
            una raccomandata a.r. a DHONKO di Infante Anna (di seguito anche solo “DHONKO”), con sede legale in Via San Marco 3, 83100, Contrada San Marco, p. iva 03151520644; ovvero pec all’indirizzo: dhonko@pec.it.

        </a>
    </div>
    <br><br>
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
    <br><br>
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
    <br><br>
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