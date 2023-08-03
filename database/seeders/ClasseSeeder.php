<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classe::create(
            [
                
                'libelle_classe' => '6 EME',
                'scolarite' => 500000,
                'tranche1' => 200000,
                'tranche2' => 150000,
                'tranche3' => 150000,
                'id_cycle' => 1,
            ],
        );

        Classe::create(
            [
                
                'libelle_classe' => '5 EME',
                'scolarite' => 500000,
                'tranche1' => 200000,
                'tranche2' => 150000,
                'tranche3' => 150000,
                'id_cycle' => 1,
            ]
        );

        Classe::create(
            [
              
                'libelle_classe' => '4 EME',
                'scolarite' => 500000,
                'tranche1' => 200000,
                'tranche2' => 150000,
                'tranche3' => 150000,
                'id_cycle' => 1,
            ]
        );
    }
}

