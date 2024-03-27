<?php

namespace App\Http\Controllers;

use App\Imports\TariffeImport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use PHPMailer\PHPMailer\PHPMailer;


class ApiController extends Controller
{
    public function get_explorer_filter_bydesc(Request $request, $filter)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $viaggio = DB::SELECT('SELECT * FROM viaggi v left join info_viaggio i on i.id_viaggio = v.id  where v.descrizione = \'%' . $filter . '\'% ');
            if (sizeof($viaggio) > 0) {
                $viaggi = '';
                foreach ($viaggio as $v) {
                    $viaggi .= $v->id . ',';
                }
                $viaggi = substr($viaggi, -1);

                $partecipanti_viaggio = DB::SELECT('SELECT *,if(ruolo = \'CREATORE\',true,false) as owner FROM partecipanti_viaggio where id_viaggio in (' . $viaggi . ')');

                foreach ($viaggio as $v) {
                    $v->partecipants = array();
                    foreach ($partecipanti as $p) {
                        if ($p->id_viaggio == $viaggio->id) {
                            array_push($v->partecipants, array('id' => $p->id, 'coordinated' => $p->owner, 'img' => $p->img));
                        }
                    }
                }
                return $viaggio;
            } else
                return response('{"Errore": "Nessun Viaggio Trovato"}', 404);
        } else
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);

    }

    public function tutorial(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $id_tipologia = DB::SELECT('SELECT id_tipologia as id FROM sessione left join utenti on sessione.id_utente = utenti.id where token = \'' . $request->header('token') . '\'')[0]->id;
            $tutorial = DB::SELECT('SELECT descrizione as description, img FROM tutorial where id_tipologia = ' . $id_tipologia);
            return json_encode($tutorial);
        } else
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
    }

    public function preferenze(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $preferenze = DB::SELECT('SELECT p.id,p.title,t.type, \'\' as content FROM preferenza p left join tipo_preferenza  t on p.id_type = t.id ');
            $oggetti = DB::SELECT('SELECT id,img,content,id_preferenza from oggetti_preferenza');
            foreach ($preferenze as $p) {
                $p->content = [];
                $i = 0;
                foreach ($oggetti as $o) {
                    if ($p->id == $o->id_preferenza) {
                        if ($p->type == 'range') {
                            if ($i == 0)
                                array_push($p->content, array('id' => $o->id, 'min' => $o->content));
                            if ($i == 1)
                                array_push($p->content, array('id' => $o->id, 'max' => $o->content));
                            $i++;
                        }
                        if ($p->type == 'select')
                            array_push($p->content, array('id' => $o->id, 'content' => $o->content));
                        if ($p->type == 'checkbox')
                            array_push($p->content, array('id' => $o->id, 'content' => $o->content));
                        if ($p->type == 'calendar')
                            array_push($p->content, array('id' => $o->id, 'start' => date('Y-m-d', strtotime('now')), 'end' => date('Y-m-d', strtotime('+ ' . $o->content . ' day'))));
                        if ($p->type == 'iconSelect')
                            array_push($p->content, array('id' => $o->id, 'img' => $o->img));
                    }
                }
            }
            return json_encode($preferenze);
        } else
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
    }

    public function follow(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $id_utente = $dati["id"];
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            if ($dati["follow"] == true) {
                $dati["follow"] = 1;
            }
            if ($dati["follow"] == false) {
                $dati["follow"] = 0;
            }
            $id_follower = DB::SELECT('SELECT * FROM utenti LEFT JOIN sessione on sessione.id_utente = utenti.id where sessione.token =\'' . $request->header('token') . '\' ');
            $id_follower = $id_follower[0]->id_utente;
            $check = DB::SELECT('SELECT * from follow where id_utente = \'' . $id_utente . '\' and id_follower = \'' . $id_follower . '\' ');
            if (sizeof($check) > 0) {
                DB::SELECT('UPDATE follow set follow = \'' . $dati["follow"] . '\' where id_utente = \'' . $id_utente . '\' and id_follower = \'' . $id_follower . '\' ');
                if ($dati["follow"] == 1) {
                    return response('{"success": "Utente seguito."}', 200);
                }
                if ($dati["follow"] == 0) {
                    return response('{"success": "Utente unfollowato."}', 200);
                }
            } else {
                DB::SELECT('INSERT INTO follow (id_utente,follow,id_follower) VALUES (\'' . $id_utente . '\',1,\'' . $id_follower . '\')');
                return response('{"success": "Utente seguito."}', 200);
            }
        } else
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
    }

    public function hide_notifica(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $id_viaggio = $dati["id_viaggio"];
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $utente = DB::SELECT('SELECT * FROM utenti LEFT JOIN sessione on sessione.id_utente = utenti.id where sessione.token =\'' . $request->header('token') . '\' ');
            $id_utente = $utente[0]->id_utente;
            $check = DB::SELECT('SELECT * FROM partecipanti_viaggio where id_viaggio = \'' . $id_viaggio . '\' and id_utente = \'' . $id_utente . '\' ');
            if (sizeof($check) > 0) {
                DB::SELECT('UPDATE partecipanti_viaggio set hide_notifica = 1 where id_viaggio = \'' . $id_viaggio . '\' and id_utente = \'' . $id_utente . '\' ');
                return response('{"success": "Notifica eliminata correttamente."}', 200);
            } else
                return response('{"Errore": "Nessuna Notifica Trovata"}', 400);
        } else
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
    }

    public function viaggio(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $id_viaggio = $dati["id_viaggio"];

        $viaggio = DB::SELECT('SELECT * FROM viaggi v left join info_viaggio i on i.id_viaggio = v.id  where v.id = ' . $id_viaggio);
        if (sizeof($viaggio) > 0) {
            $id_utente = DB::SELECT('SELECT id_utente from sessione where token = \'' . $request->header('token') . '\'');
            if (sizeof($id_utente) > 0) {
                $id_utente = $id_utente[0]->id_utente;
                $v = $viaggio[0];
                $cond = ($v->lingue) ? '\'' . str_replace(' ', '', str_replace(',', '\',\'', $v->lingue)) . '\'' : '""';
                $lingue = DB::SELECT('SELECT codice FROM lingua where lingua in (' . $cond . ')');
                $l = array();
                foreach ($lingue as $r)
                    array_push($l, $r->codice);
                $lingue = $l;
                $partecipanti = DB::SELECT('SELECT COALESCE((SELECT follow from follow where id_utente = \'' . $id_utente . '\' and id_follower = u.id),0) as follow,i.nome as name,i.img,i.cognome as surname,i.id_utente as id FROM partecipanti_viaggio left join utenti u on u.id = partecipanti_viaggio.id_utente left join info_utente i on u.id = i.id_utente  where id_viaggio = ' . $id_viaggio);
                foreach ($partecipanti as $p) {
                    $p->follow = (bool)$p->follow;
                }

                $immagini_viaggio = DB::SELECT('SELECT link from immagini_viaggio where id_viaggio = ' . $id_viaggio);
                $a = [];
                foreach ($immagini_viaggio as $i)
                    array_push($a, $i->link);
                $json = array(
                    "id" => $id_viaggio,
                    "owner" => false,
                    "listOfImg" => $a,
                    "title" => $v->localita,
                    "to" => $v->arrivo,
                    "from" => $v->partenza,
                    "days" => floor((strtotime($v->data_ritorno) - strtotime($v->data_ritorno)) / 86400),
                    "date" => $v->data_ritorno,
                    "subtitle" => $v->descrizione,
                    "compatibility" => 10,
                    "available" => intval(intval($v->max_partecipanti) - sizeof($partecipanti)),
                    "status" => ($v->stato == 1) ? true : false,
                    "detailSheet" => array(
                        "description" => $v->descrizione,
                        "other" => array(
                            "type" => $v->tipo_viaggio,
                            "maxBudget" => $v->budget,
                            "overnight" => $v->pernottamento,
                            "languages" => $lingue,
                            "minRangeYear" => $v->eta_min,
                            "maxRangeYear" => $v->eta_max,
                            "typeOfGroup" => $v->gruppo,
                        ),
                    ),
                    "partecipanti" => $partecipanti,
                );
                return json_encode($json, JSON_NUMERIC_CHECK);
            } else
                return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
        }
    }

    public function viaggio_roadmap(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $id_viaggio = $dati["id_viaggio"];
        $viaggio = DB::SELECT('SELECT * FROM viaggi v left join info_viaggio i on i.id_viaggio = v.id  where v.id = ' . $id_viaggio);
        if (sizeof($viaggio) > 0) {
            $id_utente = DB::SELECT('SELECT id_utente from sessione where token = \'' . $request->header('token') . '\'');
            if (sizeof($id_utente) > 0) {
                $id_utente = $id_utente[0]->id_utente;
                $v = $viaggio[0];
                $cond = ($v->lingue) ? '\'' . str_replace(' ', '', str_replace(',', '\',\'', $v->lingue)) . '\'' : '""';
                $lingue = DB::SELECT('SELECT codice FROM lingua where lingua in (' . $cond . ')');
                $l = array();
                foreach ($lingue as $r)
                    array_push($l, $r->codice);
                $lingue = $l;
                $partecipanti = DB::SELECT('SELECT COALESCE((SELECT if(follow = 1,true,false) from follow where id_utente = \'' . $id_utente . '\' and id_follower = u.id),\'false\')  as follow,i.nome as name,i.cognome as surname,i.img,i.id_utente as id FROM partecipanti_viaggio left join utenti u on u.id = partecipanti_viaggio.id_utente left join info_utente i on u.id = i.id_utente  where id_viaggio = ' . $id_viaggio);
                foreach ($partecipanti as $p) {
                    $p->follow = (bool)$p->follow;
                }
                $roadmap = [];
                $content_roadmap = DB::SELECT('SELECT *,(select title from tipo_roadmap where tipo_roadmap.id = roadmap.id_tipo_roadmap) as tipo_roadmap FROM roadmap where id_viaggio = ' . $id_viaggio . ' Order by data_inizio asc');
                $date_roadmap = DB::SELECT('SELECT DISTINCT CONVERT(data_inizio,DATE) AS data_inizio FROM roadmap where id_viaggio = ' . $id_viaggio . ' order by data_inizio asc');
                foreach ($date_roadmap as $d) {
                    $sub_json = array("date" => [], 'movement' => []);
                    array_push($sub_json['date'], $d->data_inizio);
                    foreach ($content_roadmap as $r) {
                        if ($d->data_inizio == date('Y-m-d', strtotime($r->data_inizio))) {
                            array_push($sub_json['movement'], $r);
                        }
                    }
                    array_push($roadmap, $sub_json);
                }

                $info = array();
                $group_consigli = DB::SELECT('select title from consigli group by title');
                $consigli = DB::SELECT('select * from consigli');

                foreach ($group_consigli as $d) {
                    $sub_json1 = array("title" => [], 'link' => []);
                    array_push($sub_json1['title'], $d->title);
                    foreach ($consigli as $r) {
                        if ($d->title == $r->title) {
                            array_push($sub_json1['link'], $r->content);
                        }
                    }
                    array_push($info, $sub_json1);
                }

                $json = array(
                    "id" => $id_viaggio,
                    "owner" => false,
                    "listOfImg" => array(),
                    "title" => $v->localita,
                    "to" => $v->arrivo,
                    "from" => $v->partenza,
                    "days" => floor((strtotime($v->data_ritorno) - strtotime($v->data_ritorno)) / 86400),
                    "date" => $v->data_ritorno,
                    "subtitle" => $v->descrizione,
                    "compatibility" => 10,
                    "available" => intval(intval($v->max_partecipanti) - sizeof($partecipanti)),
                    "status" => ($v->stato == 1) ? true : false,
                    "detailSheet" => array(
                        "description" => $v->descrizione,
                        "other" => array(
                            "type" => $v->tipo_viaggio,
                            "maxBudget" => $v->budget,
                            "overnight" => $v->pernottamento,
                            "languages" => $lingue,
                            "minRangeYear" => $v->eta_min,
                            "maxRangeYear" => $v->eta_max,
                            "typeOfGroup" => $v->gruppo,
                        ),
                    ),
                    "partecipanti" => $partecipanti,
                    "roadmap" => array("info" => $info, "map" => $roadmap,),
                );
                return json_encode($json);
            } else
                return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
        }
    }

    public function cronologia_viaggi(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $utente = DB::SELECT('SELECT * FROM utenti LEFT JOIN sessione on sessione.id_utente = utenti.id where sessione.token =\'' . $request->header('token') . '\' ');
            $viaggi = DB::SELECT('SELECT * FROM partecipanti_viaggio p left join viaggi v on v.id = p.id_viaggio where p.id_utente =\'' . $utente[0]->id_utente . '\' ');
            if (sizeof($viaggi) > 0) {
                $last = [];
                $last_i = 0;
                $next = [];
                $next_i = 0;
                foreach ($viaggi as $v) {
                    if (strtotime(date('Y-m-d', strtotime($v->data_ritorno))) <= strtotime(date('Y-m-d', strtotime('now')))) {
                        if ($v->hide_notifica != 1) {
                            $sub_json = array(
                                "id" => $v->id,
                                "open" => $v->stato,
                                "dest" => $v->localita,
                                "go" => $v->data_andata,
                                "away" => $v->data_ritorno,
                                "img" => $v->img,
                            );
                            $last[$last_i] = $sub_json;
                            $last_i++;
                        }
                    } else {
                        $sub_json = array(
                            "id" => $v->id,
                            "open" => $v->stato,
                            "dest" => $v->localita,
                            "go" => $v->data_andata,
                            "away" => $v->data_ritorno,
                            "img" => $v->img,
                        );
                        $next[$next_i] = $sub_json;
                        $next_i++;

                    }
                }
                $json = array(
                    "next" => $next,
                    "last" => $last
                );
                return json_encode($json);
            } else {
                return array(
                    "next" => [],
                    "last" => []
                );
            }
            //   $partecipanti = DB::SELECT('SELECT if(partecipanti_viaggio.ruolo = \'CREATORE\',true,false) as owner,i.id,i.id_utente as id,id_viaggio,img FROM partecipanti_viaggio left join utenti u on u.id = partecipanti_viaggio.id_utente left join info_utente i on u.id = i.id_utente');
        } else {
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
        }
    }

    public function viaggi_disponibili(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        $is_online = $this->is_online($request->header('token'));
        if ($is_online == 1) {
            $viaggio = DB::SELECT('SELECT * FROM viaggi where stato = 1 ');
            $partecipanti = DB::SELECT('SELECT if(partecipanti_viaggio.ruolo = \'CREATORE\',true,false) as owner,i.id,i.id_utente as id,id_viaggio,img FROM partecipanti_viaggio left join utenti u on u.id = partecipanti_viaggio.id_utente left join info_utente i on u.id = i.id_utente ORDER BY owner desc');
            if (sizeof($viaggio) > 0) {
                $json = [];
                $i = 0;
                foreach ($viaggio as $v) {
                    $partecipanti_viaggio = [];
                    $count = 0;
                    foreach ($partecipanti as $p) {
                        if ($p->id_viaggio == $v->id) {
                            $partecipanti_viaggio[$count] = $p;
                            $count++;
                        }
                    }


                    $sub_json = array(
                        "id" => $v->id,
                        "owner" => false,
                        "img" => $v->img,
                        "title" => $v->localita,
                        "to" => $v->arrivo,
                        "from" => $v->partenza,
                        "days" => floor((strtotime($v->data_ritorno) - strtotime($v->data_andata)) / 86400),
                        "date" => $v->data_ritorno,
                        "subtitle" => $v->descrizione,
                        "compatibility" => 10,
                        "available" => intval(intval($v->max_partecipanti) - intval($count)),
                        "partecipanti" => $partecipanti_viaggio
                    );
                    $json[$i] = $sub_json;
                    $i++;
                }
                return json_encode($json);
            }
        } else {
            return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
        }
    }

    public function registra(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);

        $check_email = DB::SELECT('SELECT * FROM utenti where email = \'' . $dati['email'] . '\' ');

        if (sizeof($check_email) > 0) return response('{"error": "Email già utilizzata."}', 409); else {

            $id_tipo = DB::SELECT('SELECT * FROM tipologia where descrizione like  \'%' . $dati['tipologia'] . '%\'')[0]->id;

            $id = DB::table('utenti')->insertGetId([
                'nominativo' => $dati['nome'] . ' ' . $dati['cognome'],
                'email' => $dati['email'],
                'password' => $dati['password'],
                'abilitato' => 1,
                'id_tipologia' => $id_tipo,
            ]);

            $link = '';

            if (isset($dati['img'])) {
                if ($dati['img'] != '') {

                    $img = $dati['img'];

                    $file = 'immagini/dhonko_profilo_' . rand(0, 9999999999) . '.jpg';

                    $link = URL::asset($file);

                    $img = str_replace('data:image/png;base64,', '', $img);

                    $img = str_replace(' ', '+', $img);

                    $data = base64_decode($img);

                    $fp = fopen($file, "w+");

                    fwrite($fp, $data);

                    /*
                     Hexadecimal to image

                    $dati['img'] = $dati['img'];

                    $binary = pack("H*", str_replace('0x', '', $dati['img']));
                    file_put_contents($file, $binary);
                    $link = URL::asset($file);

                    */

                }
            }

            if ($id_tipo == 4)
                DB::table('info_utente')->insertGetId([
                    'id_utente' => $id,
                    'nome' => $dati['nome'],
                    'cognome' => $dati['cognome'],
                    'citta' => $dati['citta'],
                    'residenza' => $dati['residenza'],
                    'numero' => intval($dati['numero']),
                    'data_nascita' => date('Y-m-d', strtotime(str_replace('/', '-', $dati['data_nascita']))),
                    'img' => $link,
                ]);

            else

                DB::table('info_utente')->insertGetId([
                    'id_utente' => $id,
                    'nome' => (isset($dati['nome'])) ? $dati['nome'] : null,
                    'cognome' => (isset($dati['cognome'])) ? $dati['cognome'] : null,
                    'indirizzo' => (isset($dati['indirizzo'])) ? $dati['indirizzo'] : null,
                    'comune' => (isset($dati['comune'])) ? $dati['comune'] : null,
                    'provincia' => (isset($dati['provincia'])) ? $dati['provincia'] : null,
                    'nazione' => (isset($dati['nazione'])) ? $dati['nazione'] : null,
                    'codice_fiscale' => (isset($dati['codice_fiscale'])) ? $dati['codice_fiscale'] : null,
                    'partitaiva' => (isset($dati['partitaiva'])) ? $dati['partitaiva'] : null,
                    'numero' => (isset($dati['numero'])) ? intval($dati['numero']) : null,
                    'img' => $link,
                    'tipo_utente' => (isset($dati['tipo_utente'])) ? $dati['tipo_utente'] : null,
                ]);

            return response('{"success": "Cliente correttamente creato"}', 200);
        }
    }


    public function is_online($token)
    {
        $session = DB::SELECT('SELECT * FROM sessione where token = \'' . $token . '\'');
        if (sizeof($session) > 0) {
            if ($session[0]->timeins < date('Y-m-d H:i:s', strtotime('-8 hours'))) {
                return 1;
                //DB::SELECT('DELETE FROM sessione where token = \'' . $session[0]->token . '\'');
                //return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
            } else {
                $utente = DB::SELECT('SELECT utenti.*,tipologia.descrizione as descrizione_tip from utenti left join tipologia on tipologia.id = utenti.id_tipologia where utenti.id = \'' . $session[0]->id_utente . '\'')[0];
                return 1;
                //return response('{"token": "' . $token . '","tipologia":"' . $utente->descrizione_tip . '"}', 200);
            }
        } else {
            return 0;
            //  return response('{"Errore": "Il token non esiste. Rifare il login"}', 401);
        }
    }

    public function token(Request $request)
    {
        $token = $request->header('token');
        $session = DB::SELECT('SELECT * FROM sessione where token = \'' . $token . '\'');
        if (sizeof($session) > 0) {
            $utente = DB::SELECT('SELECT utenti.*,tipologia.descrizione as descrizione_tip from utenti left join tipologia on tipologia.id = utenti.id_tipologia where utenti.id = \'' . $session[0]->id_utente . '\'')[0];
            if ($session[0]->timeins < date('Y-m-d H:i:s', strtotime('-8 hours'))) {
                DB::SELECT('DELETE FROM sessione where token = \'' . $session[0]->token . '\'');
                return response('{"token": "' . $token . '","tipologia":"' . $utente->descrizione_tip . '"}', 200);
                //return response('{"Errore": "Il token non esiste più. Rifare il login"}', 401);
            } else {
                return response('{"token": "' . $token . '","tipologia":"' . $utente->descrizione_tip . '"}', 200);
            }
        } else {
            return response('{"Errore": "Il token non esiste. Rifare il login"}', 401);
        }
    }


    /*
        public function index(Request $request)
        {

            $this->is_loggato();
            $utente = session('utente');
            $page = 'index';

            return View::make('admin.index', compact('page', 'utente'));

        }
        public function preferenze(Request $request)
        {

            $this->is_loggato();
            $utente = session('utente');
            $page = 'preferenze';
            $preferenze = DB::SELECT('select *,(SELECT COUNT(*) FROM oggetti_preferenza where preferenza.id = oggetti_preferenza.id_preferenza) as count from preferenza');
            $oggetti = DB::SELECT('select oggetti_preferenza.* from preferenza LEFT JOIN oggetti_preferenza ON preferenza.id = oggetti_preferenza.id_preferenza');

            return View::make('admin.index', compact('page', 'utente','preferenze','oggetti'));

        }*/

    public function logout()
    {
        session()->flush();
        return Redirect::to('admin/login');
    }

    public function is_loggato()
    {
        if (!session()->has('utente')) return Redirect::to('admin/login')->send();
    }


    /*                                                          */


    public function login(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        //$this->is_online($token);

        if (isset($dati['email'])) {

            $utenti = DB::connection('mysql')->select('SELECT * from utente where email = \'' . htmlentities($dati['email'], 3, 'UTF-8' . '') . '\' and password = \'' . htmlentities($dati['password'], 3, 'UTF-8' . '') . '\'');

            if (sizeof($utenti) > 0) {

                $utente = $utenti[0];

                if ($utente->abilitato == 1) {
                    $access_token = Str::random(50);
                    DB::connection('mysql')->select("UPDATE utente SET access_token = '" . $access_token . "' where id = " . $utente->id);

                    return response('{"access_token": "' . $access_token . '"}', 200);

                } else {
                    return response('{"error": "Utente non abilitato."}', 401);
                }
            } else
                return response('{"error": "Username o Password sbagliata."}', 400);
        } else
            return response('{"error": "Dati non formattati correttamente."}', 404);
    }

    public function fast_login(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        //$this->is_online($token);

        if (isset($dati['email']) && isset($dati['token'])) {

            $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' and email = \'' . htmlentities($dati['email'], 3, 'UTF-8' . '') . '\'');

            if (sizeof($utenti) > 0) {

                $utente = $utenti[0];

                if ($utente->abilitato == 1) {
                    $access_token = Str::random(50);
                    DB::connection('mysql')->select("UPDATE utente SET access_token = '" . $access_token . "' where id = " . $utente->id);

                    return response('{"access_token": "' . $access_token . '"}', 200);

                } else {
                    return response('{"error": "Utente non abilitato."}', 401);
                }
            } else
                return response('{"error": "Username o Token sbagliato."}', 400);
        } else
            return response('{"error": "Dati non formattati correttamente."}', 404);
    }


    public function profilo(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        if (isset($dati['token'])) {
            if (isset($dati['id'])) {
                $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
                if ($utenti[0]->abilitato == 1) {
                    if ($dati['id'] == 0) {
                        $id = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ')[0]->id;
                        $profilo = DB::connection('mysql')->select(
                            'SELECT s.nome as nomesquadra,
                                    u.nominativo as nome,
                                    g.ruolo as ruolo
                                    from utente u
                                    left join giocatori g on g.id_utente = u.id
                                    left join squadra s on g.id_squadra = s.id
                                    where u.id = \'' . $id . '\' '
                        );
                        $statistiche_personali = DB::connection('mysql')->select(
                            'SELECT
                                    (SELECT SUM(assist) from statistiche_partita where id_giocatore = \'' . $id . '\') as assist,
                                    (SELECT SUM(gol) from statistiche_partita where id_giocatore = \'' . $id . '\') as gol,
                                    (SELECT count(id) from statistiche_partita where id_giocatore = \'' . $id . '\') as presenze '
                        );

                        $statistiche_squadra = DB::connection('mysql')->select(
                            'SELECT
                                    (SELECT count(id) from partite   where completata = 1 and id_squadra_vincente = (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY) ) as partitevinte,
                                    (SELECT count(id) from partite   where completata = 1 and (id_squadra_casa = (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY) OR id_squadra_ospite = (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY)) and id_squadra_vincente != (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY)) as partiteperse,
                                    (SELECT count(id) from partite where completata = 1 and (id_squadra_casa = (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY) OR id_squadra_ospite = (SELECT id_squadra from giocatori where id_utente = \'' . $id . '\' FETCH NEXT 1 ROWS ONLY))) as presenze ');
                        return response(array("profilo" => $profilo, "statistichePersonali" => $statistiche_personali, "statisticheSquadra" => $statistiche_squadra, "owner" => true), 200);

                    } else {
                        $profilo = DB::connection('mysql')->select(
                            'SELECT s.nome as nomesquadra,
                                    u.nominativo as nome,
                                    g.ruolo as ruolo
                                    from utente u
                                    left join giocatori g on g.id_utente = u.id
                                    left join squadra s on g.id_squadra = s.id
                                    where u.id = \'' . $dati['id'] . '\' '
                        );
                        $statistiche_personali = DB::connection('mysql')->select(
                            'SELECT
                                    (SELECT SUM(assist) from statistiche_partita where id_giocatore = \'' . $dati['id'] . '\') as assist,
                                    (SELECT SUM(gol) from statistiche_partita where id_giocatore = \'' . $dati['id'] . '\') as gol,
                                    (SELECT count(id) from statistiche_partita where id_giocatore = \'' . $dati['id'] . '\') as presenze '
                        );

                        $statistiche_squadra = DB::connection('mysql')->select(
                            'SELECT
                                    (SELECT count(id) from partite   where completata = 1 and id_squadra_vincente = (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY) ) as partitevinte,
                                    (SELECT count(id) from partite   where completata = 1 and (id_squadra_casa = (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY) OR id_squadra_ospite = (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY)) and id_squadra_vincente != (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY)) as partiteperse,
                                    (SELECT count(id) from partite where completata = 1 and (id_squadra_casa = (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY) OR id_squadra_ospite = (SELECT id_squadra from giocatori where id_utente = \'' . $dati['id'] . '\' FETCH NEXT 1 ROWS ONLY))) as presenze ');

                        return response(array("profilo" => $profilo, "statistichePersonali" => $statistiche_personali, "statisticheSquadra" => $statistiche_squadra, "owner" => false), 200);
                    }

                } else
                    return response('{"error": "Utente non abilitato."}', 404);
            } else
                return response('{
                            "error": "Id non esistente."}', 404);
        } else
            return response('{
                            "error": "Token non esistente."}', 404);
    }

    public function classifica(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        if (isset($dati['token'])) {
            $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
            if ($utenti[0]->abilitato == 1) {
                $classifica = DB::connection('mysql')->select('SELECT
                    s.nome AS nome,
                    s.id AS id_squadra,
                    COALESCE((SELECT sum(gol) FROM statistiche_partita WHERE id_squadra = s.id),0) AS golfatti,
                    COALESCE((SELECT sum(gol) FROM statistiche_partita WHERE id_partita in (select id from partite WHERE (id_squadra_casa = s.id OR id_squadra_ospite = s.id)) AND id_squadra != s.id),0) AS golsubiti,
                    (SELECT count(id_squadra_vincente) FROM partite WHERE completata = 1 and id_squadra_vincente = s.id) * 3 AS punti,
                    (SELECT COUNT(id) FROM partite WHERE completata = 1 and id_squadra_vincente = s.id) as partitevinte,
                    (SELECT COUNT(id) FROM partite WHERE completata = 1 and (id_squadra_ospite = s.id OR id_squadra_casa = s.id) and id_squadra_vincente != s.id) as partiteperse,
                    (SELECT CASE WHEN id_squadra = s.id THEN true ELSE false END FROM utente WHERE id = ' . $utenti[0]->id . ') AS owner,
                    s.img as Immagine,
                    row_number() over(order by (SELECT count(id_squadra_vincente) FROM partite WHERE id_squadra_vincente = s.id) * 3 desc) AS position
                    FROM squadra s
                    order by (SELECT count(id_squadra_vincente) FROM partite WHERE id_squadra_vincente = s.id) * 3 desc'
                );

                return response($classifica, 200);

            } else
                return response('{"error": "Utente non abilitato."}', 404);
        } else
            return response('{
                            "error": "Token non esistente."}', 404);
    }


    public function calendario(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        if (isset($dati['token'])) {
            $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
            if ($utenti[0]->abilitato == 1) {
                $programma = DB::connection('mysql')->
                select('SELECT
                              p.id AS IdPartita,sc.nome as nomecasa,sc.img as immaginecasa,so.nome as nomeospite,so.img as immagineospite,p.data as datamatch
                              FROM partite p
                              LEFT JOIN squadra sc ON p.id_squadra_casa = sc.id
                              LEFT JOIN squadra so ON p.id_squadra_ospite = so.id
                              WHERE p.completata = 0'
                );

                return response($programma, 200);

            } else
                return response('{"error": "Utente non abilitato."}', 404);
        } else
            return response('{
                            "error": "Token non esistente."}', 404);
    }


    public function notifica(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        if (isset($dati['token'])) {
            $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
            if (sizeof($utenti) <= 0) return response('{"error":"Utente offline."}', 404);
            if ($utenti[0]->abilitato == 1) {
                $notifiche = DB::connection('mysql')->select('SELECT * from notifica order by id desc');

                return response($notifiche, 200);

            } else
                return response('{"error": "Utente non abilitato."}', 404);
        } else
            return response('{
                            "error": "Token non esistente."}', 404);
    }

    public function crea_notifica(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        // if (isset($dati['token'])) {
        //     $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
        //     if (sizeof($utenti) <= 0) return response('{"error":"Utente offline."}', 404);
        //     if ($utenti[0]->abilitato == 1) {

        if ($request->has('image')) {
            // Decodifica dell'immagine base64
            $imageData = base64_decode($request->input('image'));

            // Genera un nome univoco per l'immagine
            $imageName = time() . '.jpg';

            // Percorso dove salvare l'immagine
            $imagePath = public_path('images/') . $imageName;

            // Salva l'immagine sul server
            file_put_contents($imagePath, $imageData);

            // URL dell'immagine salvata
            $imageUrl = asset('images/' . $imageName);

            // Invia una risposta al client
            return response()->json(['success' => true, 'image_url' => $imageUrl]);
        } else {
            return response()->json(['success' => false, 'message' => 'Nessuna immagine inviata']);
        }

        //         //  return response($notifiche, 200);
        //     } else
        //         return response('{"error": "Utente non abilitato."}', 404);
        // } else
        //     return response('{
        //                     "error": "Token non esistente."}', 404);
    }


    function test()
    {
        // Definizione delle squadre di Serie A
        $squadre = array("Juventus", "Inter", "Milan", "Napoli", "Roma", "Atalanta");

        // Funzione per generare tutte le partite
        /*   function generaCalendario($squadre)
           {
               $calendario = array();

               // Itera su tutte le squadre
               foreach ($squadre as $squadraCasa) {
                   foreach ($squadre as $squadraTrasferta) {
                       // Assicura che la squadra di casa non giochi contro se stessa
                       if ($squadraCasa !== $squadraTrasferta) {
                           $calendario[] = array($squadraCasa, $squadraTrasferta);
                       }
                   }
               }

               return $calendario;
           }

           // Funzione per mescolare le partite in modo casuale
           function mescolaPartite($calendario)
           {
               shuffle($calendario);
               return $calendario;
           }

           // Funzione per generare il calendario con partite uniche per giornata
           function generaCalendarioUnico($squadre)
           {
               $calendario = generaCalendario($squadre);
               $calendario = mescolaPartite($calendario);
               return $calendario;
           }

           // Genera il calendario
           $calendario = generaCalendarioUnico($squadre);
           print_r($calendario);
           echo '************************';
           // Stampare il calendario
           foreach ($calendario as $giornata => $partite) {
               echo "Giornata " . ($giornata + 1) . ":\n";
               foreach ($partite as $partita) {
                   echo $partita[0] . " vs " . $partita[0] . "\n";
               }
               echo "\n";
           }

           echo "\n";
           echo "\n";
           echo "\n";
           // Funzione per generare le partite di una giornata*/

        $partite = array();
        $numSquadre = count($squadre);

        // Itera su tutte le squadre tranne l'ultima
        for ($i = 0; $i < $numSquadre - 1; $i++) {
            // Itera sulle squadre successive
            for ($j = $i + 1; $j < $numSquadre; $j++) {
                // Aggiungi la partita con l'ordine corretto delle squadre
                $partite[] = array($squadre[$i], $squadre[$j]);
            }
        }
        //echo '********************************';
        //print_r($partite);

        // Funzione per generare il calendario con partite uniche per giornata
        function generaCalendario($squadre)
        {
            $calendario = array();
           // $partite = generaPartite($squadre);
            $numeroGiornata = 1;

            // Dividi le partite in gruppi per giornata
            $gruppiPartite = array_chunk($partite, count($squadre) / 2);

            // Assegna il numero di giornata progressivo ad ogni gruppo di partite
            foreach ($gruppiPartite as $gruppoPartite) {
                echo "Giornata " . $numeroGiornata . ":\n";
                foreach ($gruppoPartite as $partita) {
                    echo $partita[0] . " vs " . $partita[1] . "\n";
                }
                echo "\n";
                $numeroGiornata++;
            }
        }


        generaCalendario($squadre);
    }


    public function dettaglio_squadra(Request $request)
    {
        $dati = json_decode(file_get_contents('php://input'), true);
        if (isset($dati['token'])) {
            $utenti = DB::connection('mysql')->select('SELECT * from utente where access_token = \'' . $dati['token'] . '\' ');
            if (isset($dati['id_squadra'])) {
                if ($utenti[0]->abilitato == 1) {
                    $giocatori = DB::connection('mysql')->
                    select('SELECT
                                coalesce(SUM(assist),0) as assist,
                                coalesce(SUM(gol),0) as gol,
                                COUNT(s.id) as presenze,
                                u.nominativo,
                                u.id as id_giocatore,
                                g.ruolo
                                FROM utente u
                                LEFT JOIN statistiche_partita s on u.id = s.id_giocatore
                                LEFT JOIN giocatori g on g.id_utente = u.id
                                WHERE u.id_squadra = \'' . $dati['id_squadra'] . '\'
                                GROUP BY u.nominativo,u.id,g.ruolo'
                    );
                    $squadra = DB::connection('mysql')->
                    select('
                                SELECT
                                (SELECT nome FROM squadra WHERE id = \'' . $dati['id_squadra'] . '\') AS nome,
                                (SELECT count(id) from partite   where completata = 1 and id_squadra_vincente = \'' . $dati['id_squadra'] . '\' ) as partitevinte,
                                (SELECT count(id) from partite   where completata = 1 and (id_squadra_casa = \'' . $dati['id_squadra'] . '\' OR id_squadra_ospite = \'' . $dati['id_squadra'] . '\') and id_squadra_vincente != \'' . $dati['id_squadra'] . '\') as partiteperse,
                                (SELECT count(id) from partite where completata = 1 and (id_squadra_casa = \'' . $dati['id_squadra'] . '\' OR id_squadra_ospite = \'' . $dati['id_squadra'] . '\')) as presenze'
                    );

                    return response(array("squadra" => $squadra, "giocatori" => $giocatori), 200);

                } else
                    return response('{
                        "error": "Utente non abilitato."}', 404);
            } else
                return response('{
                        "error": "Nessuna Squadra Scelta."}', 404);
        } else
            return response('{
                        "error": "Token non esistente."}', 404);
    }

}
