<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index() //halawan awal
    {
        //mengambil data dari tabel pegawai
        // $pegawai = DB::table('tblpegawai')->get();//untuk mengambil semua data di database pegawai
        $pegawai = DB::table('tblpegawai')->paginate(10); //untuk mengambil semua data di database pegawai tetapi memakai pagination


        //mengirim data pegawai ke view
        return view('index', ['pegawai' => $pegawai]);
    }

    //method untuk mengambil view form tambah pegawai
    public function tambah()
    {
        //memanggil view untuk tampilan tambah
        return view('tambah');
    }

    //method untuk insert data ke table pegawai 
    public function store(Request $request)
    {
        //insert data ke table pegawai
        DB::table('tblpegawai')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        //mengalihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //method untuk edit data pegawai by id
    public function edit($id)
    {
        //pertama mengambil data dari tabel by id
        $pegawai = DB::table('tblpegawai')->where('id', $id)->get(); //menyimpan data yang di ambil ke variabel pegawai
        //passing data pegawai yang didapat ke view filenya edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    //method update data pegawai
    public function update(Request $request)
    {
        //update data pegawai 
        DB::table('tblpegawai')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //method untuk hapus data pegawai
    public function hapus($id)
    {
        //cara menghapus data pegawai by id yang di pilih
        DB::table('tblpegawai')->where('id', $id)->delete();
        //setelah di hapus alihkan halaman ke halaman pegawai index
        return redirect('/pegawai');
    }
    //method untuk mencari data pegawai
    public function cari(Request $request)
    {
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('tblpegawai')->where('nama', 'like', '%' . $cari . '%')->paginate();

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PegawaiController extends Controller
// {
//     public function index($nama) //menyimpan yang dimasukan user 
//     {
//         return $nama; //menampilkannya
//     }

//     public function formulir()
//     {
//         return view('formulir');
//     }

//     public function proses(Request $request)
//     {
//         $nama = $request->input('nama');
//         $alamat = $request->input('alamat');
//         return "Nama : " . $nama . ",  Alamat  : " . $alamat;
//     }
//}
