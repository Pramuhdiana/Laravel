<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//aktifkan faker
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cara memanggil faker
        $faker = Faker::create('id_ID');

        //pengulangan penginputan 
        //penginputan faker 3 tabel sekaligus 
        //cara penginputan faker ke database
        for ($i = 1; $i <= 10; $i++) {
            DB::table('anggota')->insert([
                'nama' => $faker->name
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('anggota_hadiah')->insert([
                'anggota_id' => $faker->numberBetween(1, 10),
                'hadiah_id' => $faker->numberBetween(1, 10)
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            DB::table('hadiah')->insert([
                'nama_hadiah' => $faker->city
            ]);
        }
    }
}
