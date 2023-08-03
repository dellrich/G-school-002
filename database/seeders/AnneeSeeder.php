<?php

namespace Database\Seeders;

use App\Models\Anneeacademique;
use Illuminate\Database\Seeder;

class AnneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anneeacademique::create(
            [
                'code_ac' => '2021-2022',
                'date_deb' => '08-11-2021',
                'date_fin' => '2022',
                'Statut_ac' => 1,
            ]
        );

        Anneeacademique::create(
            [
                'code_ac' => '2020-2021',
                'date_deb' => '08-11-2020',
                'date_fin' => '2021',
                'Statut_ac' => 0,
            ]
        );
    }
}
