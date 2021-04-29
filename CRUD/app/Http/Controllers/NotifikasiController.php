<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Session;

class NotifikasiController extends Controller
{
    public function index()
    {
        return view('notifikasi');
    }

    public function sukses()
    {
        session()->flash('sukses', 'Ini notifikasi SUKSES');
        return redirect('pesan');
    }

    public function peringatan()
    {
        session()->flash('peringatan', 'Ini notifikasi PERINGATAN');
        return redirect('pesan');
    }

    public function gagal()
    {
        session()->flash('gagal', 'Ini notifikasi GAGAL');
        return redirect('pesan');
    }
}
