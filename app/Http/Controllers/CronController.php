<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TariffeImport;


class CronController extends Controller {

    public function invia_lista_attrezzature($token){

        if($token = 'skjhdjkasldajdlajk') {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtps.aruba.it;smtps.aruba.it';
            $mail->SMTPAuth = true;
            $mail->Username = 'gestionale@officinariparazionirotabili.com';
            $mail->Password = 'Aliperti2022?';
            $mail->SMTPSecure = 'ssl';
            $mail->CharSet = 'utf-8';
            $mail->Port = 465;
            $mail->setFrom('gestionale@officinariparazionirotabili.com');
            $mail->addAddress('info@officinariparazionirotabili.com');
            $mail->addBCC('giovinefabio@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = 'Report Situazioni Attrezzature ' . date('d/m/Y');

            $attrezzature = DB::select('SELECT *,TIMESTAMPDIFF(MONTH,ultima_revisione,NOW()) AS scadenza_revisione,TIMESTAMPDIFF(MONTH,data,NOW()) AS scadenza_mese from attrezzature order by ultima_revisione asc,data asc');

            $html = View::make('stampa.attrezzature', compact('attrezzature'));
            $mpdf = new \Mpdf\Mpdf(['format' => 'A4-L', 'mode' => 'utf-8', 'margin_left' => 5, 'margin_right' => 5, 'margin_top' => 0, 'margin_bottom' => 10, 'margin_header' => 0, 'margin_footer' => 0]);
            $mpdf->WriteHTML($html);
            $mpdf->Output('attrezzature_' . date('Y_m_d') . '.pdf', 'F');
            $mail->AddAttachment('attrezzature_' . date('Y_m_d') . '.pdf', 'Lista Attrezzature ' . (date('d/m/Y') . '.pdf'));
            $mail->Body = 'Lista Attrezzature In Scadenza al ' . date('d/m/Y');
            $mail->send();
        }
    }

    public function scarica_fatture($ore){

        SdiController::scarica_esiti($ore);
    }
}
