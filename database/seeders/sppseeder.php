<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class sppseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('spps')->insert([
            "id_spp" => random_int(1,20),
            "tahun"=>random_int(1000,3000),
            "nominal"=>random_int(1,1000000),
        ]);
    }
}
