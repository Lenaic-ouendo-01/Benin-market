<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Marche;
use App\Models\Ville;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Ville::upsert([
            ['nomville' => 'Cotonou'],
            ['nomVille' => 'Porto-Novo'],
        ],['nomVille']);

        Marche::upsert([
            ['nomMarche' => 'Gbégamey', 'description' => 'Description 01', 'capacite' => 458, 'adresse' => 'adresse 01', 'telephone' => 'telephone 01', 'image' => 'image01', 'ville_id' => 1],
            ['nomMarche' => 'Mènontin', 'description' => 'Description 02', 'capacite' => 300, 'adresse' => 'adresse 02', 'telephone' => 'telephone 02', 'image' => 'image02', 'ville_id' => 1],
            ['nomMarche' => 'Wologuèdè', 'description' => 'Description 03', 'capacite' => 200, 'adresse' => 'adresse 03', 'telephone' => 'telephone 03', 'image' => 'image03', 'ville_id' => 2],
        ],['nomMarche','description','capacite','adresse','telephone','image','ville_id']);
    }
}
