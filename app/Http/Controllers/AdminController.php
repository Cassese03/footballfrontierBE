<?php

namespace App\Http\Controllers;

use App\Exports\MassiveViewExport;
use App\Exports\MassiveViewExport2;
use App\Exports\MassiveViewExportGTS;
use App\Exports\SearchResultExport;
use App\Imports\ArticoliImport;
use App\Imports\BOMImport;
use App\Imports\MagazzinoImport;
use App\Imports\BPImport;
use App\Imports\StoricoImport;
use App\Imports\VenditeImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TariffeImport;
use App\Http\Controllers\URL;


class AdminController extends Controller
{


    public function login(Request $request)
    {

        $dati = $request->all();
        $error = '';

        /* if (session()->has('utente')) {
             $utente = session()->utente;
             if ($utente->id_tipologia == '1')
                 return Redirect::to('admin/index');
             if ($utente->id_tipologia == '2')
                 return Redirect::to('superadmin/index');
             if ($utente->id_tipologia == '3')
                 return Redirect::to('host/index');
             if ($utente->id_tipologia == '4')
                 return Redirect::to('cliente/index');

             return View::make('admin.content.login', compact('error'));
         }
 */
        if (isset($dati['login'])) {

            $utenti = DB::select('SELECT * from utenti where abilitato = 1 and email = "' . htmlentities($dati['email'], 3, 'UTF-8' . '') . '" and password = "' . htmlentities($dati['password'], 3, 'UTF-8' . '') . '"');

            if (sizeof($utenti) > 0) {

                $utente = $utenti[0];
                session(['utente' => $utente]);
                session()->save();
                if ($utente->id_tipologia == '1')
                    return Redirect::to('admin/index');
                if ($utente->id_tipologia == '2')
                    return Redirect::to('superadmin/index');
                if ($utente->id_tipologia == '3')
                    return Redirect::to('host/index');
                if ($utente->id_tipologia == '4')
                    return Redirect::to('cliente/index');

            } else $error = 'Inserisci username e password corretti';

        }

        return View::make('admin.content.login', compact('error'));
    }

    public function index(Request $request)
    {

        $this->is_loggato();
        $utente = session('utente');
        $page = 'index';

        return View::make('admin.index', compact('page', 'utente'));

    }


    public function preferenze(Request $request)
    {

        $dati = $request->all();

        if (isset($dati['insert_image'])) {

            $target_dir = "immagini/uploads/";

            $target_file = $target_dir . basename($_FILES["file_" . $dati['id']]["name"]);

            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $target_file = $target_dir . 'dhonko_preferenza_' . rand() . '.' . $imageFileType;

            $check = getimagesize($_FILES["file_" . $dati['id']]["tmp_name"]);
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo '<script>alert("File is not an image.")</script>';
                $uploadOk = 0;
            }


            if (file_exists($target_file)) {
                echo '<script>alert("File già esiste.")</script>';
                $uploadOk = 0;
            }

            if ($_FILES["file_" . $dati['id']]["size"] > 500000) {

                echo '<script>alert("Sorry, your file is too large.")</script>';
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo '<script>alert(\'Errore su File 1\')</script>';
            } else {
                if (move_uploaded_file($_FILES["file_" . $dati['id']]["tmp_name"], $target_file)) {
                    DB::SELECT('Insert into oggetti_preferenza (id_preferenza,img,content) VALUES(' . $dati['id'] . ',\'' . 'https://dhonko.it/' . str_replace(' ', '', $target_file) . '\' ,\'' . 'https://dhonko.it/' . str_replace(' ', '', $target_file) . '\' )');
                    echo '<script>alert(\'Immagine inserita correttamente\')</script>';
                } else {
                    echo '<script>alert(\'Errore su File 2\')</script>';
                }
            }
        }
        $this->is_loggato();
        $utente = session('utente');
        $page = 'preferenze';
        $preferenze = DB::SELECT('select *,(SELECT COUNT(*) FROM oggetti_preferenza where preferenza.id = oggetti_preferenza.id_preferenza) as count,(SELECT tipo_preferenza.max_count FROM  tipo_preferenza  where preferenza.id_type = tipo_preferenza.id) as max_count from preferenza');
        $oggetti = DB::SELECT('select oggetti_preferenza.* from preferenza LEFT JOIN oggetti_preferenza ON preferenza.id = oggetti_preferenza.id_preferenza');
        $tipo_preferenze = DB::SELECT('select * from tipo_preferenza');

