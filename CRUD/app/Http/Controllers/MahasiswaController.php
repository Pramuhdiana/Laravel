<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
// use Dompdf;
// use Dompdf\Dompdf as DompdfDompdf;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class MahasiswaController extends Controller
{
    public function index()
    {
        //mengambil data mahasiswa di tabel database
        $mahasiswa = Mahasiswa::all();

        //mengirim data mahasiswa ke view mahasiswa
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    //method cetaknya
    public function cetak_pdf()
    {
        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
        return $pdf->download('laporan.pdf');
        // return view('mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
    }
}
