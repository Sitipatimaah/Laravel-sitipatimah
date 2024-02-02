<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    $kelasIds=DB::table(table:'kelass')->pluck(column:'id');
    $sppIds=DB::table(table:'spps')->pluck(column:'id_spp');
        DB::table('siswas')->insert([
           'nisn'=>str::random(10),
           'nis'=>str::random(8),
           'nama'=>str::random( 35),
           'id_kelas'=>$kelasIds->random(),
           'alamat'=>str::random(),
           'no_telp'=>str::random(13),
           'id_spp'=>$sppIds->random(),
        ]);
    }
}
