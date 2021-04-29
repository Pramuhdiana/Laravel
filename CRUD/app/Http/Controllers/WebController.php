<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//menggunakan model article
use App\Models\Article;

class WebController extends Controller
{
    public function index()
    {
        //memanggil semua article
        $artikel = Article::all();
        return view('article', ['artikel' => $artikel]);
    }
}
