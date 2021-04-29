<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErorController extends Controller
{
    public function index($nama)
    {
        if ($nama == "sandy") {
            return abort(403, 'Anda tidak punya akses karena anda bukan pro');
        } elseif ($nama == "admin") {
            return "Halo, " . $nama;
        } else {
            return abort(404);
        }
    }
}
