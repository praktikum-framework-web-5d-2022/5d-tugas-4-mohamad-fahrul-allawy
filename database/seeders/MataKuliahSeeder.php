<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\MataKuliah;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Mahasiswa::create([
                'kode_mk' => $faker->unique()->numerify('IF###'),
                'nama_mk' => $faker->firstName . " " . $faker->lastName,
                'sks' => $faker->numberBetween(1, 4),
                'nama_dosen' => $faker->firstName . " " . $faker->lastName
            ]);
        };
    }
}