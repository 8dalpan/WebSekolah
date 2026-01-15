<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
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
            'nis'=>mt_rand(0000000,9999999),
            'nama'=> $this->faker->name(),
            'jenis_kelamin'=> Arr::random(['L','P']),
            'kelas'=> Arr::random(['X','XI','XII']),
            'jurusan'=> Arr::random(['TKJ','RPL','DKV']),
            'no_hp'=> $this->faker->phoneNumber(),

        ];
    }
}
