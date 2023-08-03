<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cycle::create(
            [
                'code_cycle' => 'Cy1',
                'libelle_cycle' => 'Cycle 1',
            ]
        );

        Cycle::create(
            [
                'code_cycle' => 'Cy2',
                'libelle_cycle' => 'Cycle 2',
            ]
        );
    }
}
