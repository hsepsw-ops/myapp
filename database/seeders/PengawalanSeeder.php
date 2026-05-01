<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PengawalanSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('pengawalans')->insert([
                'nama' => fake()->name(),
                'nik' => fake()->unique()->numerify('################'), // 16 digit
                'grup' => fake()->randomElement(['A', 'B', 'C']),
                'tanggal' => fake()->date(),
                'yang_dikawal' => fake()->randomElement([
                    'Direktur',
                    'Manager',
                    'Tamu VIP',
                    'Supervisor'
                ]),
                'rute_pengawalan' => fake()->address(),
                'evidence' => 'evidence_' . Str::random(5) . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}