<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0 ; $i<20; $i++){
            DB::table('products')->insert([
                'name'=>Str::random(10),
                'category_id'=>random_int(1,10),
                'pricing'=>rand(1,100),
                'description'=>fake()->sentence(),
            ]);
        }
    }
}
