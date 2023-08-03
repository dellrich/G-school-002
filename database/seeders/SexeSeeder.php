<?php

namespace Database\Seeders;

use App\Models\Sexe;
use Illuminate\Database\Seeder;

class SexeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexe::create(
            [
                'libelle' => 'Masculin',
            ],
        );

        Sexe::create(
            [
                'libelle' => 'Féminin',
            ],
        );
    }
}
