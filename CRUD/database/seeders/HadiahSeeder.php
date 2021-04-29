<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//aktifkan faker
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class HadiahSeeder extends Seeder
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
            DB::table('hadiah')->insert([
                'nama_hadiah' => $faker->city
            ]);
        }
    }
}
