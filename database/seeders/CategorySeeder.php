<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
 * The database connection that should be used by the migration.
 *
    * @var string
    */
    protected $connection = 'Ecomerce_Backend';
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories') -> insert([
            'name' => Str::random(10),
        ]);
    }
}
