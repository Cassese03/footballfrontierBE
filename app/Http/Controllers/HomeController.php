<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use MongoDB\Driver\Exception\ExecutionTimeoutException;
use PHPMailer\PHPMailer\PHPMailer;
use Socialite;


class HomeController extends Controller
{

    public function index(Request $request){
/*
        $dati = $request->all();

        $messaggio = '';

        if (isset($dati['send_email'])) {
            unset($dati['send_email']);

            $nome = explode(' ', $dati['nome_cognome'], 2);

            if (sizeof($nome) > 1) {
                $cognome = $nome[1];
                $nome = $nome[0];
            } else {
                $cognome = '';
                $nome = $nome[0];
            }

            $api_key = '1b4feeb39776677325663a9971185bc2-us10';
            $list_id = '5a76116b2d';

            $mailchimp = new \MailchimpMarketing\ApiClient();

            $mailchimp->setConfig([
                'apiKey' => $api_key,
                'server' => 'us10'
            ]);


            try {
                $subscriber = $mailchimp->lists->addListMember($list_id, [
                    'email_address' => $dati['email'],
                    'status' => 'subscribed',
                    'merge_fields' => [
                        'FNAME' => $nome,
                        'LNAME' => $cognome,
                        'PHONE' => (isset($dati['numero']))? $dati['numero']:'',
                    ]
                ]);
            } catch (\Exception $exception) {
                unset($dati["send_mail"]);
                unset($dati["nome_cognome"]);
                unset($dati["email"]);
                unset($dati["number"]);
                unset($dati["message"]);
                $nome = '';
                $cognome ='';
                $messaggio = 'Registrazione non avvenuta. Ci scusiamo per il disagio';
                return View::make('landing',compact('messaggio'));
            }
            unset($dati["send_mail"]);
            unset($dati["nome_cognome"]);
            unset($dati["email"]);
            unset($dati["number"]);
            unset($dati["message"]);
            $nome = '';
            $cognome ='';
            $messaggio = 'Registrazione avvenuta con successo';
        }

        return View::make('landing_new',compact('messaggio'));*/
        return View::make('index');

    }

    public function privacy(Request $request)
    {
        return View::make('privacy');

    }

    public function privacy_app(Request $request)
    {
        return View::make('privacy_app');

    }

    public function landing_color(Request $request)
    {
        return View::make('landing_color');

    }

    public function landing_mobile(Request $request)
    {
        return View::make('landing_mobile');

    }

}
