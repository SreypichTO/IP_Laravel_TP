<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products') -> insert([
            'name' => Str::random(10),
            'price' => rand(100, 1000),
            'description' => Str::random(10),
            
            
        ]);
    }
}
