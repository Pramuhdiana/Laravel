<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model pegawai
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index() //home pegawai
    {
        //mengambil data pegawai
        $pegawai = Pegawai::all();

        //mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah() //input data dengan eloquent
    {
        return view('pegawai_tambah');
    }

    public function store(Request $request) //karena methodnya post jadi harus di tangkap datanya dan di simpan oleh variabel
    {
        $this->validate($request, [
            'nama' => 'required', //required agar wajib diisi
            'alamat' => 'required'
        ]);

        pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
