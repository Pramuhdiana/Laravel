<?php

//membuat controller memakai cmd = php artisan make:controller NamaController --invokable
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class BlogController extends Controller
// {
//     /**
//      * Handle the incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function __invoke(Request $request)
//     {
//         return "nyoba diang pake controller";
//     }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        return view('blog.index');
    }
    public function index()
    {
        return 'Ini halaman blog';
    }
}
