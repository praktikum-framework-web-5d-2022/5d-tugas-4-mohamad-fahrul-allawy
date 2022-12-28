<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        \App\Models\MataKuliah::factory()->count(50)->create();
    }
}