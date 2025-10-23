<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lamp;

class LampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lamp ::create([ 
            'name' => 'Lampu Teras',
        ]);

        Lamp ::create([ 
            'name' => 'Lampu Lampu Tengah',
        ]);

        Lamp ::create([ 
            'name' => 'Lampu Kamar',
        ]);

    }
}
