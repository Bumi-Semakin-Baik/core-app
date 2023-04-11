<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCodeTest\Integration\ImagickRenderingTest;
use claviska\SimpleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Imagick;

class QrController extends Controller{
    public function index(){
        for($x = 1; $x <= 10; $x++){
            $treeName = 'BB2023KTG'.sprintf("%04d", $x);
            $image = QrCode::format('png')->size(500)->generate($treeName);
            $output_file = '/img/qr-code/PT Indofood/'.$treeName.'.png';
            Storage::disk('local')->put($output_file, $image);
            // $pdf = new Fpdi();
            // $pdf->AddPage();
            // // set the source file
            // $pdf->setSourceFile('asset/template-gelang.pdf');
            // // import page 1
            // $tplIdx = $pdf->importPage(1);
            // $pdf->useTemplate($tplIdx, 0, 0, null, null, true);
            // $pdf->AddFont("Poppins", '', 'poppins.php');
            // $pdf->SetFont("Poppins", '', 13);
            // $pdf->SetTextColor(0, 0, 0);

            // $pdf->Image('../storage/app/img/qr-code/'.$treeName.'.png', 157, 0.5, 15);
            // $pdf->Text(113, 13, $treeName);
            // $pdf->Output('4501-5000/'.$treeName.'.pdf', 'F');
        }
    }
    public function convert(){
        for($x = 1; $x <= 500; $x++){
            // $newImg->setSize(1920, 400);
            $newImg = new Imagick();
            $newImg->readImage(public_path('SOLINI_1-5000/1-500/BB2023SOL'.$x.'.pdf'));
            $saveImagePath = public_path('SOLINI_1-5000/1-500/BB2023SOL'.$x.'.png');
            $newImg->writeImages($saveImagePath, true);
        }

        // return response()->file($saveImagePath);
        dd("Berhasil");
    }
}
