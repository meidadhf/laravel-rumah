<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PetugassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugass')->Insert([
            'username' => str::random(25),
            'password' => str::random(32),
            'nama_petugas' => str::random(35),
            'level' => collect(['admin','petugas'])->random(),
        ]);
    }
}
