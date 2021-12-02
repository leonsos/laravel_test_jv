<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory()->create([
            'name' => 'Producto 1',
            'price' =>'123.45',
            'tax'=>'5'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Producto 2',
            'price' =>'45.65',
            'tax'=>'15'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Producto 3',
            'price' =>'39.73',
            'tax'=>'12'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Producto 4',
            'price' =>'250.00',
            'tax'=>'8'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Producto 5',
            'price' =>'59.35',
            'tax'=>'10'
        ]);
    }
}
