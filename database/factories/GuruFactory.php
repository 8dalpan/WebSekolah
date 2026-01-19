<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class GuruFactory extends Factory
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
    'nip' => $this->faker->unique()->numberBetween(100000,999999),
    'nama' => $this->faker->name(),
    'jenis_kelamin' => Arr::random(['L','P']),
    'mata_pelajaran' => Arr::random(['Web','Jaringan','Design Grafis']),
    'no_hp' => $this->faker->phoneNumber(),
    'alamat' => $this->faker->address(),
    'status_kepegawaian' => Arr::random(['ASN','Honorer','PPPK']),
        ];
    }
}
