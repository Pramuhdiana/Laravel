<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//aktifkan faker
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Anggota_HadiahSeeder extends Seeder
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

        for ($i = 1; $i <= 10; $i++) {
            DB::table('anggota_hadiah')->insert([
                'anggota_id' => $faker->numberBetween(1, 5),
                'id_hadiah' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
