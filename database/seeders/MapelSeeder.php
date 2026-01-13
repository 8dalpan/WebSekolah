<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mapel::create([
        'nama_mapel'=>'web'
        ]);

    }
}
