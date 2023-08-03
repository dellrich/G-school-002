<?php

namespace Database\Seeders;

use App\Models\Matiere;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matiere::create(['nom_matiere' => 'Français']);
        Matiere::create(['nom_matiere' => 'Anglais']);
        Matiere::create(['nom_matiere' => 'Mathématique']);
        Matiere::create(['nom_matiere' => 'EPS']);
        Matiere::create(['nom_matiere' => 'Histoire-Géographie']);
    }
}
