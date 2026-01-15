<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama_mapel'=>$this->faker->randomElement([
    // RPL
    'Pemrograman Web',
    'Basis Data',
    'Laravel',

    // DKV
    'Desain Grafis',
    'Tipografi',
    'Motion Graphic',

    // Jaringan
    'Mikrotik',
    'Administrasi Server',
    'Keamanan Jaringan'
    ])
    ];
    }
}
