<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasIds = DB::table(table:'kelass')->pluck(column: 'id');
        $sppIds = DB::table(table:'spps')->pluck(column: 'id');
        DB::table('siswas')->Insert([
            'nisn' => str::random(10),
            'nis' => str::random(8),
            'nama' => str::random(35),
            'kelas_id' => $kelasIds->random(),
            'alamat' => str::random(),
            'no_telp' => str::random(13),
            'spp_id' => $sppIds->random(),
        ]);
    }
}
