<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dieta')->insert([
            [
                'Comida' => 'Pollo',
                'Calorias' => 13.2,
                'Grasas' => 0.5,
                'Carbohidratos' => 20,
                'Proteinas' => 37,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'Comida' => 'Arroz',
                'Calorias' => 7.2,
                'Grasas' => 0.2,
                'Carbohidratos' => 5,
                'Proteinas' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'Comida' => 'Carne',
                'Calorias' => 18.7,
                'Grasas' => 3.5,
                'Carbohidratos' => 10,
                'Proteinas' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'Comida' => 'Pasta',
                'Calorias' => 8.3,
                'Grasas' => 1.9,
                'Carbohidratos' => 37,
                'Proteinas' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
