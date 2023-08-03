<?php

namespace Database\Seeders;

use App\Models\Trimestre;
use Illuminate\Database\Seeder;

class TrimestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trimestre::create(
            [
                'code_trim' => '1t',
                'libel_trim' => 'PREMIER TRIMESTRE',
                'date_debut' => '2021-07-15 15:42:25',
                'date_fin' => '2021-10-15 15:42:25',
                'id_annee' => 1,
            ],
        );

        Trimestre::create(
            [
                'code_trim' => '2t',
                'libel_trim' => 'DEUXIEME TRIMESTRE',
                'date_debut' => '2021-10-15 15:42:25',
                'date_fin' => '2021-12-15 15:42:25',
                'id_annee' => 1,
            ]
        );
    }
}
