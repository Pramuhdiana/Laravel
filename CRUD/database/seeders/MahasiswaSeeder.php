<?php

namespace Database\Seeders;
//aktifkan faker
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table mahasiswa
        $faker = Faker::create('id_ID'); //agar informasinya orang2 indonesia

        for ($i = 0; $i <= 15; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'umur' => $faker->numberBetween(17, 26),
                'alamat' => $faker->address

            ]);
        }
    }
}
