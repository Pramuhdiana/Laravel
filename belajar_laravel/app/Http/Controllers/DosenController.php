<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //invoke jika diperlukan
    // public function __invoke()
    // {
    //     // return view('dosen.index');
    // }
    public function index()
    {
        return view('biodata');
    }
}
