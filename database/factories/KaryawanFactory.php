<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip'=>fake()->unique()->numerify('NIP-####'),
            'nama'=>fake()->name(),
            'jabatan'=>fake()->jobTitle(),
            'divisi'=>fake()->randomElement(['SOC', 'Pentesting', 'Network', 'Software Development']),
            'gaji'=>fake()->numberBetween(15000000, 80000000),
            'tanggal_masuk'=>fake()->date(),
            'keterangan'=>fake()->optional()->sentence()
        ];
    }
}