        return View::make('admin.index', compact('page', 'utente', 'preferenze', 'oggetti', 'tipo_preferenze'));

    }

    public function viaggi(Request $request)
    {

        $this->is_loggato();
        $utente = session('utente');
        $page = 'viaggi';
        $viaggi = DB::SELECT('SELECT *,(SELECT COUNT(*) FROM partecipanti_viaggio where partecipanti_viaggio.id_viaggio = viaggi.id) as num_partecipanti  FROM viaggi');
        return View::make('admin.index', compact('page', 'utente', 'viaggi'));

    }

    public function dettaglio_viaggio(Request $request, $id)
    {
        $this->is_loggato();
        $utente = session('utente');
        $dati = $request->all();

        if (isset($dati['insert_image'])) {

            $target_dir = "immagini/uploads/";

            $target_file = $target_dir . basename($_FILES["file_" . $dati['id']]["name"]);

            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $target_file = $target_dir . 'dhonko_img_viaggio_' . rand() . '.' . $imageFileType;

            $check = getimagesize($_FILES["file_" . $dati['id']]["tmp_name"]);
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo '<script>alert("File is not an image.")</script>';
                $uploadOk = 0;
            }


            if (file_exists($target_file)) {
                echo '<script>alert("File già esiste.")</script>';
                $uploadOk = 0;
            }

            if ($_FILES["file_" . $dati['id']]["size"] > 500000) {

                echo '<script>alert("Sorry, your file is too large.")</script>';
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo '<script>alert(\'Errore su File 1\')</script>';
            } else {
                if (move_uploaded_file($_FILES["file_" . $dati['id']]["tmp_name"], $target_file)) {
                    DB::SELECT('Insert into immagini_viaggio (id_viaggio,link) VALUES(' . $dati['id'] . ',\'' . 'https://dhonko.it/' . str_replace(' ', '', $target_file) . '\')');
                    echo '<script>alert(\'Immagine inserita correttamente\')</script>';
                } else {
                    echo '<script>alert(\'Errore su File 2\')</script>';
                }
            }
        }


        if (isset($dati['modifica'])) {
            unset($dati['modifica']);
            $dati['info_lingue'] = $dati['info_lingua_1'] . '';
            if (isset($dati['info_lingua_2'])) $dati['info_lingue'] .= ',' . $dati['info_lingua_2'];

            unset($dati['info_lingua_1']);
            unset($dati['info_lingua_2']);
            $check = DB::SELECT('SELECT * from info_viaggio where id_viaggio = \'' . $id . '\'');
            if (sizeof($check) > 0)
                DB::SELECT('UPDATE info_viaggio set tipo_viaggio = \'' . $dati['info_tipo_viaggio'] . '\',budget = \'' . $dati['info_budget'] . '\', pernottamento = \'' . $dati['info_pernottamento'] . '\',lingue = \'' . $dati['info_lingue'] . '\', eta_min = \'' . $dati['info_eta_min'] . '\', eta_max = \'' . $dati['info_eta_max'] . '\',gruppo = \'' . $dati['info_tipo_gruppo'] . '\' where id_viaggio = ' . $id);
            else {
                DB::SELECT('INSERT INTO info_viaggio (id_viaggio) values (' . $id . ')');
                DB::SELECT('UPDATE info_viaggio set tipo_viaggio = \'' . $dati['info_tipo_viaggio'] . '\',budget = \'' . $dati['info_budget'] . '\', pernottamento = \'' . $dati['info_pernottamento'] . '\',lingue = \'' . $dati['info_lingue'] . '\', eta_min = \'' . $dati['info_eta_min'] . '\', eta_max = \'' . $dati['info_eta_max'] . '\',gruppo = \'' . $dati['info_tipo_gruppo'] . '\' where id_viaggio = ' . $id);
            }
        }

        if (isset($dati['crea_road'])) {
            unset($dati['crea_road']);
            DB::table('roadmap')->insert($dati);
        }

        if (isset($dati['aggiungi_partecipante'])) {
            unset($dati['aggiungi_partecipante']);
            DB::table('partecipanti_viaggio')->insert($dati);
        }
        if (isset($dati['delete_road'])) {
            unset($dati['delete_road']);
            DB::table('roadmap')->delete($dati);
        }

        $page = 'dettaglio_viaggio';

        $dettaglio = DB::SELECT('SELECT * FROM viaggi where id = ' . $id);
        $info = DB::SELECT('SELECT * FROM info_viaggio where id_viaggio = ' . $id);
        $roadmap = DB::SELECT('SELECT *,(select title from tipo_roadmap where tipo_roadmap.id = roadmap.id_tipo_roadmap) as tipo_roadmap FROM roadmap where id_viaggio = ' . $id . ' Order by data_inizio asc');
        $date_roadmap = DB::SELECT('SELECT DISTINCT CONVERT(data_inizio,DATE) AS data_inizio FROM roadmap where id_viaggio = ' . $id . ' order by data_inizio asc');
        $tipo_roadmap = DB::SELECT('SELECT * FROM tipo_roadmap');
        $lingue = DB::SELECT('SELECT * FROM lingua');
        //$partecipanti = DB::SELECT('SELECT * FROM partecipanti_viaggio p LEFT JOIN utenti u ON u.id = p.id_utente LEFT JOIN info_utente i ON u.id = i.id_utente WHERE p.id_viaggio = ' . $id);
        $partecipanti = DB::SELECT('SELECT *, if(p.ruolo = \'CREATORE\',true,false) as owner FROM partecipanti_viaggio p LEFT JOIN utenti u ON u.id = p.id_utente LEFT JOIN info_utente i ON u.id = i.id_utente WHERE p.id_viaggio = ' . $id .' ORDER BY owner desc');
        $immagini_viaggio = DB::SELECT('SELECT * FROM immagini_viaggio WHERE id_viaggio = ' . $id );

        if (sizeof($dettaglio) > 0) $dettaglio = $dettaglio[0];
        if (sizeof($info) > 0) $info = $info[0];

        return View::make('admin.index', compact('page', 'id', 'utente','immagini_viaggio', 'tipo_roadmap', 'info', 'roadmap', 'date_roadmap', 'dettaglio', 'partecipanti', 'lingue'));

    }

    public function filtri_viaggio(Request $request)
    {

        $this->is_loggato();
        $utente = session('utente');
        $page = 'filtri_viaggio';
        $preferenze = DB::SELECT('select *,(SELECT COUNT(*) FROM oggetti_filtri_viaggio where filtri_viaggio.id = oggetti_filtri_viaggio.id_filtro) as count,(SELECT tipo_preferenza.max_count FROM  tipo_preferenza  where filtri_viaggio.id_type = tipo_preferenza.id) as max_count from filtri_viaggio');
        $oggetti = DB::SELECT('select oggetti_filtri_viaggio.* from filtri_viaggio LEFT JOIN oggetti_filtri_viaggio ON filtri_viaggio.id = oggetti_filtri_viaggio.id_filtro');
        $tipo_preferenze = DB::SELECT('select * from tipo_preferenza');
        return View::make('admin.index', compact('page', 'utente', 'preferenze', 'oggetti', 'tipo_preferenze'));

    }


    public function consigli(Request $request)
    {

        $this->is_loggato();
        $utente = session('utente');
        $page = 'consigli';
        $group_consigli = DB::SELECT('select title from consigli group by title');
        $consigli = DB::SELECT('select * from consigli');
        //$oggetti = DB::SELECT('select oggetti_filtri_viaggio.* from filtri_viaggio LEFT JOIN oggetti_filtri_viaggio ON filtri_viaggio.id = oggetti_filtri_viaggio.id_filtro');
        $tipo_roadmap = DB::SELECT('select * from tipo_roadmap');
        return View::make('admin.index', compact('page', 'utente', 'consigli','group_consigli','tipo_roadmap'));

    }

    public function tutorial(Request $request, $id_tipologia)
    {

        $this->is_loggato();
        $dati = $request->all();
        if (isset($dati['id'])) {
            if (isset($dati['img_' . $dati['id']])) {

                $target_dir = "immagini/uploads/";

                $target_file = $target_dir . basename($_FILES["img_" . $dati['id']]["name"]);

                $uploadOk = 1;

                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                $target_file = $target_dir . 'dhonko_tutorial_' . rand() . '.' . $imageFileType;

                $check = getimagesize($_FILES["img_" . $dati['id']]["tmp_name"]);
                if ($check !== false) {
                    //  echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo '<script>alert("File is not an image.")</script>';
                    $uploadOk = 0;
                }


                if (file_exists($target_file)) {
                    echo '<script>alert("File già esiste.")</script>';
                    $uploadOk = 0;
                }

                if ($_FILES["img_" . $dati['id']]["size"] > 500000) {

                    echo '<script>alert("Sorry, your file is too large.")</script>';
                    $uploadOk = 0;
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo '<script>alert(\'Errore su File 1\')</script>';
                } else {
                    if (move_uploaded_file($_FILES["img_" . $dati['id']]["tmp_name"], $target_file)) {
                        DB::SELECT('UPDATE tutorial set img = \'' . 'https://dhonko.it/' . str_replace(' ', '', $target_file) . '\' where id = ' . $dati['id']);
                    } else {
                        echo '<script>alert(\'Errore su File 2\')</script>';
                    }
                }
            }
            if (isset($dati['descrizione_' . $dati['id']])) {
                DB::SELECT('UPDATE tutorial set descrizione = \'' . $dati['descrizione_' . $dati['id']] . '\' where id = ' . $dati['id']);
            }
        }
        if (isset($dati['descrizione_new'])) {

            $ord = DB::SELECT('SELECT COALESCE(max(ordinamento),0)+1 as ord FROM tutorial where id_tipologia = '.$id_tipologia)[0]->ord;

            $dati['id'] = DB::table('tutorial')->insertGetId(
                ['descrizione' => $dati['descrizione_new'], 'ordinamento' => $ord,'id_tipologia'=>$id_tipologia]
            );

            $target_dir = "immagini/uploads/";

            $target_file = $target_dir . basename($_FILES["img_new"]["name"]);

            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $target_file = $target_dir . 'dhonko_tutorial_' . rand() . ' . ' . $imageFileType;

            $check = getimagesize($_FILES["img_new"]["tmp_name"]);
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo ' < script>alert("File is not an image.") </script > ';
                $uploadOk = 0;
            }


            if (file_exists($target_file)) {
                echo '<script > alert("File già esiste.")</script > ';
                $uploadOk = 0;
            }

            if ($_FILES["img_new"]["size"] > 500000) {

                echo '<script > alert("Sorry, your file is too large.")</script > ';
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo '<script > alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script > ';
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo '<script > alert(\'Errore su File 1\')</script>';
            } else {
                if (move_uploaded_file($_FILES["img_new"]["tmp_name"], $target_file)) {
                    DB::SELECT('UPDATE tutorial set img = \'' . 'https://dhonko.it/' . str_replace(' ', '', $target_file) . '\' where id = ' . $dati['id']);
                } else {
                    echo '<script>alert(\'Errore su File 2\')</script>';
                }
            }


        }
        $utente = session('utente');
        $page = 'tutorial';
        $tutorial = DB::SELECT('select * from tutorial where id_tipologia ='.$id_tipologia);
        $tipo = DB::SELECT('SELECT * from tipologia where id = '.$id_tipologia)[0];
        $tipologie = DB::SELECT('SELECT * from tipologia');
        return View::make('admin.index', compact('page','tipologie', 'tipo','utente', 'tutorial'));

    }

    public
    function logout()
    {
        session()->flush();
        return Redirect::to('admin/login');
    }

    public
    function is_loggato()
    {
        if (!session()->has('utente')) return Redirect::to('admin/login')->send();
    }


}
