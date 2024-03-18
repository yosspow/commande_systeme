<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            'name' => 'nike jordan',
            'price' => 200.23,

        ]);
        Produit::create([
            'name' => 'nike sweather',
            'price' => 50.23,

        ]);
        Produit::create([
            'name' => 'gucui watch',
            'price' => 6000.23,

        ]);
        Produit::create([
            'name' => 'adiddas bag',
            'price' => 63.23,

        ]);

    }
}
