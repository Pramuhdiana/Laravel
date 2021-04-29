<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $timestamps = false; //harus memakai ini saat input 
    protected $table = "pegawai";
    protected $fillable = ['nama', 'alamat'];
}
