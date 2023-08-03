<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AnneeSeeder::class);
        $this->call(CycleSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(TrimestreSeeder::class);
        $this->call(SexeSeeder::class);

    }
}
