<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; //harus menggunakan use DB
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //mengaktifkan faker

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cara insert data ke tabel database pegawai
        //dengan manual
        // DB::table('tblpegawai')->insert([
        //     'nama' => 'Joni',
        //     'jabatan' => 'Web Development',
        //     'umur' => '25',
        //     'alamat' => 'cimahi cibeber'
        // ]);

        //cara input data dengan data fake
        $faker = Faker::create('id_ID'); //agar data fakenya di indonesia
        for ($i = 1; $i <= 50; $i++) { //pengulangan inputan sampai dengan 50 data
            //insert data ke tabel database pegawai menggunakan data faker
            DB::table('tblpegawai')->insert([
                'nama' => $faker->name, //data fake nama
                'jabatan' => $faker->jobTitle, //data fake jabatan
                'umur' => $faker->numberBetween(25, 50), //data fake nomor dari 25 sampai 50
                'alamat' => $faker->address //data fake untuk alamat
                //setelah proses untuk penginputan selesai lakukan eksekusi melalu command promt dengan
                //mengetikan php artisan db:seed --class=PegawaiSeeder
                //PegawaiSeeder adalah nama file yang berisikan coding input faker dan seeder
            ]);
        }
    }
}
